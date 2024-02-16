<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardKelasController;
use App\Http\Controllers\DashboardStudentsController;
use App\Http\Controllers\ExtracurricularsController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentsController;
use App\Models\Extracurriculars;
use App\Models\Students;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/home', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Aaron",
        "kelas" => "11 PPLG 1",
        "photo" => "profile.png",
    ]);
});

// Route::get('/student/all', [StudentsController::class, 'index']);
// Route::get('/student/add', [StudentsController::class, 'add']);
// Route::get('/student/detail/{student}', [StudentsController::class, 'show']);

Route::group(["prefix" => "/student"],function(){
    Route::get('/all', [StudentsController::class, 'index']);
    Route::get('/detail/{student}', [StudentsController::class, 'show']);
    Route::get('/add', [StudentsController::class, 'add']);
    Route::get('/edit/{student}', [StudentsController::class, 'edit']);
    Route::post('/update/{student}', [StudentsController::class, 'update']);
    Route::post('/store', [StudentsController::class, 'store']);
    Route::delete('/delete/{student}', [StudentsController::class, 'destroy']);
});

Route::group(["prefix" => "/kelas"],function(){
    Route::get('/all', [KelasController::class, 'index']);
    Route::get('/detail/{kelas}', [KelasController::class, 'show']);
    Route::get('/add', [KelasController::class, 'add']);
    Route::get('/edit/{kelas}', [KelasController::class, 'edit']);
    Route::post('/update/{kelas}', [KelasController::class, 'update']);
    Route::post('/store', [KelasController::class, 'store']);
    Route::delete('/delete/{kelas}', [KelasController::class, 'destroy']);
});

Route::get('/extracurricular', [ExtracurricularsController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/signup', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/signup', [RegisterController::class, 'store']);

Route::group(["prefix" => "/dashboard"],function(){
    Route::get('/', [DashboardController::class, 'index'])->middleware('auth');
    Route::group(["prefix" => "/student"],function(){
        Route::get('/all', [DashboardStudentsController::class, 'index']);
        Route::get('/detail/{student}', [DashboardStudentsController::class, 'show']);
        Route::get('/add', [DashboardStudentsController::class, 'add']);
        Route::get('/edit/{student}', [DashboardStudentsController::class, 'edit']);
        Route::post('/update/{student}', [DashboardStudentsController::class, 'update']);
        Route::post('/store', [DashboardStudentsController::class, 'store']);
        Route::delete('/delete/{student}', [DashboardStudentsController::class, 'destroy']);
    });
    Route::group(["prefix" => "/kelas"],function(){
        Route::get('/all', [DashboardKelasController::class, 'index']);
        Route::get('/detail/{kelas}', [DashboardKelasController::class, 'show']);
        Route::get('/add', [DashboardKelasController::class, 'add']);
        Route::get('/edit/{kelas}', [DashboardKelasController::class, 'edit']);
        Route::post('/update/{kelas}', [DashboardKelasController::class, 'update']);
        Route::post('/store', [DashboardKelasController::class, 'store']);
        Route::delete('/delete/{kelas}', [DashboardKelasController::class, 'destroy']);
    });
});