<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;
use Illuminate\Support\Facades\View;


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
    return View::make('eleves.liste', compact('eleves'));
}


}
