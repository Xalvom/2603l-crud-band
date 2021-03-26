<?php

use Illuminate\Support\Facades\{Route, Auth};
use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/', HomeController::class)->name('home');
