<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function create (){
    	return view('contact');
    }

    public function store(Request $request) {
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required|email',
    		'msg' => 'required'

    		]);

    	Mail::send('emails.contact-message', [

    		'msg' => $request->msg

    		], function ($mail) use($request) {
    			$mail->from($request->email, $request->name);


    			$mail->to('joseemm96@gmail.com')->subject('Mensaje de Contacto');

    		}

    		);

    	return redirect()->back()->with('flash_message', 'Gracias por tu mensaje');
    }
}
