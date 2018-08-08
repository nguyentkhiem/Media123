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

Route::get('/', 'FrontendController@getHome');
Route::get('movieDetails/{id}/{slug}.html', 'FrontendController@getMovieDetails');
Route::get('musicDetails/{id}/{slug}.html', 'FrontendController@getMusicDetails');
Route::get('imageDetails/{id}/{slug}.html', 'FrontendController@getImageDetails');
Route::get('newsDetails/{id}/{slug}.html', 'FrontendController@getNewsDetails');


Route::get('listMovie', 'FrontendController@getListMovie');
Route::get('listMusic', 'FrontendController@getListMusic');
Route::get('listNews', 'FrontendController@getListNews');
Route::get('listImage', 'FrontendController@getListImage');

Route::get('register', 'RegisterController@getRegister');
Route::post('register', 'RegisterController@postRegister');
Route::get('checkmail/{user_mail}/{token}', 'RegisterController@getCheckMail')->name('checkmail');


Route::get('facebook/redirect', 'Auth\SocialiteController@redirectToProvider');
Route::get('facebook/callback', 'Auth\SocialiteController@handleProviderCallback');

Route::group(['namespace'=>'Admin'],function (){
	Route::group(['prefix'=>'login', 'middleware'=>'CheckLogin'], function (){
		Route::get('/', 'LoginController@getLogin');
		Route::post('/', 'LoginController@postLogin');
	});

	Route::get('logout', 'HomeController@getLogout');

	Route::group(['prefix'=>'admin', 'middleware'=>'CheckLogout'], function (){
		Route::get('home', 'HomeController@getHome');

		Route::group(['prefix'=>'manager'], function (){
			Route::get('/', 'ManagerController@getManager');
			// Route::post('/', 'ManagerController@postManager');

			Route::get('editAdmin/{id}', 'ManagerController@getEditAdmin');
			Route::post('editAdmin/{id}', 'ManagerController@postEditAdmin');
		});

		Route::group(['prefix'=>'user'], function (){
			Route::get('/', 'UserController@getUser');
			// Route::post('/', 'UserController@postUser');

			Route::get('add', 'UserController@getAddUser');
			Route::post('add', 'UserController@postAddUser');

			Route::get('edit/{id}', 'UserController@getEditUser');
			Route::post('edit/{id}', 'UserController@postEditUser');

			Route::get('delete/{id}', 'UserController@getDeleteUser');
		});

		Route::group(['prefix'=>'category'], function (){
			Route::get('/', 'CategoryController@getCategory');

			Route::post('/', 'CategoryController@postCategory');

			Route::get('edit/{id}', 'CategoryController@getEditCate');
			Route::post('edit/{id}', 'CategoryController@postEditCate');

			Route::get('delete/{id}', 'CategoryController@getDeleteCate');
		});

		Route::group(['prefix'=>'movie'], function (){
			Route::get('/', 'MovieController@getMovie');

			Route::get('add', 'MovieController@getAddMovie');
			Route::post('add', 'MovieController@postAddMovie');

			Route::get('edit/{id}', 'MovieController@getEditMovie');
			Route::post('edit/{id}', 'MovieController@postEditMovie');

			Route::get('delete/{id}', 'MovieController@getDeleteMovie');
		});

		Route::group(['prefix'=>'music'], function (){
			Route::get('/', 'MusicController@getMusic');

			Route::get('add', 'MusicController@getAddMusic');
			Route::post('add', 'MusicController@postAddMusic');

			Route::get('edit/{id}', 'MusicController@getEditMusic');
			Route::post('edit/{id}', 'MusicController@postEditMusic');

			Route::get('delete/{id}', 'MusicController@getDeleteMusic');
		});

		Route::group(['prefix'=>'image'], function (){
			Route::get('/', 'ImageController@getImage');

			Route::get('add', 'ImageController@getAddImage');
			Route::post('add', 'ImageController@postAddImage');

			Route::get('edit/{id}', 'ImageController@getEditImage');
			Route::post('edit/{id}', 'ImageController@postEditImage');

			Route::get('delete/{id}', 'ImageController@getDeleteImage');
		});

		Route::group(['prefix'=>'news'], function (){
			Route::get('/', 'NewsController@getNews');

			Route::get('add', 'NewsController@getAddNews');
			Route::post('add', 'NewsController@postAddNews');

			Route::get('edit/{id}', 'NewsController@getEditNews');
			Route::post('edit/{id}', 'NewsController@postEditNews');

			Route::get('delete/{id}', 'NewsController@getDeleteNews');
		});

		Route::group(['prefix'=>'banner'], function (){
			Route::get('/', 'BannerController@getBanner');

			Route::get('add', 'BannerController@getAddBanner');
			Route::post('add', 'BannerController@postAddBanner');

			Route::get('edit/{id}', 'BannerController@getEditBanner');
			Route::post('edit/{id}', 'BannerController@postEditBanner');

			Route::get('delete/{id}', 'BannerController@getDeleteBanner');
		});
	});
});
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
