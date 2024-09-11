<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/item', function () {
    return view('pages.item');
});

Route::get('/picture', function () {
    return view('pages.picture');
});
