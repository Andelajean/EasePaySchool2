<?php

namespace App\Http\Controllers;

use App\Models\Ecole;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EcoleController extends Controller
{
    public function accueil(){
        return view('ecole.accueil');
    }
    public function compte(){
        return view('ecole.Compte');
    }
    public function help(){
        return view('ecole.help');
    }
    public function traitement(Request $request){
        $identifier = Str::random(11);

    $validated = $request->validate([
        'school_name' => 'required|string|max:255|unique:ecoles,name',
        'school_email' => 'required|string|email|max:255|unique:ecoles,email',
        'bank1' => 'required|string|not_in:choisir',
        'account1' => 'required|string|max:255',
        // Ajouter les validations pour les autres champs de banque et compte ici
    ]);

    // Construire un tableau pour stocker les banques et comptes validés
    $banks = [];
    for ($i = 1; $i <= 6; $i++) {
        $bankKey = 'bank' . $i;
        $accountKey = 'account' . $i;

        // Vérifier si le champ de banque est présent et n'est pas "choisir"
        if ($request->filled($bankKey) && $request->$bankKey !== 'choisir') {
            $bankValidated = $request->validate([
                $bankKey => 'nullable|string|not_in:choisir',
                $accountKey => 'required_with:' . $bankKey . '|string|max:255',
            ]);

            // Ajouter la banque et le compte au tableau
            $banks[] = [
                'bank_name' => $request->$bankKey,
                'account_number' => $request->$accountKey
            ];
        }
    }

    // Ajouter l'identifiant unique aux données validées
    $validated['identifiant'] = $identifier;

    // Créer une nouvelle instance de l'école et assigner les valeurs validées
    $ecole = new Ecole();
    $ecole->name = $validated['school_name'];
    $ecole->email = $validated['school_email'];
    $ecole->identifiant = $validated['identifiant'];

    // Assigner les valeurs de banques et comptes au modèle Ecole
    foreach ($banks as $index => $bank) {
        $ecole->{"bank" . ($index + 1)} = $bank['bank_name'];
        $ecole->{"account" . ($index + 1)} = $bank['account_number'];
    }

    // Enregistrer les données dans la base de données
    $ecole->save();

    // Retourner une réponse de succès avec l'identifiant unique
    return redirect()->back()->with('success', 'École enregistrée avec succès! Votre Identifiant est : ' . $identifier."   Veuillez le concerver.");
    }
}