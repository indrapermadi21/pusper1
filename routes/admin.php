<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'admin page';
// })->name('admin.dashboard');

Route::get('/',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.dashboard');