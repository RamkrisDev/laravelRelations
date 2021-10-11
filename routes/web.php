<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\UserController;
Route::get('adduser',[UserController::class,'insert']);
Route::get('getuser/{id}',[UserController::class,'getNumber']);


use App\Http\Controllers\PostController;
Route::get("addpost",[PostController::class,'addpost']);
Route::get("addcmt/{id}",[PostController::class,'comment']);
Route::get("getcmt/{id}",[PostController::class,'getCommentByPost']);

use App\Http\Controllers\RoleController;

Route::get("addrole",[RoleController::class,'addrole']);
Route::get("addusr",[RoleController::class,'addUser']);
Route::get("getrolls/{id}",[RoleController::class,'getAllRolesByuser']);
Route::get("getusers/{id}",[RoleController::class,'getAllRolesByRole']);


use App\Http\Controllers\EmployeeController;
Route::get("addemp",[EmployeeController::class,'addEmp']);

Route::get("expxl",[EmployeeController::class,'exportExcel']);
Route::get("expcsv",[EmployeeController::class,'exportCsv']);



Route::get("getemp",[EmployeeController::class,'getemp']);
Route::get("getpdf",[EmployeeController::class,'pdfs']);