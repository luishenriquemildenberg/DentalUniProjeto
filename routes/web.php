<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::prefix('dentista')->group(function(){
    route::post('/insert','App\Http\Controllers\DentistaController@insert')->name('dentista.insert');
    route::put('/update','App\Http\Controllers\DentistaController@update')->name('dentista.update'); // atualizar usa put
    route::get('/selectList','App\Http\Controllers\DentistaController@selectList')->name('dentista.selectList'); // atualizar usa put
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');