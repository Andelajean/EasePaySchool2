<?php

namespace App\Http\Controllers;


use App\Models\Banque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

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
  // Utiliser bcrypt pour hacher le mot de passe
  $validatedData['pwd'] = bcrypt($validatedData['pwd']);
  // Ajouter un champ supplémentaire
  $validatedData['role'] = 'user';
switch ($validatedData['banques']) {
      case 'Afriland First Bank':
          // Ajouter un champ supplémentaire
  $validatedData['role'] = 'afriland33458';
  $validatedData['role'] = bcrypt($validatedData['role']);
          break;
      case 'Commercial Bank':
        $validatedData['role'] = 'commercial2004';
        $validatedData['role'] = bcrypt($validatedData['role']);
          break;
          case 'UBA':
     $validatedData['role'] = 'ubabank3306';
     $validatedData['role'] = bcrypt($validatedData['role']);
              // Enregistrement des données
           break;
           case 'SCB':
            // Ajouter un champ supplémentaire
    $validatedData['role'] = 'scbbank44015';
    $validatedData['role'] = bcrypt($validatedData['role']);
            break;
        case 'SGBC':
          $validatedData['role'] = 'sgbcafrik2004';
          $validatedData['role'] = bcrypt($validatedData['role']);
            break;
            case 'EcoBank':
       $validatedData['role'] = '';
       $validatedData['role'] = bcrypt($validatedData['role']);
                // Enregistrement des données
             break;

             case 'BANGE BANK':
                // Ajouter un champ supplémentaire
        $validatedData['role'] = 'bange2000';
        $validatedData['role'] = bcrypt($validatedData['role']);
                break;
            case 'BGFI Bank':
              $validatedData['role'] = 'bgfi02004';
              $validatedData['role'] = bcrypt($validatedData['role']);
                break;
                case 'CCA Bank':
           $validatedData['role'] = 'cca03306';
           $validatedData['role'] = bcrypt($validatedData['role']);
                    // Enregistrement des données
                 break;
                 case 'Express Union':
                  // Ajouter un champ supplémentaire
          $validatedData['role'] = 'union1044015';
          $validatedData['role'] = bcrypt($validatedData['role']);
                  break;
              case 'BICEC':
                $validatedData['role'] = 'bicec1022004';
                $validatedData['role'] = bcrypt($validatedData['role']);
                  break;
                  case 'Vision Finance':
             $validatedData['role'] = 'finance025012';
             $validatedData['role'] = bcrypt($validatedData['role']);
                      // Enregistrement des données
                   break;
                   case 'Atlantik Bank':
                    $validatedData['role'] = 'atlantik125012';
                    $validatedData['role'] = bcrypt($validatedData['role']);
                   break;

      default:
          return redirect()->back()->withErrors(['banques' => 'Banque non reconnue'])->withInput();
  }
      // Log des données pour debug
      Log::info('Données validées: ', $validatedData);

  $ok= Banque::create([
    'nom' => $validatedData['nom'],
    'prenom' => $validatedData['prenom'],
    'email' => $validatedData['email'],
    'banques' => $validatedData['banques'],
    'telephone' => $validatedData['telephone'],
    'pwd' => $validatedData['pwd'],
    'role' => $validatedData['role'],
]);
 if($ok){
    return redirect()->back()->withErrors(['succes' => 'compte crée avec succès'])->withInput();

 }
 else{
    return redirect()->back()->withErrors(['error' => 'Une erreur s\'est produite , veuillez réessayer plus tard'])->withInput();
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
            Session::put('user', $user);
            Session::put('bank', $user->banques);

            return redirect('/banque/paiement')->with('success', 'Bienvenue')
                                           ->with('bankName', $user->banques)
                                           ->with('userName', $user->nom)
                                           ->with('userFirstName', $user->prenom);
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
 
}