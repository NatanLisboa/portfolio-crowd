<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MediaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/newJob', function () {
    return view('newJob');
})->middleware(['auth'])->name('newJob');

Route::post('/newJob',[JobController::class,'createJob'])->middleware(['auth']);

Route::get('/editJob/{id}', [JobController::class,'getEditJob']) -> middleware(['auth']) -> name('getEditJob');
Route::post('/editJob/{id}', [JobController::class,'editJob']) -> middleware(['auth']) -> name('editJob');
Route::get('/deleteJob/{id}', [JobController::class,'deleteJob']) -> middleware(['auth']) -> name('deleteJob');

Route::get('/dashboard',[JobController::class,'listExistentJobs'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/media/job/{jobId}',[MediaController::class,'show']);

Route::get('/p/{nickname}', [JobController::class,'listExistentJobsByNickname']);

require __DIR__.'/auth.php';
