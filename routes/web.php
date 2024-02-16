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
});

Route::group(["prefix" => "/kelas"],function(){
    Route::get('/all', [KelasController::class, 'index']);
    Route::get('/detail/{kelas}', [KelasController::class, 'show']);
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
        Route::get('/all', [DashboardStudentsController::class, 'index'])->middleware('auth');
        Route::get('/detail/{student}', [DashboardStudentsController::class, 'show'])->middleware('auth');
        Route::get('/add', [DashboardStudentsController::class, 'add'])->middleware('auth');
        Route::get('/edit/{student}', [DashboardStudentsController::class, 'edit'])->middleware('auth');
        Route::post('/update/{student}', [DashboardStudentsController::class, 'update'])->middleware('auth');
        Route::post('/store', [DashboardStudentsController::class, 'store'])->middleware('auth');
        Route::delete('/delete/{student}', [DashboardStudentsController::class, 'destroy'])->middleware('auth');
    });
    Route::group(["prefix" => "/kelas"],function(){
        Route::get('/all', [DashboardKelasController::class, 'index'])->middleware('auth');
        Route::get('/detail/{kelas}', [DashboardKelasController::class, 'show'])->middleware('auth');
        Route::get('/add', [DashboardKelasController::class, 'add'])->middleware('auth');
        Route::get('/edit/{kelas}', [DashboardKelasController::class, 'edit'])->middleware('auth');
        Route::post('/update/{kelas}', [DashboardKelasController::class, 'update'])->middleware('auth');
        Route::post('/store', [DashboardKelasController::class, 'store'])->middleware('auth');
        Route::delete('/delete/{kelas}', [DashboardKelasController::class, 'destroy'])->middleware('auth');
    });
});