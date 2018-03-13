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

Route::get('about2', function () {
	
//	print_r($_ENV);
//	echo config('app.url'); # Показать перемену
//	var_dump(config()); # Всі конфіги

//	Config::set('app.locale', 'ua'); # Поменять переменну
//	echo Config::get('app.locale'); # Показать поменяну переменну

//	echo env('APP_ENV'); # Переменні з файла .env
	
	return;
//	return view('about');
});


# Для POST - запитів
Route::post('/comments', function(){
	
	print_r($_POST);
	
});

# ДЛя POST або GET запитів
Route::match(['get','post'],'/comments2', function(){
	
	print_r($_POST);
	
});

# ДЛя ВСІХ запитів
Route::any('/comments3', function(){
	
	print_r($_POST);
	
});

/*
# Параметр {id} передасться ПЕРШОМУ параметру в функції. В даному випадку це змінна $id_page
Route:group('/page/{id}', function($id_page){
	Route:get('/');
	
});
*/

#Контроллер(имя класа)@Метод(функция в класе)
#$ php artisan make:controller NAME
Route::get('/about/{id}', 'FirstController@show');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'PostController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');
