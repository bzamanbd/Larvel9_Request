<?php

use App\Http\Controllers\RstController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/rst', [RstController::class, 'showData']);