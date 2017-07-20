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

Auth::routes();

Route::get('/registration', 'PatientController@create')->name('registration');

Route::get('/settings', 'HomeController@settings')->name('settings');

Route::get('/reports', 'HomeController@reports')->name('reports');

Route::resource('services', 'ServiceController');

Route::resource('insurances', 'InsuranceController');

Route::resource('investigations', 'InvestigationController');

Route::resource('treatments', 'TreatmentController');

Route::resource('patients', 'PatientController');

Route::get('/test', 'PatientController@test')->name('test');

Route::post('/patient/treatments', 'PatientController@treatments')->name('patient_treatments');

Route::post('/patient/transactions', 'PatientController@transactions')->name('patient_transactions');
