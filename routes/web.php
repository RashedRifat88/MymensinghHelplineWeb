<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index_login']);
Route::get('/home', [HomeController::class, 'redirect']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::get('/dashboard', [HomeController::class, 'index_login'])->name('dashboard');

});

Route::get('/add_doctor_view', [AdminController::class, 'addDoctorView']);
Route::post('/upload_doctor', [AdminController::class, 'uploadDoctor']);
Route::get('/show_appointments', [AdminController::class, 'showAppointments']);
Route::get('/approve_appointment/{id}', [AdminController::class, 'approveAppointment']);
Route::get('/cancel_appointment_a/{id}', [AdminController::class, 'cancelAppointment_a']);
Route::get('/show_doctor', [AdminController::class, 'showDoctor']);
Route::get('/show_hospital_clinic', [AdminController::class, 'showshowHospitalClinic']);
Route::get('/delete_doctor/{id}', [AdminController::class, 'deleteDoctor']);
Route::get('/update_doctor/{id}', [AdminController::class, 'updateDoctor']);
Route::post('/edit_doctor/{id}', [AdminController::class, 'editDoctor']);

Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/myappointment', [HomeController::class, 'myAppointment']);
Route::get('/cancel_appointment/{id}', [HomeController::class, 'cancelAppointment']);


Route::get('/view_app_home', [AdminController::class, 'appHomePageView']);
Route::post('/update_app_home/{id}', [AdminController::class, 'appHomePage']);


Route::get('/view_add_test_name', [AdminController::class, 'showTestName']);
Route::post('/add_test_name', [AdminController::class, 'addTestName']);
Route::get('/show_all_test', [AdminController::class, 'showAllTest']);
Route::post('/edit_test/{id}', [AdminController::class, 'editTest']);
Route::get('/update_test/{id}', [AdminController::class, 'updateTest']);
Route::get('/delete_test/{id}', [AdminController::class, 'deleteTest']);
Route::get('/show_patient_order', [AdminController::class, 'showPatientOrder']);
