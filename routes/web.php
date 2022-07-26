<?php

use App\Http\Controllers\RstController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return('This is the default route');
});

Route::get('/rst', [RstController::class, 'showData']);