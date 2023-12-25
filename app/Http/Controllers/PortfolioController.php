<?php

namespace App\Http\Controllers;

use App\Mail\portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller
{
    public function index(){
        return view('index');
    }

    public function create(Request $request){
        $details =[
            'nama'=> $request->nama,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'msg'=> $request->msg,
        ];

        Mail::to('budilahagu9@gmail.com')->send(new portfolio($details));
        return redirect()->back()->with(['Message','Contact Form Submit Successfully']);
    }
}