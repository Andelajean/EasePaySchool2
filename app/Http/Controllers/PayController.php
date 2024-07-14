<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\MailUser;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PayController extends Controller
{
   public function home(){
    return view('pay.index');
   }
   public function about(){
      return view('pay.about');
   }
   public function contact(){
      return view('pay.contact');
   }
   public function aide(){
      return view('pay.help');
   }
   public function save_contact(Request $request){
      try {
         // Valider les données du formulaire
         $validatedData = $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|string|email|max:255',
             'telephone' => 'required|string',
             'message' => 'required|string',
         ]);

         // Créer un nouveau contact
         $contact= Contact::create($validatedData);
         // Envoyer un email à l'utilisateur
         Mail::to($contact->email)->send((new MailUser($contact))->mailuser());
        //recevoir un mail a chaque nouvel enregistrement
         Mail::to('ajeangael@gmail.com')->send(new ContactMail($contact));
         // Préparation du message de succès
         return redirect()->back()->with('success', 'Merci de nous avoir contacter!! Votre message a été enregistré');
 } catch (\Exception $e) {
   return redirect()->back()->withErrors([
      'error' => 'Une erreure s\'est produite , veullez essayer plus tard.'.$e]);
 }
   }
   public function mail(){
      return view('pay.email');
   }
   public function usermail(){
      return view('pay.mailuser');
   }
   public function banque_reset_password(){
      return view('pay.email-banque-resetp');
   }
}
