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

Route::resource('specialists', 'SpecialistController');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('patients', 'PatientController');

Route::resource('appointments', 'AppointmentController');

Route::resource('consults', 'ConsultController');

Route::resource('doctors', 'DoctorController');

Route::resource('prescriptions', 'PrescriptionController');

Route::resource('schedules', 'ScheduleController');

Route::resource('laboratories', 'LaboratoryController');

Route::resource('labTests', 'LabTestController');

Route::resource('payments', 'PaymentController');

Route::resource('items', 'ItemController');

Route::resource('suppliers', 'SupplierController');

Route::resource('purchases', 'PurchaseController');

Route::resource('returnPurchases', 'ReturnPurchaseController');
