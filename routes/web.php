<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MyanmarController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RecruitmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitieController::class);
Route::resource('recruitment_flow', RecruitmentController::class);
Route::resource('myanmar', MyanmarController::class);
Route::resource('about', AboutController::class);
Route::resource('news', NewsController::class);


Route::get('/en', [LanguageController::class, 'en'])->name('en');
Route::get('/jp', [LanguageController::class, 'jp'])->name('jp');
Route::get('/mm', [LanguageController::class, 'mm'])->name('mm');

