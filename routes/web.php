<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Example Route
// Route::get();
// Route::post();
// Route::put();
// Route::patch();
// Route::delete();
// Route::options();

// Route::match(['get', 'post'], '/', function (){
//     return 'POST and GET is allowed';
// });


// Route::any('/', function(){
//     return view ('welcome');
// });

// Route::view('/welcome', 'welcome');


// Route::get('/', function(){
//     return 'redirected';
// });

// Route::permanentRedirect('/welcome', '/');

// Route::get('/', function(){
//     return 'Welcome';
// });

// // Route::get('/users', function(Request $request) {
// //     dd($request);
// //     return null;
// // });

// // Sample Getting the DATA
// Route::get('/user/{id}/{group}', function($id, $group){
//     return response($id.'-'.$group, 200);
// });

// // Sample getting data using json
// Route::get('/request-json', function(){
//     return response()->json(['name' => 'Russel Vincent Cuevas', 'age' => '22']);
// });

// // Sample downloading file path
// Route::get('/request-download', function(){

//     $path = public_path().'/sample.txt';
//     $name = 'sample.txt';
//     $headers = array(
//         'Content-type : application/text-plain',
//     );
//     return response()->download($path, $name, $headers);
// });

// Route::get('/users', [UserController::class, 'index'])->name('login');
// Route::get('/user/{id}', [UserController::class, 'show']);


// Route::get('/admin', [AdminController::class, 'index']);
// Route::get('/admin/{id}', [AdminController::class, 'show']);



Route::get('/', [StudentController::class, 'index']);
Route::get('/student/{id}', [StudentController::class, 'show']);
