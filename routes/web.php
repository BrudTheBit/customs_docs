<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', [\App\Http\Controllers\HelloPageController::class, 'index']);
