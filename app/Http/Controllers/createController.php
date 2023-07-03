<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;

class createController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'email'=> 'email|required|unique:eleves',
            'numero'=> 'required|min:8',
        ]);
        $eleves = new Eleve;
        $eleves->nom = $request->input('nom');
        $eleves->prenom = $request->input('prenom');
        $eleves->email = $request->input('email');
        $eleves->numero = $request->input('numero');
        $eleves->save();


    }
}

