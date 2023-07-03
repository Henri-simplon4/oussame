<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class henriController extends Controller
{
    public function method1(){
        return view('layouts/formulaire');
    }
  

}
class listeController extends Controller
{
    public function liste(){
        return view('layouts/liste');
    }
}
