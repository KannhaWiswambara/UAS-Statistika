<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PdfController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('/student-data', AdminController::class);
    Route::get('/export', [PdfController::class, 'create_pdf'])->name('exportPDF');
    Route::get('/export_excel', [PdfController::class, 'export_excel'])->name('exportExcel');
    Route::get('/import-data', [PdfController::class, 'create'])->name('importData');
    Route::Post('/import_excel', [PdfController::class, 'import_excel'])->name('importExcel');
    Route::get('/', function () {
        return view('welcome');
    });
});

require __DIR__.'/auth.php';
