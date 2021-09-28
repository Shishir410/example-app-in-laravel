<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return '<h1>Hello World</h1>';
});

Route::get('/a', function(){
    return view('about');
});

Route::get('/users/{id}/{name}', function($id , $name){
    return 'This is user ' . $name . ' laravel with an id ' .$id;
});

Route::get('/person/name', function(){
    return view('sh');
});

Route::get('/added', [App\Http\Controllers\PlaceController::class, 'users']);

Route::get('/list', [App\Http\Controllers\StudentController::class, 'students']);

Route::get('/main', [App\Http\Controllers\PostsController::class, 'posts']);

Route::get('student/delete/{id}',[App\Http\Controllers\StudentController::class, 'destroy']);

Route::get('student/insert/{id}/{name}/{email}',[App\Http\Controllers\StudentController::class, 'all']);

Route::get('student/edit/{name}',[App\Http\Controllers\StudentController::class, 'forit']);

Route::post('store', [App\Http\Controllers\StudentController::class, 'store']);

Route::get('/tull', [App\Http\Controllers\StudentController::class, 'tull']);

Route::get('/lrb', [App\Http\Controllers\CustomerController::class, 'customers']);

Route::get('customers/delete/{list}', [App\Http\Controllers\CustomerController::class, 'destory']);

Route::get('customers/update/{list}/{first_name}/{last_name}/{order_code}/{date}/{order_tk}', [App\Http\Controllers\CustomerController::class, 'input']);

Route::post('store', [App\Http\Controllers\CustomerController::class, 'store']);

Route::get('/chili', [App\Http\Controllers\CustomerController::class, 'chili']);

Route::get('/lba', [App\Http\Controllers\PlayerController::class, 'player']);

Route::get('player/delete/{id}', [App\Http\Controllers\PlayerController::class, 'destory']);

Route::get('player/edit/{id}/{name}/{jersey_number}/{team_name}/{player_description}', [App\Http\Controllers\PlayerController::class, 'input']);

Route::get('player/view/addview/{id}', [App\Http\Controllers\PlayerController::class, 'info']);

Route::post('store', [App\Http\Controllers\PlayerController::class, 'store']);

Route::get('/team', [App\Http\Controllers\PlayerController::class, 'team']);
