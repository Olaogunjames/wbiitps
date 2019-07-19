<?php

use Illuminate\Http\Request;

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

Route::post('updatecompany/{id}', 'API\SiwesController@updatecompany');
Route::get('applications', 'API\SiwesController@applications');
Route::post('accept/{id}', 'API\SiwesController@accept');
Route::post('reject/{id}', 'API\SiwesController@reject');
Route::post('applyto', 'API\SiwesControllerClient@applyto');
Route::get('it', 'API\SiwesControllerClient@it');
Route::get('management', 'API\SiwesControllerClient@management');
Route::get('accounting', 'API\SiwesControllerClient@accounting');
Route::get('design', 'API\SiwesControllerClient@design');
