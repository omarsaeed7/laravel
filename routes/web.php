<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/* Landing Page Routes */
Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/resume', [MainController::class, 'resume'])->name('main.resume');
Route::get('/projects', [MainController::class, 'projects'])->name('main.projects');
Route::get('/contact', [MainController::class, 'contact'])->name('main.contact');
Route::post('/contact', [MainController::class, 'contactUs'])->name('main.contactUs');
/* ->> End Of Landing Page Routes <<- */

/* Full Form Attributes Manipulating Routes */
Route::get('/form1', [FormController::class, 'form1'])->name('form.form1');
Route::post('/form1', [FormController::class, 'form1Data'])->name('form.form1Data');
/* ->> End Full Form Attributes Manipulating Routes <<- */

/* Uploading Files Form Routes */
Route::get('/form4', [FormController::class, 'form4'])->name('forms.form4');
Route::post('/form4', [FormController::class, 'form4Data'])->name('forms.form4Data');
/* ->> End Uploading Files Form Routes <<- */

/* Sending Mail Routes */
Route::get('/contactme', [FormController::class, 'contactme'])->name('forms.contactme');
Route::post('/contactme', [FormController::class, 'contactmeData'])->name('forms.contactmeData');
/* ->> End Sending Mail Routs <<- */


//
