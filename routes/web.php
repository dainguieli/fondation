<?php

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
Route::post('/habitat', [ContactController::class, 'send']);

Route::post('send-email',[ContactController::class, 'composeEmail'])->name('send-email');

Route::get('/event', function () {
    return view('event',['PageName' => 'event']);
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

Route::get('/actualite', function () {
    return view('actualite',['PageName' => 'actualite']);
});

//actualite
Route::get('/actualite', function () {
    return view('actualite',['PageName' => 'actualite']);
});
Route::get('/coachs_Jos', function () {
    return view('actualite.coachs_Jos',['PageName' => 'coachs_Jos']);
});
Route::get('/VisiteGroupe', function () {
    return view('actualite.VisiteGroupe',['PageName' => 'VisiteGroupe']);
});

Route::get('/jeunegroulleur', function () {
    return view('actualite.jeunegroulleur',['PageName' => 'jeunegroulleur']);
});
//benevole
Route::get('/benevole', function () {
    return view('benevole',['PageName' => 'benevole']);
});
//action
Route::get('/action', function () {
    return view('action',['PageName' => 'action']);
});//action
Route::get('/action', function () {
    return view('action',['PageName' => 'action']);
});
Route::get('/team', function () {
    return view('team',['PageName' => 'team']);
});

Route::get('/appointment', function () {
    return view('appointment',['PageName' => 'appointment']);
});
Route::post('/appointment', [ContactController::class, 'send']);

Route::get('/testimonial', function () {
    return view('testimonial',['PageName' => 'testimonial']);
});

Route::get('/contact', function () {
    return view('contact',['PageName' => 'contact']);
});
Route::post('/contact', [ContactController::class, 'send']);


Route::get('/service', function () {
    return view('service',['PageName' => 'service']);
});

Route::get('/house_planning', function () {
    return view('house_planning',['PageName' => 'house_planning']);
});
Route::post('/house_planning', [ContactController::class, 'send']);

Route::get('/architecture', function () {
    return view('architecture',['PageName' => 'architecture']);
});
Route::post('/architecture', [ContactController::class, 'send']);

Route::get('/construction', function () {
    return view('construction',['PageName' => 'construction']);
});
Route::post('/construction', [ContactController::class, 'send']);

Route::get('/architecture_interieur', function () {
    return view('architecture_interieur',['PageName' => 'architecture_interieur']);
});
Route::post('/architecture_interieur', [ContactController::class, 'send']);

Route::get('/renovation', function () {
    return view('renovation',['PageName' => 'renovation']);
});
Route::post('/renovation', [ContactController::class, 'send']);

Route::get('/shooting', function () {
    return view('shooting',['PageName' => 'shooting']);
});
Route::post('/shooting', [ContactController::class, 'send']);

Route::get('/production_mediatique', function () {
    return view('production_mediatique',['PageName' => 'production_mediatique']);
});
Route::post('/production_mediatique', [ContactController::class, 'send']);

Route::get('/evenementiel', function () {
    return view('evenementiel',['PageName' => 'evenementiel']);
});
Route::post('/evenementiel', [ContactController::class, 'send']);

Route::get('/publicite', function () {
    return view('publicite',['PageName' => 'publicite']);
});
Route::post('/publicite', [ContactController::class, 'send']);

Route::get('/conception_numerique', function () {
    return view('conception_numerique',['PageName' => 'conception_numerique']);
});
Route::post('/conception_numérique', [ContactController::class, 'send']);

Route::get('/imprimerie', function () {
    return view('imprimerie',['PageName' => 'imprimerie']);
});
Route::post('/imprimerie', [ContactController::class, 'send']);


// ------- ERLION ROUTES -----------
Route::get('/erlion1', function () {
    return view('erlion1',['PageName' => 'erlion1']);
});
Route::post('/erlion1', [ContactController::class, 'send']);

Route::get('/erlion2', function () {
    return view('erlion2',['PageName' => 'erlion2']);
});
Route::post('/erlion2', [ContactController::class, 'send']);

Route::get('/erlion3', function () {
    return view('erlion3',['PageName' => 'erlion3']);
});
Route::post('/erlion3', [ContactController::class, 'send']);

Route::get('/erlion4', function () {
    return view('erlion4',['PageName' => 'erlion3']);
});
Route::post('/erlion4', [ContactController::class, 'send']);

Route::get('/erlion5', function () {
    return view('erlion5',['PageName' => 'erlion5']);
});
Route::post('/erlion5', [ContactController::class, 'send']);

Route::get('/erlion6', function () {
    return view('erlion6',['PageName' => 'erlion6']);
});
Route::post('/erlion6', [ContactController::class, 'send']);

// ------- FIN ERLION ROUTES -----------


// ------- LESDONS ROUTES -----------
Route::get('/lesdons1', function () {
    return view('lesdons1',['PageName' => 'lesdons1']);
});
Route::post('/lesdons1', [ContactController::class, 'send']);

Route::get('/lesdons2', function () {
    return view('lesdons2',['PageName' => 'lesdons2']);
});
Route::post('/lesdons2', [ContactController::class, 'send']);

Route::get('/lesdons3', function () {
    return view('lesdons3',['PageName' => 'lesdons3']);
});
Route::post('/lesdons3', [ContactController::class, 'send']);

Route::get('/lesdons4', function () {
    return view('lesdons4',['PageName' => 'lesdons3']);
});
Route::post('/lesdons4', [ContactController::class, 'send']);

Route::get('/lesdons5', function () {
    return view('lesdons5',['PageName' => 'lesdons5']);
});
Route::post('/lesdons5', [ContactController::class, 'send']);

Route::get('/lesdons6', function () {
    return view('lesdons6',['PageName' => 'lesdons6']);
});
Route::post('/lesdons6', [ContactController::class, 'send']);

// ------- FIN LESDONS ROUTES -----------


//Envoie de Mail avec PHPMailer
Route::post('send',[ContactController::class, 'send'])->name('email.send');
