<?php

namespace documentoscontroller\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Mail;
use documentoscontroller\Mail\SendMail;

class SendEmailController extends Controller
{
    //
    function contact(){
        return view('contact');
    }
    function send(Request $request){
        $this->validate($request,[
            'visitor_name' => 'required',
            'visitor_lastname' => 'required',
            'phone_cl' => 'required',
            'visitor_email' => 'required',
            'email_title' => 'required',
            'visitor_message' => 'required',
        ]);
        $data = array(
            'visitor_name' => $request->visitor_name,
            'visitor_lastname' => $request->visitor_lastname,
            'phone_cl' => $request->phone_cl,
            'visitor_email' => $request->visitor_email,
            'email_title' => $request->email_title,
            'visitor_message' => $request->visitor_message,
        );
        Mail::to('contacto@schoolenglishonthego.com')->send(new SendMail($data));
        return redirect('contact')->with('success','Mensaje Enviado con exito!!');
    }
}