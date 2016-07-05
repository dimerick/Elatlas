<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'BasicController@newIndex');
Route::get('/index', 'BasicController@newIndex');
Route::get('home', 'BasicController@newIndex');
Route::get('map-groups', 'BasicController@mapGroups');
Route::get('alexissaenz', 'BasicController@indexAlexis');
Route::get('retorno', 'BasicController@retorno');
Route::get('new/index', 'BasicController@newInterfaz');
//Route::get('new-index', 'BasicController@newIndex');

Route::get('groups-register', 'BasicController@groupsRegister');
Route::get('activities', 'BasicController@activities');
Route::get('map-activities', 'BasicController@mapActivities');
Route::get('terms-conditions', 'BasicController@termsConditions');
Route::get('categories', 'BasicController@categories');
Route::get('searchAjax/{cadena}', 'BasicController@searchAjax');
Route::get('allGroupsAjax', 'BasicController@allGroupsAjax');
Route::get('da', 'BasicController@daPage');
Route::get('searchCategories/{cadena}', 'BasicController@searchCategories');
Route::get('groupsxcat', 'BasicController@groupsxcat');

/*Version 2.0 el Atlas*/
Route::get('v2/groups-register', 'v2Controller@groupsRegister');
Route::get('v2/activities-register', 'v2Controller@activitiesRegister');


Route::get('email_conf', 'email_confController@index');

//Route::get('register', 'HomeController@index');
//
//Route::get('profile', 'ProfileController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('grupos', 'GruposController');

Route::get('active/{cod}', 'ActiveCountController@index');

Route::group(['prefix' => 'user', 'middleware' => ['auth', 'email_confirmed']], function(){
	Route::get('upload-activity', 'UserController@uploadActivity');
	Route::post('upload-activity', 'UserController@uploadActivityPost');
	Route::post('search-post', 'UserController@searchPost');
	Route::get('upload-photos/{id}', 'UserController@uploadPhotos');
	Route::post('upload-photos', 'UserController@uploadPhotosPost');
	Route::get('my-publications', 'UserController@myPublications');
	Route::get('reports/edit/{id}', 'UserController@editReport');
	Route::post('reports/update', 'UserController@updateReport');
	Route::get('reports/delete/{id}', 'UserController@deleteReport');
});

	Route::get('publications', 'UserController@publications');
	Route::get('publications/{id}', 'UserController@showPost');
	Route::get('autor/{id}', 'UserController@showAutor');
	Route::post('search', 'UserController@search');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'email_confirmed', 'is_admin']], function(){
	Route::get('reports', 'AdminController@reports');
	Route::get('show-report/{id}', 'AdminController@showReport');
	Route::get('reports/approve/{id}', 'AdminController@approveReport');
	Route::get('reports/desapprove/{id}', 'AdminController@desapproveReport');
	Route::get('reports/edit/{id}', 'AdminController@editReport');
	Route::post('reports/update', 'AdminController@updateReport');
	Route::get('reports/delete/{id}', 'AdminController@deleteReport');
});

Route::group(['prefix' => 'recorridos'], function(){
	Route::get('/', 'RecorridosController@index');
	Route::get('derecho-a-la-ciudad/page{id}', 'RecorridosController@recorridoDerechoAlaCiudad');
});



Route::get('register', ['middleware' => 'auth',function(){
	return redirect()->action('ProfileController@index');
}]);