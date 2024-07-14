<?php

namespace App\Http\Controllers\Admin;
use App\Models\Banque;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class banquesController extends Controller
{
    //

     //la fonction qui permet de retourner le data du filiere u 
     public function addBank()
     {    
         $nom=Banque::select('id','nom')->get();
 
         return view('admin.banque.addBank',compact('nom'));
       
     }
    // la fonction qui permet d'afficher les information  des Banques 
     public function showAllBank()
     {
         $banks=Banque::with('nom')->get();
          //return $matieres;
         return view('admin.banque.showAll',compact('banks'));
     }
     //la fonction qui permet d'ajouter et enregistrer les Banque 
     public function saveBank(Request $request){
     
         // les données nesessaires dans l'ajoute 
         $request->validate([
             'nom' => 'required', 
             'cne'=> 'required ',
             'prenom'=>'required',
             'phone'=>'required|max:10',
             'mdp'=>'required',
             'email'=>'required'
             ]);         
         // enregistrer les données dans la base de données 
     
            
             try{
                 $user = new User;
                 $email= $request->input('email');
                 $password =  Hash::make($request->input('mdp'));
                 $name= strstr($email,'@',true);
                 $user->id_role =4 ;
                 $user->name = $name;
                 $user->email = $email;
                 $user->password =$password;
         
                 $user->save();
                 $id_user = $user->id;
             Banque::create(
                 [
                     'cne' => $request->cne,
                     'nom_etu' => $request->nom,
                     'prenom_etu' => $request->prenom,
                     'phone_etu' => $request->phone,
                     'id_filiere' => $request->filiere,
                     'id_user'=> $id_user,
                 ]
                 );
                 //afficher un message de success si  les données des Banques sont bein enregistrées 
                 return redirect()->route('show.all.Bank')->with(['success' => ' Banque est Bien ajouté ']);
                 
             } catch (\Exception $ex) {
                 //afficher un message d'erreur  si  les données des Banques ne sont pas bein enregistrées 
               return $ex;
                 return redirect()->route('add.Bank')->with(['error' => 'Erreur!!! ']);
         }
     }
    //la fonction utilises dans la modification des données des étudiants 
     public function editBank($id)
     {
         $Banque=Banque::find($id);
         if(!$Banque)
            redirect() -> route('show.all.Bank') -> with(['Erreur' => "Banque n'existe pas !!!"]);
          
            $filieres=Filiere::select('id','nom_filiere')->get();
         return view('admin.Banque.update',compact('filieres','Banque'));
     }
 
     //la fonction permet de modifier les données des étudiants
     public function updateBank(Request $request)
     {
         
         $request->validate([
             'nom' => 'required', 
             'cne'=> 'required ',
             'prenom'=>'required'
             ]);         
         try {
             Banque::where('id',$request ->id) -> update(
                 [
                     'cne' => $request->cne,
                     'nom_etu' => $request->nom,
                     'prenom_etu' => $request->prenom,
                     'phone_etu' => $request->phone,
                     'id_filiere' => $request->filiere,
                     'id_user'=> 4
                 ]);
                 // un message de success afficher si les données sont bein modifiées 
                 return redirect()->route('show.all.Bank')->with(['update' => ' Banque est Bien modifié ']);
                 
             } catch (\Exception $ex) {
                 //  // un message d'erreur  s'il y a pas de modification 
                 return redirect()->route('add.Bank')->with(['error' => 'There is somthing went wrong ']);
         }
       
     }
   // la fonction qui permet de supprimer un étudiant 
     public function deleteBank($id)
     {
         $Bank=Banque::find($id);
         if(!$Bank)
            redirect() -> route('show.all.Bank') -> with(['error' => 'Bank Does not exist']);
 
            Banque::where('id',$id) -> delete();
            return redirect()->route('show.all.Bank')->with(['delete' => 'Banque est supprime avec succes']); 
     }
 
}
