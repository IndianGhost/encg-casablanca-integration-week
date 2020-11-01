<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')
    ->name('home');

Route::group(['prefix' => '/clubs-space'], function () {
    Route::get('/', 'ClubsSpaceController@club_space')
        ->name('clubs-space');

    Route::get('/stand/{id}', 'ClubsSpaceController@club_stand')
        ->where('id', '[0-9]+')
        ->name('club-stand');
});
