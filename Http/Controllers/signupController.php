<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use file;
use App\Http\Requests\signupRequest;

class signupController extends Controller
{
    public function index(){
        return view('signup');
    }
    public function displayInfor(signupRequest $Request){
        $user=[
            'name'=>$name =$Request->input("name"),
            'age'=>$age =$Request->input("age"),
            'date'=>$date =$Request->input("date"),
            'phone'=>$phone =$Request->input("phone"),
            'web'=>$web =$Request->input("web"),
            'address'=>$address =$Request->input("adress"),


        ];
        return view('signup')->with('user',$user);
    }
}
