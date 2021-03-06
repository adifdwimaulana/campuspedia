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

use Illuminate\Http\Request;

Route::get('/admin',[
    'as' 		=> 'admin.index',
    'uses' 		=> 'AdminController@index'
]);

Auth::routes();

Route::get('/', [ 
    'as'=>'home.index', 
    'uses' => 'HomeController@index'
]);

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

  Route::get('/kategori', 'KarirController@kategori');
  Route::post('/kategori/store', 'KarirController@store_kategori');
  Route::get('/karir', 'KarirController@karir');
  Route::post('/karir/store', 'KarirController@store_karir');
  
  // College Route
  Route::get('/college', 'CollegesController@college');
  Route::get('/college/create', 'CollegesController@create_college');
  Route::post('/college/store', 'CollegesController@store_college');
  Route::get('/college/edit/{id}', 'CollegesController@edit_college');
  Route::post('/college/{id}', 'CollegesController@update_college');
  Route::get('/college/destroy/{id}', 'CollegesController@destroy_college');

  Route::get('/faculty', 'CollegesController@faculty');
  Route::get('/faculty/create', 'CollegesController@create_faculty');
  Route::post('/faculty/store', 'CollegesController@store_faculty');
  Route::get('/faculty/edit/{id}', 'CollegesController@edit_faculty');
  Route::post('/faculty/{id}', 'CollegesController@update_faculty');
  Route::get('/faculty/destroy/{id}', 'CollegesController@destroy_faculty');

  Route::get('/major', 'CollegesController@major');
  Route::get('/major/create', 'CollegesController@create_major');
  Route::get('/major/faculty-list', 'CollegesController@faculty_list');
  Route::post('/major/store', 'CollegesController@store_major');
  Route::get('/major/edit/{id}', 'CollegesController@edit_major');
  Route::post('/major/{id}', 'CollegesController@update_major');
  Route::get('/major/destroy/{id}', 'CollegesController@destroy_major');
});

Route::group(['prefix' => 'company'], function () {
  Route::get('/login', 'CompanyAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CompanyAuth\LoginController@login');
  Route::post('/logout', 'CompanyAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CompanyAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CompanyAuth\RegisterController@register');

  Route::post('/password/email', 'CompanyAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CompanyAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CompanyAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CompanyAuth\ResetPasswordController@showResetForm');


  Route::get('/perusahaan', 'JobsController@perusahaan');
  Route::post('/simpan_perusahaan', 'JobsController@simpan_perusahaan');
  Route::get('/view_all_perusahaan', 'JobsController@view_all_perusahaan');
  Route::get('/lihat_detail_perusahaan/{id}', 'JobsController@show_perusahaan');
  Route::get('/edit_perusahaan/{id}', 'JobsController@edit_perusahaan');
  Route::post('/edit_perusahaan', 'JobsController@post_edit_perusahaan');
  Route::get('/hapus_perusahaan/{id}', 'JobsController@hapus_perusahaan');


  Route::get('/dashboard', 'JobsController@dashboard');
  Route::get('/pekerjaan', 'JobsController@pekerjaan');
  Route::post('/simpan_pekerjaan', 'JobsController@simpan_pekerjaan');
  Route::get('/view_all_pekerjaan', 'JobsController@view_all_pekerjaan');
  Route::get('/lihat_detail_pekerjaan/{id}', 'JobsController@show_pekerjaan');
  Route::get('/edit_pekerjaan/{id}', 'JobsController@edit_pekerjaan');
  // Route::post('/edit_perusahaan', 'JobsController@post_edit_perusahaan');
  Route::get('/hapus_pekerjaan/{id}', 'JobsController@hapus_pekerjaan');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// College Route
  Route::get('/college', 'CollegesController@index');
  Route::get('/college/{id}', 'CollegesController@detail_college');
  Route::post('/college/search', 'CollegesController@search');

  // College API
  Route::get('/api/college', 'CollegesController@api_show');
