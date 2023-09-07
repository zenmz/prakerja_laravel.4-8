<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return '<h1>Hello ini laravel saya</h1>';
});

Route::get('hello/{nilai}', function ($nilai) {
    return 'Nilai yang saya dapatkan adalah ' . $nilai;
});

Route::get('tambah/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil penjumlahan adalah ' . $nilai1 + $nilai2;
});
Route::get('kurang/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil pengurangan adalah ' . $nilai1 - $nilai2;
});
Route::get('kali/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil perkalian adalah ' . $nilai1 * $nilai2;
});
Route::get('bagi/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil pembagian adalah ' . $nilai1 / $nilai2;
});

Route::get('tampilan', function () {
    $title = 'Halaman Tampilan';
    $data = ['meja', 'buku', 'kursi', 'lampu', 'pintu'];
    return view('coba', compact('title', 'data'));
    // return view('coba', [
    //     'title' => 'Halaman Tampilan',
    //     'data' => ['meja', 'buku', 'kursi']
    // ]);
});

Route::get('template', function () {
    return view('template');
});

Route::get('tampilantable', function () {
    $data = ['lampu', 'buku', 'meja', 'kursi', 'laptop', 'pensil'];
    return view('table', compact('data'));
});

Route::resource('siswa', SiswaController::class)->middleware(['auth', 'admin']);

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahdata', [SiswaController::class, 'create']);

// Route::get('users/{id}', function ($id) {});
// Route::post('users/{id}', function ($id) {});
// Route::put('users/{id}', function ($id) {});
// Route::delete('users/{id}', function ($id) {});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
