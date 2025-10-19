<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('homepage');

// Default dashboard untuk user biasa
Route::get('/dashboard', [DashboardController::class, 'userDashboard'])
    ->middleware(['auth', 'verified', 'role:user'])
    ->name('dashboard');

// Dashboard untuk admin
Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])
    ->middleware(['auth', 'verified', 'role:admin,super_admin'])
    ->name('admin.dashboard');

// Dashboard untuk super admin
Route::get('/super-admin/dashboard', [DashboardController::class, 'superAdminDashboard'])
    ->middleware(['auth', 'verified', 'role:super_admin'])
    ->name('super-admin.dashboard');

// Routes yang memerlukan authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes untuk admin (admin dan super_admin bisa akses)
Route::middleware(['auth', 'role:admin,super_admin'])->group(function () {
    // Route admin lainnya bisa ditambahkan di sini
    Route::get('/admin/users', function() {
        return redirect()->route('admin.dashboard');
    })->name('admin.users');
});

// Routes khusus untuk super admin saja
Route::middleware(['auth', 'role:super_admin'])->group(function () {
    // Route super admin lainnya bisa ditambahkan di sini
    Route::get('/super-admin/settings', function() {
        return redirect()->route('super-admin.dashboard');
    })->name('super-admin.settings');
});

require __DIR__.'/auth.php';
