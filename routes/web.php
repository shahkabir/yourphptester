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
	phpinfo();
});

Route::get('terms-of-service',function(){
    phpinfo();
});
Route::get('about-us',function(){
    phpinfo();
});
Route::get('contact-us',function(){
    phpinfo();
});
