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
//admin panel
Route::get('admin', function () {
    return view ('admin.admin');

})->name('ShowAdminPage');


//city
Route::get('admin/add/citties', function () {
    return view ('admin.Add_Cities');

})->name('addcities');
//addcities
Route::post('admin/add/citties', 'CitiesController@insertcity');

/////////////////////////////////////////add catogary//////////////////////////
//show catogary
Route::get('Add/catogry', function () {
    return view ('admin.catogry');
})->name('AddCatogry');
//add
Route::post('Add/catogry', 'CatogeryController@insertcatogery');

/////////////////////////////////////add services////////////////////////////////////////
//show function
Route::get('Add/service', 'SeviceController@show_services')->name('AddService');
//insert function
Route::post('Add/service','SeviceController@Add_service');
