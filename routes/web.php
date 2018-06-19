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

Route::get('/students/show', 'StudentsController@show' )->name('students.show');

Route::match(['get','post'], '/students/add', 'StudentsController@add')->name('students.add');

Route::match(['get','post'], '/students/edit/{student}', 'StudentsController@edit')->name('students.edit');

Route::get('/assignments/show', 'AssignmentsController@show' );
