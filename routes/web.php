<?php

use App\Http\Controllers\RequisitionController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('welcome');
});

// Route to display the requisition form
Route::get('/requisition', [RequisitionController::class, 'create'])->name('requisition.create');

// Route to store the requisition data (POST method for form submission)
Route::post('/requisition', [RequisitionController::class, 'store'])->name('requisition.store');

// Route to preview the stored requisition data
Route::get('/requisition/preview/{id}', [RequisitionController::class, 'preview'])->name('requisition.preview');

// Route to generate and download the PDF for the requisition
Route::get('/requisition/generate-pdf/{id}', [RequisitionController::class, 'generatePDF'])->name('requisition.generate_pdf');

Route::get('/requisition/{id}/download', [RequisitionController::class, 'generatePDF'])->name('requisition.download');
