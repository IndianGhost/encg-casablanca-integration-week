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

Route::get('/webinar', function () {
    return view('pages.webinar');
})->name('webinar');

Route::group(['prefix' => '/games-space'], function () {
    Route::get('/', 'GameSpaceController@game_space')->name('games-space');

    Route::post('/subscribed/{id}', 'UserController@subscribe_game')
        ->where('id', '[0-9]+')
        ->name('game-subscribe');
});

Route::group(['prefix' => '/clubs-space'], function () {
    Route::get('/', 'ClubsSpaceController@club_space')
        ->name('clubs-space');

    Route::get('/stand/{id}', 'ClubsSpaceController@club_stand')
        ->where('id', '[0-9]+')
        ->name('club-stand');

    Route::post('/subscribed/{id}', 'UserController@subscribe_club')
        ->where('id', '[0-9]+')
        ->name('club-subscribe');
});
