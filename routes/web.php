<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::view('/','index')->name('home');

Route::get('/category/type/{id}',function (){
    return "Article page by id " . \request('id');
});

Route::get('/nowadays/',function (){
    return 'Nowadays news';
});

Route::get('/someelse/page/{id}',function ($id){
    return "Some page " . $id;
});


Route::get('/user/{name?}', function ($name = 'John') {
    return $name;
});

Route::redirect('/firstpage','/secondpage',301);

Route::fallback(function (){
    return 'Fallback';
});
