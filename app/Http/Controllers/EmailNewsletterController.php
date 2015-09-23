<?php

namespace App\Http\Controllers;

use App\EmailNewsletter;
use App\Email;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmailNewsletterController extends Controller
{

    public function addEmailToNewsletter(Request $request){

        $new_email = $request['email'];
        $emails = Email::all();
        $found_email = "";

        foreach($emails as $email){
            if($new_email == $email->email) {
                $found_email = $email;
            }
        }

        if($found_email != ""){
            return false;
        }
        else{
            EmailNewsletter::create(['id_newsletter'=>$request['id_newsletter'], 'email'=>$request['email'],'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        }

    }

    public function deleteEmailFromNewsletter($id_newsletter,$email){
        EmailNewsletter::where('id_newsletter','=',$id_newsletter)->where('email','=',$email)->delete();
    }

    public function getEmailsNewsletter($id_newsletter)
    {
        $emails = EmailNewsletter::where('id_newsletter','=',$id_newsletter)->lists('email');

        return $emails;
    }
}
