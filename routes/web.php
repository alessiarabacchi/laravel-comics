<?php

use Illuminate\Support\Facades\Route;

Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics.php', ['comics' => $comics]);
});

Route::get('/comics', function () {
    return view('comics.php');
});

Route::get('/comics', function () {
    return view('comics.php');
});