<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Named routes for Animal Shelter topic
Route::get('/shelter', function () {
    return view('shelter');
})->name('shelter');

Route::get('/adopt', function () {
    return view('adopt');
})->name('adopt');

Route::get('/confirmation', function () {
    return view('confirmation');
})->name('confirmation');

Route::get('/adoption/{dogs}/{cats}', function ($dogs, $cats) {
    return "Adoption: $dogs and $cats";})->name('adoption.details');