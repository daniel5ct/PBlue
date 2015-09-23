<?php

namespace App\Http\Controllers;

use App\EmailNewsletter;
use App\Email;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\App;

class LoginController extends Controller
{
    public function login(Request $request){

        $email = $request['email'];
        $password = $request['password'];

       $name = User::where('email','=',$email)->where('password','=', $password)->lists('name');

        if(sizeof($name) == 0){
            App::abort(404);
        }
        else{
            return $name;
        }

    }
}
