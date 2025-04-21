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

Route::view('/', 'dose.index')->name('home');
Route::view('/about', 'dose.about')->name('about');
Route::view('/services', 'dose.services')->name('services');
Route::view('/serviceDetails', 'dose.serviceDetails')->name('serviceDetails');
Route::view('/project', 'dose.project')->name('project');
Route::view('/projectDetails', 'dose.projectDetails')->name('projectDetails');
Route::view('/gallery', 'dose.gallary')->name('gallery');
 
