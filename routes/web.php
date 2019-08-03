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
Route::get('/', 'CompanyController@welcome')->name('welcome');
Route::get('/aboutus', 'CompanyController@aboutus')->name('aboutus');
Route::get('/services', 'CompanyController@services')->name('services');
Route::get('/policy', 'CompanyController@policy')->name('policy');
Route::get('/conditions', 'CompanyController@conditions')->name('conditions');

Auth::routes(['register' => false]);

Route::get('/home', function () {
    return redirect('admin');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['middleware'=>'auth'], function() {
    Route::post('admin/gym/memberships/','Voyager\PersonController@Memberships')->middleware('auth')->name('gym.memberships');
});