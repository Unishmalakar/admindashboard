<?php

use App\Http\Controllers\AddnewController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExcelimportController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// }
Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/excelimport',[ExcelimportController::class,'create']);
    // Route::get('/dashboard',[DashboardController::class,'index']);
    Route::POST('/excelimport',[ExcelimportController::class,'excelimport']);
    Route::delete('/dashboard/delete/{id}',[ExcelimportController::class,'destroy']);
    Route::get('/excel/export',[ExcelimportController::class,'export']);
    Route::get('/addnew',[AddnewController::class,'create']);
    Route::POST('/addnew/create',[AddnewController::class,'store']);
});

require __DIR__.'/auth.php';
