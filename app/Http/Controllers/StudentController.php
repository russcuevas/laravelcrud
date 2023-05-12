<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){

        // Getting Data that is greater than or equal 10
        // $data = Students::where('age', '>=', 19)->orderBy('first_name', 'asc')->limit(5)->get();

        // Getting total of each gender Male and Female
        // $data = DB::table('students')
        //         ->select(DB::raw('count(*) as gender_count, gender'))->groupBy('gender')->get();
        $data = Students::where('id', 101)->firstOrFail()->get();
        return view('students.index', ['students' => $data]);
    }

    public function show($id){
        $data = Students::findOrFail($id);
        dd($data);
        return view('students.index', ['students' => $data]);
    }
}
