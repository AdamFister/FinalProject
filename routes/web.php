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

Auth::routes();

Route::get('/all', 'InstrumentController@index');

Route::get('/played/{id}', 'TalentController@index');
Route::get('/add/{id}/{instid}', 'TalentController@create');
Route::get('/delete/{id}/{instid}', 'TalentController@destroy');

Route::get('/allProfiles', 'ProfileController@getAllProfiles');
Route::get('/uniqueTalents', 'TalentController@uniqueTalents');
Route::get('/getTalents', 'TalentController@getTalents');
Route::get('/getInstruments', 'TalentController@getInstruments');
Route::get('/vocalists', 'TalentController@vocalists');
Route::get('/guitarists', 'TalentController@guitarists');
Route::get('/bassists', 'TalentController@bassists');
Route::get('/drummers', 'TalentController@drummers');
Route::get('/keyboardists', 'TalentController@keyboardists');

Route::get('/profiles/{id}', 'ProfileController@getProfileByID');

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/approval', 'HomeController@approval')->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('/users', 'UserController@index')->name('admin.users.index');
        Route::get('/users/{user_id}/approve', 'UserController@approve')->name('admin.users.approve');
    });
});

Route::resource('profiles', 'ProfileController');
Route::resource('instruments', 'InstrumentController');
Route::resource('talents', 'TalentController');