<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('project.index');
Route::get('/projects/{id}', [App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/service', [App\Http\Controllers\ServiceController::class, 'index'])->name('service');
//make route for project controller custom name per resource
/*Route::resource('projects', App\Http\Controllers\ProjectController::class)->names([
    'index' => 'projects.index',
    'show' => 'projects.show',
    'create' => 'projects.create',
    'store' => 'projects.store',
    'edit' => 'projects.edit',
    'update' => 'projects.update',
    'destroy' => 'projects.destroy',
]);

/*Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');*/
