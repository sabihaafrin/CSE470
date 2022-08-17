<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();
Route::get('/', [HomeController::class, 'index']);


Route::get('/home', [HomeController::class, 'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/addtest', [AdminController::class, 'addtest']);
Route::get('/showtest', [HomeController::class, 'showtest']);
Route::post('/upload_test', [AdminController::class, 'uploadtest']);
Route::get('/search', [AdminController::class, 'search']);
Route::get('/searchdoc', [AdminController::class, 'searchdoc']);
Route::get('/consult', [HomeController::class, 'consult']);
Route::get('/addconsult', [AdminController::class, 'addconsult']);
Route::post('/upload_consult', [AdminController::class, 'uploadconsult']);


Route::get('/showusers', [AdminController::class, 'showusers']);
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);
Route::get('/add_user_view', [AdminController::class, 'adduser']);
Route::post('/upload_employee', [AdminController::class, 'uploademployee']);
Route::get('/showemployee', [AdminController::class, 'showemployee']);
Route::get('/deleteemployee/{id}', [AdminController::class, 'deleteemployee']);
Route::get('/updateemployee/{id}', [AdminController::class, 'updateemployee']);
Route::post('/editemployee/{id}', [AdminController::class, 'editemployee']);



Route::get('/add_doctor_view', [AdminController::class, 'addview']);
Route::post('/upload_doctor', [AdminController::class, 'upload']);
Route::get('/showdoctor', [AdminController::class, 'showdoctor']);
Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);
Route::get('/updatedoctor/{id}', [AdminController::class, 'updatedoctor']);
Route::post('/editdoctor/{id}', [AdminController::class, 'editdoctor']);


Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/myappointment', [HomeController::class, 'myappointment']);
Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);
Route::get('/showappointment', [AdminController::class, 'showappointment']);
Route::get('/approved/{id}', [AdminController::class, 'approved']);
Route::get('/cancelled/{id}', [AdminController::class, 'cancelled']);

Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/ambulance', [HomeController::class, 'ambulance']);
Route::get('/myambulance', [HomeController::class, 'myambulance']);
Route::get('/cancel_ambul/{id}', [HomeController::class, 'cancel_ambul']);
Route::get('/showambulance', [AdminController::class, 'showambulance']);
Route::get('/approveBook/{id}', [AdminController::class, 'approveBook']);
Route::get('/cancelBook/{id}', [AdminController::class, 'cancelBook']);

