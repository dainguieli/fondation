<?php

namespace App\Http\Controllers;
use App\Models\don;
use Illuminate\Http\Request;

class donControlleur extends Controller
{
    public function faitDon(Request $request)
    {
        $this->validate($request,[
            'email'=>'email|required|unique:benevoles',
            'prenom'=> 'required',
            'contact'=> 'required',
            'nom'=> 'required',
            'entreprise'=> 'required',
            'reseauMoney'=> 'required',
            'numerDepot'=> 'required',
            'CategorieDeProject' => 'required'
        ]);


        $don = new don();
        $don->prenom = $request->input('prenom');
        $don->email = $request->input('email');
        $don->contact = $request->input('contact');
        $don->nom = $request->input('nom');
        $don->adresse = $request->input('adresse');
        $don->entreprise = $request->input('entreprise');
        $don->reseauMoney = $request->input('reseauMoney');
        $don->CategorieDeProject = $request->input('CategorieDeProject');
       

        $don->save();

        return back()->with('status',"Merci pour tout");
    }
}
