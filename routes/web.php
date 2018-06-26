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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/courses','CourseController@index')->name('courses.index');

Route::get('/courses/vue',function(){
    return view('courses.indexVue');
})->name('courses.vue');

Route::get('/filters','CourseController@filters')->name('filters');

Route::get('/courses/show/all','CourseController@indexVue')->name('courses.show.all');
