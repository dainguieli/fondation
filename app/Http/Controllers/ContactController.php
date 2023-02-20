<?php

namespace App\Http\Controllers;

use App\Mail\SendMessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;



class ContactController extends Controller
{
    //
    public function send(Request $request)
    {
        $destinataire = env('MAIL_TO_NAME');
        $service_requested = $request->services;

        switch ($service_requested) {
            case (1):
                $request->services = "Vente de Terrain";
                break;

            case (2):
                $request->services = "Architecture";
                break;

            case (3):
                $request->services = "House Planning";
                break;

            case (4):
                $request->services = "Construction";
                break;
            case (5):
                $request->services = "Architecture d'Interieur";
                break;
            case (6):
                $request->services = "Renovation";
                break;

            default:
                $request->services = "Demande d'information";
        }

        try {

            //return Response()->json($destinataire);
            Mail::to($destinataire)
                ->send(new SendMessageMail($request));
                Alert::success('Email envoyé', 'Nous accusons reception de votre mail. Nous vous contacterons très bientôt. Merci');
            return view('/habitat', ['mail' => $request->email], ['PageName' => 'habitat']);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
