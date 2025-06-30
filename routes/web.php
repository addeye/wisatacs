<?php

use App\Http\Controllers\TestingController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\Code\Test;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',[TestingController::class, 'test']);
Route::get('/test/{id}',[TestingController::class, 'testById']);
Route::get('/test/{id}/edit',[TestingController::class, 'testByIdEdit']);
