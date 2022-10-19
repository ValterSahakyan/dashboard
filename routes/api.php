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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::group(['middleware' => 'api'], function ($router) {

    Route::get('team-members', 'Api\TeamMembersController@index');
    Route::get('team-members/{id}', 'Api\TeamMembersController@memberById');
    Route::get('projects', 'Api\ProjectsController@index');
    Route::get('projects/{title}', 'Api\ProjectsController@projectByTitle');
    Route::get('careers', 'Api\CareersController@index');
    Route::get('careers/{id}', 'Api\CareersController@careerById');
    Route::get('news', 'Api\PostsController@index');
    Route::get('news/{title}', 'Api\PostsController@postByTitle');
    Route::get('collaborations', 'Api\CollaborationsController@index');
    Route::get('numbers', 'Api\NumbersController@index');
    Route::get('technologies', 'Api\TechnologiesController@index');

    Route::post('send-message', 'Api\MessagesController@send');
    Route::post('data-request', 'Api\DataRequestController@request');

});
