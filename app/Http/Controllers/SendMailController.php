<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class SendMailController extends Controller
{
    public function send(Request $request)
    {
    	//dd($request->all());
        //multazimhajcorp@yahoo.co.in
    	Mail::to("tabish13khan@gmail.com")->send(new ContactMail($request));
    	/*Mail::to($request->user())
    ->cc($moreUsers)
    ->bcc($evenMoreUsers)
    ->send(new OrderShipped($order));*/
        return view('mailthanks');
    }
}
