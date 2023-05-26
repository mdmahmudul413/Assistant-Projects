<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\APIController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function (){
    Route::post('login', 'login');
    Route::post('register', 'register');
});

Route::get('/get-departments', [APIController::class, 'getDepartments']);
Route::post('/new-department', [APIController::class, 'newDepartment']);
Route::patch('/update-department/{id}', [APIController::class, 'updateDepartment']);
Route::delete('/delete-department/{id}', [APIController::class, 'deleteDepartment']);

Route::get('/get-students', [APIController::class, 'getStudents']);
Route::post('/new-student', [APIController::class, 'newStudent']);
Route::patch('/update-student/{id}', [APIController::class, 'updateStudent']);
Route::delete('/delete-student/{id}', [APIController::class, 'deleteStudent']);


