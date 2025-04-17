<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::resource('/', FrontendController::class);