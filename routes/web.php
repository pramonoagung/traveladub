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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/dashboard', 'HomeController@dashboard');
Route::get('/admin/list-artikel','HomeController@artikel');
Route::get('/admin/list-destinasi', 'HomeController@destinasi');
Route::get('/admin/list-rekomendasi', 'HomeController@rekomendasi');
Route::get('/admin/list-user', 'HomeController@daftarUser');
Route::get('/admin/tambah-destinasi', 'HomeController@addDestinasi');
Route::post('/admin/tambah', 'HomeController@createDestinasi');

Route::get('/destinasi/{id}/delete', 'HomeController@deleteDestinasi');
Route::get('/profile', 'HomeController@profile');
Route::get('/profile/{id}/edit', 'MasterController@editProfile');
Route::get('/profile/{id}/edit/save', 'MasterController@updateProfile');
Route::get('/cari', 'MasterController@cari');
Route::get('/filter', 'MasterController@filter');


Route::get('/', function () {
    return view('index');
});
Route::get('/faq', function () {
    return view('FAQ');
});
Route::get('/tes', function () {
    return view('search');
});
Route::get('/destinasi', function () {
    return view('destinasi');
});
Route::get('/detail/destinasi', function () {
    return view('detailDestinasi');
});
Route::get('/rekomendasi', function () {
    return view('rekomendasi');
});


Route::get('/forum', function () {
    return view('forum.index');
});
Route::get('/forum/new-thread', function () {
    return view('forum.create');
});
Route::get('/forum/thread-detail', function () {
    return view('forum.detail');
});

