<?php

use App\Http\Controllers\DriverUserController;
use Illuminate\Support\Facades\Route;

Route::apiResource('users', DriverUserController::class);
