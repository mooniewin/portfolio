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

// ========= proyectos ======

Route::get('/proyectos', function () {
    return view('pages.projects.index');
})->name('projects.index');

Route::get('/proyectos/ecoscan', function () {
    return view('pages.projects.ecoscan');
})->name('projects.ecoscan');

Route::get('/proyectos/mcchicken', function () {
    return view('pages.projects.mcchicken');
})->name('projects.mcchicken');

Route::get('/proyectos/recetitas-moon', function () {
    return view('pages.projects.recetitas-moon');
})->name('projects.recetitas-moon');

Route::get('/proyectos/bank-simulator', function () {
    return view('pages.projects.bank-simulator');
})->name('projects.bank-simulator');