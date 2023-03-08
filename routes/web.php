<?php

use App\Http\Controllers\benevoleControlleur;
use App\Http\Controllers\donControlleur;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',['PageName' => 'home']);
});

Route::get('/habitat', function () {
    return view('habitat',['PageName' => 'habitat']);
});
Route::get('/galerie', function () {
    return view('galerie',['PageName' => 'galerie']);
});

Route::get('/about', function () {
    return view('about',['PageName' => 'about']);
});

Route::get('/feature', function () {
    return view('feature',['PageName' => 'feature']);
});

Route::get('/project', function () {
    return view('project',['PageName' => 'project']);
});
Route::get('/don', function () {
    return view('don',['PageName' => 'don']);
});
Route::Post('/faitDon',[donControlleur::class,'faitDon'])->name('faitDon');

Route::get('/contact', function () {
    return view('contact',['PageName' => 'contact']);
});
//actualite
Route::get('/actualite', function () {
    return view('actualite',['PageName' => 'actualite']);
});
Route::get('/coachs_Jos', function () {
    return view('actualite.coachs_Jos',['PageName' => 'coachs_Jos']);
});
Route::get('/rencontre_comor', function () {
    return view('actualite.rencontre_comor',['PageName' => 'rencontre_comor']);
});
Route::get('/associationsfemmes', function () {
    return view('actualite.associationsfemmes',['PageName' => 'associationsfemmes']);
});
Route::get('/entrepreneurMs', function () {
    return view('actualite.entrepreneurM',['PageName' => 'entrepreneurM']);
});
Route::get('/Chronos', function () {
    return view('actualite.Chronos',['PageName' => 'Chronos']);
});
Route::get('/cadeauxpourlaNoelauxenfants', function () {
    return view('actualite.cadeauxpourlaNoelauxenfants',['PageName' => 'cadeauxpourlaNoelauxenfants']);
});
Route::get('/VisiteGroupe', function () {
    return view('actualite.VisiteGroupe',['PageName' => 'VisiteGroupe']);
});
Route::get('/fondationFrancisCJ', function () {
    return view('actualite.fondationFrancisCJ',['PageName' => 'fondationFrancisCJ']);
});

Route::get('/jeunegroulleur', function () {
    return view('actualite.jeunegroulleur',['PageName' => 'jeunegroulleur']);
});
//benevole
Route::get('/benevole', function () {
    return view('benevole',['PageName' => 'benevole']);
});
//ambassadeur
Route::get('/ambassadeur', function () {
    return view('ambassadeur',['PageName' => 'ambassadeur']);
});

Route::Post('/creerbenevole',[benevoleControlleur::class,'register'])->name('creerbenevole');
//action
Route::get('/action', function () {
    return view('action',['PageName' => 'action']);
});//programme
Route::get('/programmes', function () {
    return view('programme',['PageName' => 'programme']);
});
Route::get('/team', function () {
    return view('team',['PageName' => 'team']);
});
