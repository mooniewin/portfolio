<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/projects', function () {
    return view('pages.projects.index');
});

Route::get('/experiencia/saas', function () {
    return view('pages.experiencia.saas');
});