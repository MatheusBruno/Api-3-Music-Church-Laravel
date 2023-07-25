<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('hellow', function() {
    return 'hello world';
});

// Route::post("hellow-post2/{name}", function($name) {
//     return "hello " . $name;
// });

// nesse caso como esta versionado o caminha tem que ser passado
// Route::post('hello-post', 'App\Http\Controllers\HelloWorldController@hello');

// Route::post('hello-post/{name}', 'App\Http\Controllers\HelloWorldController@hello2');

Route::post('hello-post/{name}', 'App\Http\Controllers\HelloWorldController@hello3');

// Route::get('hello-post/{name}', 'App\Http\Controllers\HelloWorldController@hello4');

// Route::get('hello-post/{name}', 'App\Http\Controllers\HelloWorldController@hello');

Route::get('bands', 'App\Http\Controllers\BandController@getAll');

Route::get('dados', function() {
    return array("Coffe", "Beer", "Coca");
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
