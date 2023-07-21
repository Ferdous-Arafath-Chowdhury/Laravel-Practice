<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\hi;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/show', [CheckController::class, 'hello']);
Route::get('/hh', [hi::class, 'hh']);
Route::get('/user/{id}', [CheckController::class, 'user']);

// Request 
Route::get('/profile', [CheckController::class, 'profile']); 

// Post 

Route::post('/profile', [CheckController::class, 'profile_post']); 

// Creating a route that accepts only numbers 
Route::get('/Show_digit/{digit}', [CheckController::class, 'digit']) -> where (['digit' => '[0-9]+']);

//Even Odd 
Route::get('/number/{num}', [CheckController::class, 'even_odd']); 

// Check user has given email or not 

Route::post('/email', [CheckController::class, 'is_email_exist']); 

// Route::get('/demo', function ()
// {
//     return  view('demo');
// }); 


Route::get('/demo/{token}', [CheckController::class,'pass_data']);
Route::get('/f',[CheckController::class,'h']);
Route::get('/ch',[CheckController::class,'ch']);
Route::get('/idd/{id}',[CheckController::class , 'd']);

Route::get('/users',[CheckController::class , 'users']);
// Route::get('/verify/{age}',[CheckController::class , 'verify']);
// Route:: view('noaccess','noaccess');
// Route::group(['middleware' => ['groupware']] , function()
 
// {
//     Route::view('us' ,'us');
// }
// ); 

// Route::group(['custom' => ['groupware']], function() {
//     Route::view('us', 'us');
// }); 

Route::middleware('custom')->group(function () {
    // Route::view('us', 'us');
    Route:: get('us',[CheckController::class,'us']);
}); 

Route:: view('noaccess','noaccess'); 

Route:: get('data' ,[CheckController::class, 'data']); 

Route:: get('api' ,[CheckController::class, 'GetApi']);

Route::view('add','Adduser');

Route::post('save' ,[CheckController::class , 'getData']);

 

