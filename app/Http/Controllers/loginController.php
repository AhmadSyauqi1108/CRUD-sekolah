<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function cekLogin(Request $request){
        $user_name = $request->username;
        $password = $request->password;
        $cekLogin = users::where([['username', $user_name],['password', $password]])->first();
        if(!$cekLogin){

        } else {
            return redirect('/data-siswa');
        }
    }
}
