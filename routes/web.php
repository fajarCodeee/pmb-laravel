<?php

use App\Http\Controllers\Admin\CBTController as AdminCBTController;
use App\Http\Controllers\Admin\DataKelasController;
use App\Http\Controllers\Admin\DataMahasiswaBaruController;
use App\Http\Controllers\Admin\DataProdiController;
use App\Http\Controllers\Admin\DataRekeningController;
use App\Http\Controllers\Admin\GelombangPendaftaranController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\CbtController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', [HomeController::class, 'index']);

// route authentikasi
// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('proses.login');

// logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



// middleware auth
/*
 - cek_login:peserta_cbt => login untuk peserta pmb
 - cek_login:admin => login admin
*/
Route::group(['middleware' => ['auth']], function () {
    // peserta_cbt
    Route::group(['middleware' => ['cek_login:peserta_cbt']], function () {
        // route cbt
        Route::get('/cbt/home', [CbtController::class, 'index']);
        Route::get('/cbt/home/soal-ujian', [CbtController::class, 'soalUjian'])->name('home.soal.ujian');
    });

    // admin
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('/admin', [HomeController::class, 'index'])->name('admin.panel.dashboard');
        Route::get('/admin/home', [HomeController::class, 'index'])->name('admin.panel.dashboard');

        Route::get('/admin/data-mahasiswa-baru', [DataMahasiswaBaruController::class, 'index']);
        Route::get('/admin/daftar-mahasiswa', [MahasiswaController::class, 'index']);
        // export
        Route::get('/admin/daftar-mahasiswa/export', [MahasiswaController::class, 'export']);

        // Gelombang Pendafaran
        Route::resource('/admin/gelombang-pendaftaran', GelombangPendaftaranController::class);

        // Data Kelas
        Route::resource('admin/data-kelas', DataKelasController::class);
        Route::resource('admin/data-program-studi', DataProdiController::class);

        // cbt
        Route::get('/admin/statistik-cbt', [AdminCBTController::class,  'statistikCbt'])->name('statistik.cbt');
        Route::get('/admin/data-peserta', [AdminCBTController::class, 'dataPeseta'])->name('data.peserta');


        Route::get('/admin/kelola-ujain-cbt', [AdminCBTController::class, 'kelolaUjianCbt'])->name('kelola.ujian.cbt');
        Route::get('/admin/kelola-ujian-cbt/create-cbt', [AdminCBTController::class, 'create'])->name('kelola-ujian-cbt.create');
        Route::post('/admin/kelola-ujian-cbt', [AdminCBTController::class, 'store_soal'])->name('kelola-ujian-cbt.store');
        Route::get('/admin/kelola-ujian-cbt/{id}', [AdminCBTController::class, 'show_soal'])->name('kelola-ujian-cbt.show');

        // update status pmb
        Route::post('/admin/update-status/pmb/{id}', [DataMahasiswaBaruController::class, 'acceptStatus'])->name('admin.update.status.pmb');
        Route::put('/admin/reject/pmb/{id}', [DataMahasiswaBaruController::class, 'rejectStatus'])->name('admin.update.status.pmb');
        // lihat detail data calon mahasiswa
        Route::get('admin/show-data-cmb/{id}', [DataMahasiswaBaruController::class, 'showData'])->name('admin.show.data-cmb');

        // menu rekening
        Route::resource('admin/data-rekening', DataRekeningController::class)->only(['index', 'store', 'show', 'update', 'destroy']);
        // Route::post('/admin/data-rekening', [DataRekeningController::class, 'store'])->name('data-rekening.store');
    });
});

// form pendaftaran
Route::get('/form-pendaftaran', [FormController::class, 'index'])->name('form.pendaftaran.welcome');

Route::get('/form-data-diri', [FormController::class, 'formDataDiri'])->name('form.pendaftaran.data-diri');
Route::post('/post-form-data-diri', [FormController::class, 'postDataDiri'])->name('post.data.diri');

Route::get('/form-alamat', [FormController::class, 'formAlamat'])->name('form.pendaftaran.alamat');
Route::post('/form-alamat', [FormController::class, 'postFormAlamat'])->name('post.alamat');

Route::get('/form-data-orangtua', [FormController::class, 'formOrangTua'])->name('form.pendaftaran.data-orangtua');
Route::post('/form-data-orangtua', [FormController::class, 'postFormOrangTua'])->name('post.data-orangtua');

Route::get('/form-data-prodi', [FormController::class, 'formProdi'])->name('form.pendaftaran.prodi');
Route::post('/form-data-prodi', [FormController::class, 'postFormProdi'])->name('post.pendaftaran.prodi');

Route::get('/form-administrasi', [FormController::class, 'formAdministrasi'])->name('form.pendaftaran.administrasi');
Route::post('/form-administrasi', [FormController::class, 'postFormAdministrasi'])->name('post.pendaftaran.administrasi');

Route::get('/form/p/{id}', [FormController::class, 'showForm']);
Route::post('/form/p/post', [FormController::class, 'postTf'])->name('post.tf');

Route::get('/form/pendaftaran/pesan', [FormController::class, 'message']);
