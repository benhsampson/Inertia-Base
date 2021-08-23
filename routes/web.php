<?php

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

Route::inertia('/', 'Index');
Route::inertia('/link-test-1', 'LinkTest1');
Route::inertia('/link-test-2', 'LinkTest2');

// Route::get('/', function () {
//     return view('welcome');
// });
