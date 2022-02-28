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

Route::post('services', \App\Http\Controllers\Services\CreateController::class)
    ->name('services.create');
Route::get('services', \App\Http\Controllers\Services\ListController::class)
    ->name('services');
Route::get('services/{service}', \App\Http\Controllers\Services\GetController::class)
    ->name('services.get');
Route::delete('services/{service}', \App\Http\Controllers\Services\DeleteController::class)
    ->name('services.delete');
Route::patch('services/{service}', \App\Http\Controllers\Services\UpdateController::class)
    ->name('services.update');

Route::post('skills', \App\Http\Controllers\Skills\CreateController::class)
    ->name('skills.create');
Route::get('skills', \App\Http\Controllers\Skills\ListController::class)
    ->name('skills');
Route::get('skills/{skill}', \App\Http\Controllers\Skills\GetController::class)
    ->name('skills.get');
Route::delete('skills/{skill}', \App\Http\Controllers\Skills\DeleteController::class)
    ->name('skills.delete');
Route::patch('skills/{skill}', \App\Http\Controllers\Skills\UpdateController::class)
    ->name('skills.update');

