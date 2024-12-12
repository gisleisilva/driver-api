<?php

use App\Enums\SexDriverUser;
use Illuminate\Support\Facades\Route;

Route::get('test', function(){
    dd(array_column(SexDriverUser::cases(), 'name'));
});
