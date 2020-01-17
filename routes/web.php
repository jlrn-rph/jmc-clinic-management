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

// Route::get('/', function () {
//     return view('welcome');
// });
//

Auth::routes();

Route::get('/', 'HomeController@index');

Route::resource('specialists', 'SpecialistController')->middleware('auth');

Route::resource('users', 'UserController')->middleware('auth');

Route::resource('roles', 'RoleController')->middleware('auth');

Route::resource('patients', 'PatientController')->middleware('auth');

Route::resource('appointments', 'AppointmentController')->middleware('auth');

Route::resource('consults', 'ConsultController')->middleware('auth');

Route::resource('doctors', 'DoctorController')->middleware('auth');

Route::resource('prescriptions', 'PrescriptionController')->middleware('auth');

Route::resource('schedules', 'ScheduleController')->middleware('auth');

Route::resource('laboratories', 'LaboratoryController')->middleware('auth');

Route::resource('labTests', 'LabTestController')->middleware('auth');

Route::resource('payments', 'PaymentController')->middleware('auth');

Route::resource('items', 'ItemController')->middleware('auth');

Route::resource('suppliers', 'SupplierController')->middleware('auth');

Route::resource('purchases', 'PurchaseController')->middleware('auth');

Route::resource('returnPurchases', 'ReturnPurchaseController')->middleware('auth');


Route::resource('staff', 'StaffController');