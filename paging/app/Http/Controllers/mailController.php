<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class mailController extends Controller
{
    public function index()
    {
        // Mail::send(['text'=>'mail'],['name','sreenish'],function($message){
        //     $message->to('sreenishnair1@gmail.com','To Sreenish')->subject('Test Email');
        //     $message->from('sreenishnair9882@gmail.com','Sreenish');
        // });
         Mail::send(new SendMail());
    }
    public function email()
    {
        return view('email');
    }
}
