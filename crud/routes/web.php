<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GuruController;
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

//agenda
Route::get('/agenda', [AgendaController::class,'index'])->name('agenda');

Route::get('/tambahagenda', [AgendaController::class,'tambahagenda'])->name('tambahagenda');

Route::post('/insertdata', [AgendaController::class,'store'])->name('insertdata');

Route::get('/tampilan/{id}', [AgendaController::class,'tampilan'])->name('tampilan');

Route::put('/updatedata/{id}', [AgendaController::class,'update'])->name('updatedata');

Route::delete('/deletedata/{id}', [AgendaController::class,'destroy'])->name('deletedata');
//end agenda

//kelas
Route::get('/kelas', [KelasController::class,'index'])->name('kelas');

Route::get('/tambahkelas', [KelasController::class,'tambahkelas'])->name('tambahkelas');

Route::post('/insertdatakelas', [KelasController::class,'store'])->name('insertdatakelas');

Route::get('/tampilankelas/{id}', [KelasController::class,'tampilankelas'])->name('tampilankelas');

Route::put('/updatedatakelas/{id}', [KelasController::class,'update'])->name('updatedatakelas');

Route::delete('/deletedatakelas/{id}', [KelasController::class,'destroy'])->name('deletedatakelas');
//end kelas

// guru
Route::get('/guru', [GuruController::class,'index'])->name('guru');

Route::get('/tambahguru', [GuruController::class,'tambahguru'])->name('tambahguru');

Route::post('/insertdataguru', [GuruController::class,'store'])->name('insertdataguru');

Route::get('/tampilanguru/{id}', [GuruController::class,'tampilanguru'])->name('tampilanguru');

Route::put('/updatedataguru/{id}', [GuruController::class,'update'])->name('updatedataguru');

Route::delete('/deletedataguru/{id}', [GuruController::class,'destroy'])->name('deletedataguru');
// end guru

//multi-user


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
Route::get('guruu', function () { return view('guruu'); })->middleware(['checkRole:guruu,admin']);
