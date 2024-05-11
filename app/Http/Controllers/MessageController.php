<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    
    public function sendmessage(Request $request){

        $id_user=$request->id_user;
        $nom=$request->nom;
        $prenom=$request->prenom;
        $email=$request->email;
        $sujet=$request->sujet;
        $message=$request->message;

        $message=Message::create([
            'nom'=>$nom,
            'prenom'=>$prenom,
            'email'=>$email,
            'sujet'=>$sujet,
            'message'=>$message,
            'id_user'=>$id_user
        ]);

        return view('success',['success'=>'le message a été envoyé à l\'annonceur']);
    }
}
