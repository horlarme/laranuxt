<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'routes'])
    ->name('route information')
    ->withoutMiddleware('api');
Route::get('/example', [Controller::class, 'example'])->name('example route');
Route::get('/error', [Controller::class, 'error'])->name('error route');

Route::get('/profile', \App\Http\Controllers\Profile\GetController::class)
    ->name('profile');
Route::patch('/profile', \App\Http\Controllers\Profile\UpdateController::class)
    ->name('profile.update');

Route::post('experiences', \App\Http\Controllers\Experience\CreateController::class)
    ->name('experiences.create');
Route::get('experiences', \App\Http\Controllers\Experience\ListController::class)
    ->name('experiences');
Route::get('experiences/{experience}', \App\Http\Controllers\Experience\GetController::class)
    ->name('experiences.get');
Route::delete('experiences/{experience}', \App\Http\Controllers\Experience\DeleteController::class)
    ->name('experiences.delete');
Route::patch('experiences/{experience}', \App\Http\Controllers\Experience\UpdateController::class)
    ->name('experiences.update');
