<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodeExecuteController;

Route::get('/', function () {
    return view('main');
})->name('home');

Route::post('execute', [CodeExecuteController::class, 'run'])->name('execute');

Route::get('privacy-policy',function(){
	return view('legal.privacy-policy');
})->name('privacy-policy');

Route::get('terms-of-service',function(){
    return view('legal.terms-of-service');
})->name('terms-of-service');



Route::get('/blogs', function () {
    return view('blog.index');
})->name('blog.cards');

Route::get('/blog/php-8-nullsafe-operator', fn () => view('blog.php8-nullsafe'));
Route::get('/blog/php-8-jit-performance', fn () => view('blog.php8-jit'));
Route::get('/blog/php-8-union-types', fn () => view('blog.php8-union'));


