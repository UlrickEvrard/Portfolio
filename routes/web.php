<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::get('/projects/PersonnalScraper', function () {
    return view('projects/scraper');
});

Route::get('/projects/Portfolio', function () {
    return view('projects/portfolio');
});

Route::get('/projects/Yummans', function () {
    return view('projects/yummans');
});

Route::get('/projects/Sarbacane', function () {
    return view('projects/sarbacane');
});

Route::get('/projects/Saintdujour', function () {
    return view('projects/sdj');
});