<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return '
        <h1>Welcome to Student Manager</h1>
        <p>Manage student records easily.</p>
        <a href="/students">Go to Students Page</a>
    ';
});

Route::resource('students', StudentController::class);