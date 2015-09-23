<?php

namespace App\Http\Controllers;

use App\Email;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Newsletter;

class EmailController extends Controller
{

    public function sendEmail($id, Request $request){

        $newsletter = Newsletter::find($id);

        $title = $newsletter->title;
        $intro = $newsletter->introduction;
        $body = $newsletter->body;

        $email = $request['email'];
        $email = trim($email,'"');

        $data = [
            'title'=>$title,
            'content'=>$body,
            'introduction'=>$intro
        ];
        Mail::send('welcome', $data, function($message) use ($email)
        {
            $message->to($email, 'DANIEL Gmail')->subject('Newsletter with Mailgun');
        });

        return $email;
    }
}
