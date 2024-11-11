<?php

use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\LabController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\backend\HappeningController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class ,'index'])->name('home');

Route::get('/contact',[HomeController::class,'contact'])->name('contact');



Route::get('/labs/create', [LabController::class,'create'])->name('labs.create');
Route::post('/labs', [LabController::class, 'store'])->name('labs.store');
Route::post('/image-upload', [ImageUploadController::class, 'upload'])->name('image.upload');

Route::get('/happenings/create', [HappeningController::class, 'create'])->name('happenings.create');

Route::post('happenings/store',[HappeningController::class,'store'])->name('happenings.store');



