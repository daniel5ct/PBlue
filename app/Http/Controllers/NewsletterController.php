<?php

namespace App\Http\Controllers;

use App\Newsletter;
use App\EmailNewsletter;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsletterController extends Controller
{

    public function getAll()
    {
        $newsletters = Newsletter::all();

        return $newsletters;
    }

    public function getById($id)
    {
        //phpinfo();
        $newsletters = Newsletter::find($id);

        return $newsletters;
    }

    public function createNewsletter(Request $request){
        //dd($request['title']);
        Newsletter::create(['title'=>$request['title'],'introduction'=>$request['introduction'],'body'=>$request['body'],'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
    }

    public function deleteNewsletter($id){
        EmailNewsletter::where('id_newsletter','=',$id)->delete();
        Newsletter::where('id','=',$id)->delete();
    }

    public function editNewsletter($id, Request $request){

        Newsletter::where('id','=',$id)->update([
        'title'=>$request['title'],
        'introduction'=>$request['introduction'],
        'body'=>$request['body'],
        'updated_at'=>Carbon::now()
        ]);
    }
}
