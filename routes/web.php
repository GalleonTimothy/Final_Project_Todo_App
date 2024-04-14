<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'App\Http\Middleware\PreventBackHistory'], function () {

    Route::get('/', function () {
        return redirect()->route('login');
    });

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('todo', 'App\Http\Controllers\TodosController');

});
