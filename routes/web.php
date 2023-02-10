<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::view('/','index')->name('home');

Route::get('posts/category/type/{id}',function () {
    return "Article page";
});

Route::fallback(function (){
    return 'Fallback';
});
