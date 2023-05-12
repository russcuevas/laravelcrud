<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return "Hello Admin";
    }
    
    public function show($id){
        return view('admin')
                ->with('id', $id)
                ->with('name', 'Russel Vincent Cuevas')
                ->with('role', 'Student');
    }
}
