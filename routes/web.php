<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Row;

Route::get('/', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::get('logout', function (Request $request) {
    Auth::logout(); 
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login');
})->name('logout')->middleware('auth');

Route::middleware(['auth'])->group(function () {

    Route::get('dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::view('admin/manajemen-siswa/index', 'admin.manajemen-siswa.index')->name('admin.manajemen-siswa.index');
    Route::view('admin/manajemen-guru/index', 'admin.manajemen-guru.index')->name('admin.manajemen-guru.index');
    Route::view('admin/manajemen-jadwal/index', 'admin.manajemen-jadwal.index')->name('admin.manajemen-jadwal.index');
    Route::view('admin/manajemen-kelas/index', 'admin.manajemen-kelas.index')->name('admin.manajemen-kelas.index');
    Route::view('admin/manajemen-nilai-rapot/index', 'admin.manajemen-nilai-rapot.index')->name('admin.manajemen-nilai-rapot.index');
    Route::view('admin/manajemen-pembayaran-spp/index', 'admin.manajemen-pembayaran-spp.index')->name('admin.manajemen-pembayaran-spp.index');
    Route::view('admin/pengaturan/index', 'admin.pengaturan.index')->name('admin.pengaturan.index');
    Route::view('admin/forum-umum/index', 'admin.forum-umum.index')->name('admin.forum-umum.index');

    // Route::get('admin/manajemen-siswa/edit/{id}', function ($id) {
    //     return view('admin.manajemen-siswa.edit', ['id' => $id]);
    // })->name('admin.manajemen-siswa.edit');
    // Route::get('admin/manajemen-siswa/create', function () {
    //     return view('admin.manajemen-siswa.create');
    // })->name('admin.manajemen-siswa.create');
});


