<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;


class EleveController extends Controller
{
    public function create(Request $request)
{
    $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'email|required|unique:eleves',
        'numero' => 'required|min:8',
    ]);

    $eleve = new Eleve;
    $eleve->nom = $request->input('nom');
    $eleve->prenom = $request->input('prenom');
    $eleve->email = $request->input('email');
    $eleve->numero = $request->input('numero');
    $eleve->save();

    return redirect()->back()->with('success', 'Élève enregistré avec succès');
}

public function formulaire()
{
    $eleves = Eleve::all();
    return view('eleves.liste', compact('eleves'));
}

public function liste()
{
    $eleves = Eleve::all();
    return View('layouts.liste', compact('eleves'));
}

public function edit($id)
{
    // Récupérer l'élève à modifier
    $eleve = Eleve::findOrFail($id);

    return view('layouts.edit', compact('eleve'));
}

// Méthode pour traiter la mise à jour de l'élève
public function update(Request $request, $id)
{
    // Validation des données du formulaire
    $validatedData = $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required|email|unique',
        'numero' => 'required',
    ]);

    // Recherche de l'élève à modifier
    $eleve = Eleve::findOrFail($id);

    // Mise à jour des attributs de l'élève avec les données du formulaire
    $eleve->nom = $validatedData['nom'];
    $eleve->prenom = $validatedData['prenom'];
    $eleve->email = $validatedData['email'];
    $eleve->numero = $validatedData['numero'];

    // Sauvegarde des modifications dans la base de données
    $eleve->save();

    // Redirection vers une page appropriée, par exemple la liste des élèves
    return redirect()->route('eleves.liste')->with('success', 'Élève modifié avec succès.');
}


public function delete($id)
{
    $eleve = Eleve::find($id);
    $eleve->delete();

    return redirect()->route('eleves.liste')->with('success', 'Élève supprimé avec succès');
}

}
