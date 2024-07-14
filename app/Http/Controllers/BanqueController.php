<?php

namespace App\Http\Controllers;

use App\Mail\AdminBanqueMailCreate;
use App\Models\Ecole;
use App\Models\Banque;
use App\Mail\CompteResetB;
use App\Models\Payement2024;
use Illuminate\Http\Request;
use App\Mail\AdminBanqueMailReset;
use App\Mail\CompteMailb;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BanqueController extends Controller
{
    
    public function login(){
        return view('banque.login');
    }
    public function sign(){
        return view('banque.sign-up');
    }
    public function compte(Request $request){
        $rule=[
         'nom'=>'required|string',
         'prenom'=>'required|string',
         'email'=>'required|string',
         'banques'=>'required|string',
         'telephone'=>'required|string',
         'pwd'=>'required|string',
         'pwd1'=>'required|string',
         'codesecret'=>'required|string'
        ];
        $validator = Validator::make($request->all(), $rule);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // Récupérer les données validées
        $validatedData = $validator->validated();
    // Vérifier si les mots de passe sont identiques
  if ($validatedData['pwd'] !== $validatedData['pwd1']) {
      return redirect()->back()->withErrors(['error' => 'Les mots de passe ne correspondent pas'])->withInput();
      
  }
  
  $validatedData['pwd'] = bcrypt($validatedData['pwd']);
  $validatedData['codesecret1'] = '000';
  $validatedData['role'] = 'user';
switch ($validatedData['banques']) {
      case 'Afriland First Bank':
        
  $validatedData['role'] = 'afriland33458';
  $validatedData['codesecret1'] = '01234567891';
  $validatedData['role'] = bcrypt($validatedData['role']);
          break;
      case 'Commercial Bank':
        $validatedData['role'] = 'commercial2004';
        $validatedData['codesecret1'] = '01234567891';
        $validatedData['role'] = bcrypt($validatedData['role']);
          break;
          case 'UBA':
     $validatedData['role'] = 'ubabank3306';
     $validatedData['codesecret1'] = '01234567891';
     $validatedData['role'] = bcrypt($validatedData['role']);
             
           break;
           case 'SCB':
            
    $validatedData['role'] = 'scbbank44015';
    $validatedData['codesecret1'] = '01234567891';
    $validatedData['role'] = bcrypt($validatedData['role']);
            break;
        case 'SGBC':
          $validatedData['role'] = 'sgbcafrik2004';
          $validatedData['codesecret1'] = '01234567891';
          $validatedData['role'] = bcrypt($validatedData['role']);
            break;
            case 'EcoBank':
       $validatedData['role'] = 'panafricain2031';
       $validatedData['codesecret1'] = '01234567891';
       $validatedData['role'] = bcrypt($validatedData['role']);
                
             break;

             case 'BANGE BANK':
                
        $validatedData['role'] = 'bange2000';
        $validatedData['codesecret1'] = '123456789';
        $validatedData['role'] = bcrypt($validatedData['role']);
                break;
            case 'BGFI Bank':
              $validatedData['role'] = 'bgfi02004';
              $validatedData['codesecret1'] = '123456789';
              $validatedData['role'] = bcrypt($validatedData['role']);
                break;
                case 'CCA Bank':
           $validatedData['role'] = 'cca03306';
           $validatedData['codesecret1'] = '123456789';
           $validatedData['role'] = bcrypt($validatedData['role']);
                    // Enregistrement des données
                 break;
                 case 'Express Union':
                  // Ajouter un champ supplémentaire
          $validatedData['role'] = 'union1044015';
          $validatedData['codesecret1'] = '123456789';
          $validatedData['role'] = bcrypt($validatedData['role']);
                  break;
              case 'BICEC':
                $validatedData['role'] = 'bicec1022004';
                $validatedData['codesecret1'] = '01234567891';
                $validatedData['role'] = bcrypt($validatedData['role']);
                  break;
                  case 'Vision Finance':
             $validatedData['role'] = 'finance025012';
             $validatedData['codesecret1'] = '123456789';
             $validatedData['role'] = bcrypt($validatedData['role']);
                      // Enregistrement des données
                   break;
                   case 'Atlantik Bank':
                    $validatedData['role'] = 'atlantik125012';
                    $validatedData['codesecret1'] = '123456789';
                    $validatedData['role'] = bcrypt($validatedData['role']);
                   break;

      default:
          return redirect()->back()->withErrors(['banques' => 'Banque non reconnue'])->withInput();
  }
  if ($validatedData['codesecret'] !== $validatedData['codesecret1']) {
    return redirect()->back()->withErrors(['error' => 'Code secret non reconnu'])->withInput();
    
}
      // Log des données pour debug
      Log::info('Données validées: ', $validatedData);
try{
  $ok= Banque::create([
    'nom' => $validatedData['nom'],
    'prenom' => $validatedData['prenom'],
    'email' => $validatedData['email'],
    'bank' => $validatedData['banques'],
    'telephone' => $validatedData['telephone'],
    'pwd' => $validatedData['pwd'],
    'role' => $validatedData['role'],
]);
 if($ok){

    return redirect()->back()->with(['succes' => 'compte crée avec succès']);
    Mail::to($validatedData['email'])->send((new CompteMailb($validatedData))->mailuser());
 }
 else{
    return redirect()->back()->withErrors(['error' => 'Une erreur s\'est produite , veuillez réessayer plus tard'])->withInput();
 }
} catch (\Exception $e) {
    return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
}
}
public function rechercheid(Request $request)
{
    // Validation des données
    $valide = $request->validate([
        'idbanque' => 'required|string',
        'email' => 'required|string|email',
        'pwd' => 'required|string',
    ]);

    // Recherche de l'utilisateur dans la table 'banques'
    $user = DB::table('banques')
        ->where('email', $valide['email'])
        ->first();

    // Log pour debug
    Log::info('Utilisateur trouvé: ', (array)$user);

    // Vérification de l'utilisateur et du mot de passe
    if ($user && Hash::check($valide['pwd'], $user->pwd)) {
        // Vérification de l'idbanque crypté
        if (Hash::check($valide['idbanque'], $user->role)) {
            // Authentification réussie, stockage des informations de l'utilisateur dans la session
            session(['user' => $user]);
            return redirect('/banque/paiement');
        } else {
            return redirect()->back()->withErrors([
                'error' => 'L\'ID de la banque fourni ne correspond pas.',
            ])->withInput();
        }
    }

    return redirect()->back()->withErrors([
        'error' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
    ])->withInput();
}

public function paiement(){
  return view('banque.paiement');
}
public function reset(){
    return view('banque.reset-password');
}
public function valideP(Request $request){
   
    $rules = [
        'account_number' => 'required|string|max:20',
        'account_holder' => 'required|string|max:255',
        'student_name' => 'required|string|max:255',
        'depositor_name' => 'required|string|max:255',
        'phone_number' => 'required|string|max:15',
        'cni_number' => 'required|string|max:20',
        'payment_date' => 'required|date',
        'education_level' => 'required|string|in:secondaire,universite',
        'classe' => 'required|string|max:255',
        'purpose' => 'required|string|max:255',
        'details' => 'nullable|string|max:500',
        'amount' => 'required|numeric|min:0',
        'service_fee' => 'required|numeric|min:500',
        'total' => 'required|numeric|min:500',
        'viller' => 'required|string|max:255',
        'bank_name'=>'required|string',
        'prenomg'=>'required|string',
        'nomg'=>'required|string',
    ];

   
    
    $validator = Validator::make($request->all(), $rules);
    
    if ($request->input('education_level') === 'universite') {
        $validator->after(function ($validator) use ($request) {
            $universityRules = [
                'level' => 'required|string|max:255',
                'filiere' => 'required|string|max:255',
            ];
    
            $universityValidator = Validator::make($request->all(), $universityRules);
    
            if ($universityValidator->fails()) {
                foreach ($universityValidator->errors()->all() as $message) {
                    $validator->errors()->add('university_validation', $message);
                }
            }
        });
    }
    
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    
    $validatedData = $validator->validated();
     // Log de vérification des valeurs de session
     Log::info('Session bankName: ' . session('bankName'));
     Log::info('Session userFirstName: ' . session('userFirstName'));
     Log::info('Session userName: ' . session('userName'));
    
    $paymentData = [
        'bank_name' => $validatedData['bank_name'],
         'nomg' =>$validatedData['nomg'], 
        'prenomg' =>$validatedData['prenomg'], 
        'account_number' => $validatedData['account_number'],
        'account_holder' => $validatedData['account_holder'],
        'student_name' => $validatedData['student_name'],
        'depositor_name' => $validatedData['depositor_name'],
        'phone_number' => $validatedData['phone_number'],
        'cni_number' => $validatedData['cni_number'],
        'viller' => $validatedData['viller'],
        'heure' => now()->format('H:i:s'), // Assuming you want to set the current time
        'payment_date' => $validatedData['payment_date'],
        'education_level' => $validatedData['education_level'],
        'classe' => $validatedData['classe'],
        'purpose' => $validatedData['purpose'],
        'details' => $validatedData['details'] ?? null,
        'level' => $validatedData['level'] ?? null,
        'filiere' => $validatedData['filiere'] ?? null,
        'amount' => $validatedData['amount'],
        'service_fee' => $validatedData['service_fee'],
        'total' => $validatedData['total'],
        'created_at' => now(),
        'updated_at' => now(),
    ];
    
    $ok = DB::table('payement2024s')->insert($paymentData);
    
    if ($ok) {
        return redirect()->back()->with('success', 'Paiement effectué avec succès');
    } else {
        return redirect()->back()->withErrors('error', 'Échec du paiement, veuillez réessayer');
    }
}
public function searchSchool(Request $request)
{
    $query = $request->get('query');

        // Rechercher les titulaires de compte en fonction de la lettre saisie
        $schools = Ecole::where('name', 'LIKE', "%{$query}%")->get();

        $output = '<ul class="list-group">';
        foreach ($schools as $school) {
            $output .= '<li class="list-group-item school-item">' . $school->name . '</li>';
        }
        $output .= '</ul>';

        return response()->json(['html' => $output]);
    
}
public function resetPassword(Request $request)
{
    // Validation des entrées
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'pwd1' => 'required|min:8',
        'pwd2' => 'required|same:pwd1',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Vérification si l'email existe
    $user = Banque::where('email', $request->email)->first();
    if (!$user) {
        return redirect()->back()->with('error', 'Email non trouvé.');
    }

    // Mise à jour du mot de passe
    $user->pwd = Hash::make($request->pwd1);
    $user->save();
    if($user){
        Mail::to($user->email)->send((new CompteResetB($user))->mailuser());
        Mail::to('ajeangael@gmail.com')->send(new AdminBanqueMailReset($user));
        return redirect()->back()->with('success', 'Mot de passe mis à jour avec succès.');
    }
    
}
public function email_reset(){
    return view('banque.emailresetp');
}
public function email_create_compte(){
    return view('banque.gest-compte');
}
}

