<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PageController@showCoverPage');
Route::get('/celebration', 'PageController@showCelebrationPage');
Route::get('/wedding', 'PageController@showWeddingPage');
Route::get('/gifts', 'PageController@showGiftPage');
Route::get('/reply', 'PageController@showReplyPage');
Route::post('reply','InviteController@sendInviteEmail');



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
