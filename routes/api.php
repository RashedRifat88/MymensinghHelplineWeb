<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




// Route::get('/students', function(){
//     return "All Student Info";
// });




//Public Apis
Route::get('/doctors', [UserController::class, 'allDoctor']);
Route::get('/doctors/{id}', [UserController::class, 'doctorDetails']);
Route::get('/doctor_list/{hospital_name}', [UserController::class, 'showDoctorByHospital']);
Route::get('/hospitals', [UserController::class, 'showHospitals']);
Route::post('/appointment_history', [UserController::class, 'showAppointmentHistory']);
Route::post('/make_appointment', [UserController::class, 'appointmentByApp']);
Route::get('/app_home', [UserController::class, 'showAppHomePage']);

Route::get('/show_all_test', [UserController::class, 'allTest']);

Route::post('/upload_test_order', [UserController::class, 'uploadTestOrder']);



// Route::get('/doctors', function (){
//     return 'All doctor';
// });



//Public Apis
Route::post('/register', [UserController::class, 'register']);  
Route::post('/login', [UserController::class, 'login']);

//Protected Apis
// Route::middleware('auth:sanctum')->get('/students', [StudentController::class, 'index']);
// Route::middleware('auth:sanctum')->get('/students/{id}', [StudentController::class, 'show']);
Route::middleware('auth:sanctum')->group(function () {

    // Route::get('/doctors/{id}', [UserController::class, 'doctorDetails']);
    
    Route::get('/my_appointments', [UserController::class, 'myAppointment']);



    Route::post('/students', [StudentController::class, 'store']);
    Route::put('/students/{id}', [StudentController::class, 'update']);
    Route::delete('/students/{id}', [StudentController::class, 'destroy']);
    Route::get('/students/search/{city}', [StudentController::class, 'search']);
    Route::post('/logout', [UserController::class, 'logout']);

    // Route::post('/upload_test_order', [UserController::class, 'uploadTestOrder']);
});

