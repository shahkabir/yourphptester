<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodeExecuteController;

Route::get('/', function () {
    return view('main');
})->name('home');

Route::post('execute', [CodeExecuteController::class, 'run'])->name('execute');


/*Route::get('info',function(){
	phpinfo();
});*/



Route::get('privacy-policy',function(){
	return view('legal.privacy-policy');
})->name('privacy-policy');

Route::get('terms-of-service',function(){
    return view('legal.terms-of-service');
})->name('terms-of-service');
Route::get('about-us',function(){
    
});
Route::get('contact-us',function(){
    
});
