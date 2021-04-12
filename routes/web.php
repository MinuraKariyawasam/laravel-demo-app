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


Route::get('/app', function () {
    $pizza_list = [
        'id' => 1,
        'name' => 'pizza'
    
    ];
    return view('layout.layout', $pizza_list);
});
