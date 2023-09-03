<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\Users;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// route::get('/{name?}', function($name = null){ 
//     $data = compact('name');
//     return view('home')->with($data);
// });


// Route::get('/', function () {
//    return view ('layout');
//  });

//  Route::get('/', function () {
//     return view('layout');
//   });
//   Route::get('/login', function () {
//     return view('login');
//   });
   Route::get('/login', function () {
     return view('login');
  });
// Route::get('login',[Users::class, 'login']);

  
Route::get('userlist',[Users::class, 'userlist']);
 
Route::get('/', [Users::class, 'layout']);

Route::get('layout', [Users::class, 'layout']);
 Route::get('create', [Users::class, 'create']);
 Route::post('loginsubmit', [Users::class, 'loginsubmit']);
  
 Route::post('createsubmit', [Users::class, 'createsubmit']);
 
  
 Route:: group(['middleware'=>['logCheck']],function(){
  Route::get('userlist',[Users::class, 'userlist']);
  

 });
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 // Route::post('loginsubmit', 'Users@loginsubmit');
  
//  Route::get('/', 'App/Http/Controllers/Users.php');
 
// Route::get('/',[Users::class, 'layout']);
 
  
//  Route::get('userlist',[Users::class, 'userlist']);
 
//   Route::get('create', [Users::class, 'create']);
// Route::get('/demo/{name}/{id?}', function($name , $id = null) {
//      $data= compact('name','id');
//      return view('demo')->with($data);
//     // echo $name . "<br> ";
//     // echo $id;
// });