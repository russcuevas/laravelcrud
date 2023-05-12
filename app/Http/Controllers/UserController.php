<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function index(){
        return 'Hello User Controller';
    }

    public function login(){
        if(View::exists('user.login')){
            return view('user.login');
        } else {
            return abort(404);
        }
    }

    public function register(){
        return view ('user.register');
    }

    public function show($id){
        return view('user')
                ->with('id' , $id)
                ->with('name' , 'Russel Vincent Cuevas')
                ->with('role', "Student");
    }
}
