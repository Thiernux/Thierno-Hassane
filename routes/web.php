<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', [
	'as' =>'root_path',	// redirect link to the home page
	'uses' => 'HomeController@home']);

Route::get('/posts/{post_name}', [
	'as' => 'post_path',
	'uses' => 'PostController@show']);

Route::get('/listPosts', [
	'as' => 'listPosts_path',
	'uses' => 'PostController@showList']);


Route::get('contact', [
	'as' =>'contact_path',
	'uses' => 'ContactFormController@create']);

Route::post('contact', [
	'as' =>'contact_path',
	'uses' => 'ContactFormController@store']);



