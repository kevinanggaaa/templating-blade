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

Route::get('/', function() {
    return view("items.table");
});

Route::get('/master', function(){
    return view("adminlte.master");
});

Route::get('/items',function() {
    return view('items.index');
});

Route::get('/items/create', function() {
    return view('items.create');
});

Route::get('/data-tables', function() {
    return view("items.data-tables");
});

Route::get('/pertanyaan', 'pertanyaanController@index');

Route::get('/pertanyaan/create', 'PertanyaanController@create');

Route::post('/pertanyaan', 'PertanyaanController@store');

Route::get('/jawaban/create', 'JawabanController@create');

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');

Route::post('/jawaban', 'JawabanController@store');

