<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageMail;

class MailController extends Controller
{
    public function mail(Request $request){
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'message' => 'required',
        ]);
        Mail::to('karol.wisniewski2901@gmail.com')->send(new MessageMail($request));
        if ($request->lang == 'en'){
            return redirect('/#contact')->with('success', 'Email send');
        }else{
            return redirect('/ukr#contact')->with('success', 'Повідомлення відправлено');
        }
    }
}
