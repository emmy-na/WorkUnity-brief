<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;



// Liste des employés
Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');

// Formulaire pour créer un nouvel employé
Route::get('/create', [EmployeeController::class, 'create'])->name('employees.create');

// Envoi du formulaire de création
Route::post('/store', [EmployeeController::class, 'store'])->name('employees.store');

// Formulaire pour modifier un employé existant
Route::get('/edit/{employee}', [EmployeeController::class, 'edit'])->name('employees.edit');

// Envoi du formulaire de modification
Route::put('/update/{employee}', [EmployeeController::class, 'update'])->name('employees.update');

// Suppression d’un employé
Route::delete('/delete/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

Route::get('/{employee}', [EmployeeController::class, 'show'])->name('employees.show');
