<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class usercontrol extends Controller
{
    

    public function register(){
     
      
        return view('register');

    }

    public function login(Request $request){
        $email = $request->input('email');
        $pass = $request->input('pass');
        $row = DB::tabel("user")->where('email',$email)->where('pass',$pass)->first();
       if($row){
        return view('welcome',['name',$row->name]);
       }
       else {
           echo "wrong email or password";
       }
    }
    
    public function welcome(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $pass = $request->input('pass');
        $store = DB::insert("insert into user (name,email,pass) values(?,?,?)", [$name,$email,$pass]);
        $arr = Array( 'name' =>$name);
        return view('welcome',$arr);
    }
}
