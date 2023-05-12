<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello User Controller';
    }

    public function show($id){
        return view('user')
                ->with('id' , $id)
                ->with('name' , 'Russel Vincent Cuevas')
                ->with('role', "Student");
    }
}
