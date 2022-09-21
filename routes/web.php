<?php

use App\Http\Controllers\controllerpages;
use App\Http\Controllers\focalstudentscontroller;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[controllerpages::class, 'index']);
Route::get('/home',[controllerpages::class, 'homePage']);

Route::get('/focalstudents',[focalstudentscontroller::class, 'index']);

