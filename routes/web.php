<?php

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


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/hello/{year}/{yourname?}', function($year, $yourname = null){
        $hello_string = '';
        if($yourname == null){
            $hello_string = 'Hello world, ' . $year;
        }else{
            $hello_string = 'Hello world, ' . $year . '. My name is ' . $yourname;
        }
        return view('index')->with('hello_str', $hello_string);
    }); 
});
