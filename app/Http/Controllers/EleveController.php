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
    $eleve = Eleve::find($id);
    return view('layouts.edit', compact('eleve'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'email|required',
        'numero' => 'required|min:8',
    ]);

    $eleve = Eleve::find($id);
    $eleve->nom = $request->input('nom');
    $eleve->prenom = $request->input('prenom');
    $eleve->email = $request->input('email');
    $eleve->numero = $request->input('numero');
    $eleve->save();

    return redirect()->route('eleve.liste')->with('success', 'Élève mis à jour avec succès');
}

public function destroy($id)
{
    $eleve = Eleve::findOrFail($id);
    $eleve->delete();

    return redirect()->back()->with('success', 'Élève supprimé avec succès');
}


// public function show($id)
// {
//     $eleve = Eleve::find($id);
//     return view('layouts.show', compact('eleve'));
// }


}
