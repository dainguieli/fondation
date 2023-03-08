<?php

namespace App\Http\Controllers;

use App\Models\benevole;
use Illuminate\Http\Request;

class benevoleControlleur extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request,[
            'email'=>'email|required|unique:benevoles',
            
        ]);


        $benevole = new benevole();
        $benevole->prenom = $request->input('prenom');
        $benevole->email = $request->input('email');
        $benevole->contact = $request->input('contact');
        $benevole->nom = $request->input('nom');
        $benevole->adresse = $request->input('adresse');
        $benevole->metier = $request->input('metier');
        $benevole->message = $request->input('message');
       

        $benevole->save();

        return back()->with('status',"Bienvenue dans la team's");
    }
}
