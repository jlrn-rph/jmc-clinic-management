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

// Route::get('/pdf', function () {
//     return view('pdf');
// });


Auth::routes();

Route::get('/', 'HomeController@index')->middleware('auth');

Route::resource('specialists', 'SpecialistController')->middleware('auth');

Route::resource('users', 'UserController')->middleware('auth');
Route::get('users.search', 'UserController@search')->name('user_search');
Route::get('users.pdf1', 'UserController@pdf_list')->name('user_pdf');

Route::resource('roles', 'RoleController')->middleware('auth');

Route::resource('patients', 'PatientController')->middleware('auth');
Route::get('patients.search', 'PatientController@search')->name('px_search');
Route::get('patients/pdf/{id}', 'PatientController@pdf');
Route::get('patients.pdf1', 'PatientController@pdf_list')->name('px_pdf');

Route::resource('appointments', 'AppointmentController')->middleware('auth');
Route::get('appointments.search', 'AppointmentController@search')->name('ap_search');
Route::get('appointments.pdf1', 'AppointmentController@pdf_list')->name('ap_pdf');

Route::resource('consults', 'ConsultController')->middleware('auth');
Route::get('consults.search', 'ConsultController@search')->name('con_search');
Route::get('consults/pdf/{id}', 'ConsultController@pdf');
Route::get('consults.pdf1', 'ConsultController@pdf_list')->name('con_pdf');

Route::resource('doctors', 'DoctorController')->middleware('auth');
Route::get('doctors.search', 'DoctorController@search')->name('dr_search');
Route::get('doctors/pdf/{id}', 'DoctorController@pdf');
Route::get('doctors.pdf1', 'DoctorController@pdf_list')->name('dr_pdf');

Route::resource('prescriptions', 'PrescriptionController')->middleware('auth');
Route::get('prescriptions.search', 'PrescriptionController@search')->name('rx_search');
Route::get('prescriptions/pdf/{id}', 'PrescriptionController@pdf');
Route::get('prescriptions.pdf1', 'PrescriptionController@pdf_list')->name('rx_pdf');

Route::resource('schedules', 'ScheduleController')->middleware('auth');

Route::resource('laboratories', 'LaboratoryController')->middleware('auth');
Route::get('laboratories.search', 'LaboratoryController@search')->name('laboratory_search');
Route::get('laboratories/pdf/{id}', 'LaboratoryController@pdf');
Route::get('laboratories.pdf1', 'LaboratoryController@pdf_list')->name('laboratory_pdf');

Route::resource('labTests', 'LabTestController')->middleware('auth');
Route::get('labTests.search', 'LabTestController@search')->name('lt_search');
Route::get('labTests.pdf1', 'LabTestController@pdf_list')->name('lt_pdf');

Route::resource('payments', 'PaymentController')->middleware('auth');
Route::get('payments.search', 'PaymentController@search')->name('pay_search');
Route::get('payments/pdf/{id}', 'PaymentController@pdf');
Route::get('payments.pdf1', 'PaymentController@pdf_list')->name('pay_pdf');

Route::resource('items', 'ItemController')->middleware('auth');
Route::get('items.search', 'ItemController@search')->name('it_search');
Route::get('items.pdf1', 'ItemController@pdf_list')->name('it_pdf');

Route::resource('suppliers', 'SupplierController')->middleware('auth');
Route::get('suppliers.search', 'SupplierController@search')->name('sup_search');
Route::get('suppliers.pdf1', 'SupplierController@pdf_list')->name('sup_pdf');

Route::resource('purchases', 'PurchaseController')->middleware('auth');
Route::get('purchases.search', 'PurchaseController@search')->name('pur_search');
Route::get('purchases.pdf1', 'PurchaseController@pdf_list')->name('pur_pdf');

Route::resource('returnPurchases', 'ReturnPurchaseController')->middleware('auth');
Route::get('returnPurchases.search', 'ReturnPurchaseController@search')->name('ret_search');
Route::get('returnPurchases.pdf1', 'ReturnPurchaseController@pdf_list')->name('ret_pdf');

Route::resource('staff', 'StaffController')->middleware('auth');
Route::get('staff.search', 'StaffController@search')->name('stf_search');
Route::get('staff/pdf/{id}', 'StaffController@pdf');
Route::get('staff.pdf1', 'StaffController@pdf_list')->name('stf_pdf');
