<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/projects', function () {
    return view('pages.projects.index');
})->name('projects.index');

Route::get('/experience/saas', function () {
    return view('pages.experience.saas');
})->name('experience.saas');