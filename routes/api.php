<?php

use Illuminate\Http\Request;
use App\Todo;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('todos', function(){
	return Todo::all();
})->middleware('auth:api');

Route::get('todos', 'TodosController@index');


//Route::get('todos', ['middleware' => 'auth.basic', function()
//{
    // Only authenticated users may enter...
//}]);