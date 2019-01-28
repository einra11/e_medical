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

Route::get('/contact', function () {
    return view('guests.contact');
});
Route::get('/about', function () {
    return view('guests.about');
});



Route::get('/home', 'HomeController@index')->name('home');


Route::resource('dashboard', 'DashboardController');


Route::resource('appointment', 'AppointmentsController');
Route::resource('medicine', 'MedicinesController');
Route::resource('patient', 'PatientsController');
Route::resource('prescription', 'PrescriptionController');
Route::resource('medicalhistory', 'MedicalHistoryController');
Route::resource('patient-profilePDF', 'PatientProfilePDFController');

Auth::routes();
