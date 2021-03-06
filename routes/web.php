<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;



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


Route::get('/', [HomeController::class , "home"]);

Route::get('/admin', [AdminController::class , "index"])->middleware('auth');



// Pride

Route::get('/pride', [AdminController::class , "pride"]);
Route::post('/uploadpride', [AdminController::class , "uploadpride"]);
Route::get('/deletepride/{id}', [AdminController::class , "deletepride"]);
Route::get('/updatepride/{id}', [AdminController::class, 'updatepride' ]);
Route::post('/updatedpride/{id}', [AdminController::class, 'updatedpride' ]);


//ResursMain

Route::get('/resursmain', [AdminController::class , "resursmain"]);
Route::post('/uploadresursmain', [AdminController::class , "uploadresursmain"]);
Route::get('/deleteresursmain/{id}', [AdminController::class , "deleteresursmain"]);
Route::get('/updateresursmain/{id}', [AdminController::class, 'updateresursmain' ]);
Route::post('/updatedresursmain/{id}', [AdminController::class, 'updatedresursmain' ]);


//Resurs
Route::get('/resurs', [AdminController::class , "resurs"]);
Route::post('/uploadresurs', [AdminController::class , "uploadresurs"]);
Route::get('/deleteresurs/{id}', [AdminController::class , "deleteresurs"]);
Route::get('/updateresurs/{id}', [AdminController::class, 'updateresurs' ]);
Route::post('/updatedresurs/{id}', [AdminController::class, 'updatedresurs' ]);
Route::get('/searchresurs', [AdminController::class, 'searchresurs' ]);

//Resurspage

Route::get('/resurspage', [HomeController::class , "resurspage"]);
































Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
