<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', function () {
    return view('admin.siswa');
})->middleware(['auth', 'verified'])->name('siswa');

Route::get('/guru', function () {
    return view('admin.guru');
})->middleware(['auth', 'verified'])->name('guru');

Route::get('/rombel', function () {
    return view('admin.rombel');
})->middleware(['auth', 'verified'])->name('rombel');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route Absensi
Route::get('/absensi_laporan', function () {
    return view('admin.absensi_laporan');
})->middleware(['auth', 'verified'])->name('absensi_laporan');

Route::get('/absensi_karyawan', function () {
    return view('admin.absensi_karyawan');
})->middleware(['auth', 'verified'])->name('absensi_karyawan');

Route::get('absensi_riwayat', function () {
    return view('admin.absensi_riwayat');
})->middleware(['auth', 'verified'])->name('absensi_riwayat');




// Route Homebase
Route::get('/homebase_leaderboard', function () {
    return view('admin.homebase_leaderboard');
})->middleware(['auth', 'verified'])->name('homebase_leaderboard');

Route::get('/homebase_merah', function () {
    return view('admin.homebase_merah');
})->middleware(['auth', 'verified'])->name('homebase_merah');

Route::get('/homebase_kuning', function () {
    return view('admin.homebase_kuning');
})->middleware(['auth', 'verified'])->name('homebase_kuning');

Route::get('/homebase_hijau', function () {
    return view('admin.homebase_hijau');
})->middleware(['auth', 'verified'])->name('homebase_hijau');

Route::get('/homebase_biru', function () {
    return view('admin.homebase_biru');
})->middleware(['auth', 'verified'])->name('homebase_biru');

Route::get('/homebase_ungu', function () {
    return view('admin.homebase_ungu');
})->middleware(['auth', 'verified'])->name('homebase_ungu');

Route::get('/form_homebase', function () {
    return view('admin.form_homebase');
})->middleware(['auth', 'verified'])->name('form_homebase');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
