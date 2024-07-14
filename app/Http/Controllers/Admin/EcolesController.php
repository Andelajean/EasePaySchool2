<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ecole;
use Illuminate\Http\Request;

class ecolesController extends Controller
{
    //
    public function addEcole()
    {
        return view('admin.ecole.addEcole');
    }
    public function showAllEcole()
    {
        $Ecole = Ecole::all();
        return view('admin.ecole.showAll',compact('Ecole'));
    }

    public function save(Request $request)
    {
        //return $request;
        $user = new User;
        $email= $request->input('email');
        $password =  Hash::make($request->input('password'));
        $name= strstr($email,'@',true);
        $user->id_role = 3;
        $user->name = $name;
        $user->email = $email;
        $user->password =$password;

        $user->save();
        $iduser = $user->id;

        $Ecole = new Ecole;
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $adresse = $request->input('adresse');
        $phone = $request->input('tel');

        $Ecole->nom_ens = $nom;
        $Ecole->prenom_ens = $prenom;
        $Ecole->adresse_ens = $adresse;
        $Ecole->phone_ens = $phone;
        $Ecole->id_user = $iduser;
        $Ecole->save();
       
        return redirect()->route('show.all.Ecole')->with(['ajoute' => ' Ecole est Bien Ajoute ']);

    }

    public function editEcole($id)
    {
        $Ecole =Ecole::find($id);
        if(!$Ecole)
           redirect() -> route('show.all.Ecole') -> with(['Erreur' => "Ecole n'existe pas !!!"]);
         
        return view('admin.Ecole.update',compact('Ecole'));
    }

    public function updateEcole(Request $request)
    {
    $request->validate([
        'nom' => 'required', 
        'prenom'=> 'required ',
        'adresse'=>'required',
        'tel'=>'required'

        ]);         
    try {
        Ecole::where('id',$request ->id) -> update(
            [
                'nom_ens' => $request->nom,
                'prenom_ens' => $request->prenom,
                'adresse_ens' => $request->adresse,
                'phone_ens' => $request->tel,
            ]);
            // un message de success afficher si les données sont bein modifiées 
            return redirect()->route('show.all.Ecole')->with(['success' => ' Ecole est Bein modifié ']);
            
        } catch (\Exception $ex) {
            //  // un message d'erreur  s'il y a pas de modification 
            return redirect()->route('add.Ecole')->with(['error' => 'There is somthing went wrong ']);
    }

   

  
}
public function deleteEcole($id)
{
    $Ecole = Ecole::find($id);
    if(!$Ecole)
       redirect() -> route('show.all.Ecole') -> with(['error' => 'Ecole no existe']);

       Ecole::where('id',$id) -> delete();
       return redirect()->route('show.all.Ecole')->with(['delete' => 'Ecole supprime avec succes']); 
}

}
