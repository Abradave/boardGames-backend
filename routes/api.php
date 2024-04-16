<?php

use App\Http\Controllers\API\AppointmentController;
use App\Http\Controllers\API\BoardGameController;
use App\Http\Controllers\API\EmployeeAuthController;
use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\GuestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::post("/guestregister", [GuestController::class, "guestregister"]);
Route::post("/guestlogin", [GuestController::class, "guestlogin"]);
Route::post("/guestlogout", [GuestController::class, "guestlogout"]);
Route::get("/guestauthdata", [GuestController::class, "authGuestData"])->middleware('auth:sanctum');


Route::post("/employeeregister", [EmployeeAuthController::class, "employeeRegister"]);
Route::post("/employeelogin", [EmployeeAuthController::class, "employeeLogin"]);
Route::post("/employeelogout", [EmployeeAuthController::class, "employeeLogout"])->middleware('auth:sanctum');
Route::get("/employeeauthdata", [EmployeeAuthController::class, "authEmployeeData"])->middleware('auth:sanctum');

Route::apiResource("/boardgame", BoardGameController::class);

Route::apiResource("/employee", EmployeeController::class);

Route::apiResource("/appointment", AppointmentController::class);

Route::apiResource("/guest", GuestController::class);
