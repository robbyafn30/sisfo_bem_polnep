<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin/beranda/',[AdminController::class,'Beranda'])->name('Dashboard')->middleware('auth');

/* Admin - Data User */
    Route::get('/admin/data-user',[AdminController::class,'DataUser'])->name('Data-User')->middleware('auth');
        // Update
            Route::post('/admin/data-user/{id}',[AdminController::class,'UpdateUser']);
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Admin - Data Password */
    Route::get('/admin/ubah-password',[AdminController::class,'UbahPassword'])->name('Ubah-Password')->middleware('auth');
        // Update
            Route::post('/admin/ubah-password/{id}',[AdminController::class,'UpdatePassword']);
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Admin - Data Surat - Surat Masuk */
    Route::get('/admin/data-surat/surat-masuk',[AdminController::class,'SuratMasuk'])->name('Surat-Masuk')->middleware('auth');
        // Create
            Route::post('/admin/data-surat/surat-masuk',[AdminController::class,'TambahSuratMasuk'])->name('Tambah-Surat-Masuk');
        // Update
            Route::post('/admin/data-surat/surat-masuk/{id}',[AdminController::class,'UpdateSuratMasuk'])->name('Update-Surat-Masuk');
        // Delete
            Route::get('/admin/data-surat/surat-masuk/delete/{id}',[AdminController::class,'DeleteSuratMasuk'])->name('Delete-Surat-Masuk');
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Admin - Data Surat - Surat Keluar */
    Route::get('/admin/data-surat/surat-keluar',[AdminController::class,'SuratKeluar'])->name('Surat-Keluar')->middleware('auth');
        // Create
        Route::post('/admin/data-surat/surat-keluar',[AdminController::class,'TambahSuratKeluar'])->name('Tambah-Surat-Keluar');
        // Update
            Route::post('/admin/data-surat/surat-keluar/{id}',[AdminController::class,'UpdateSuratKeluar'])->name('Update-Surat-Keluar');
        // Delete
            Route::get('/admin/data-surat/surat-keluar/delete/{id}',[AdminController::class,'DeleteSuratKeluar'])->name('Delete-Surat-Keluar');
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Admin - Inventaris */
    Route::get('/admin/inventaris',[AdminController::class,'DataBarang'])->name('Data-Barang');
        // Create
            Route::post('/admin/inventaris',[AdminController::class,'TambahBarang'])->name('Tambah-Barang');
        // Update
            Route::post('/admin/inventaris/{id}',[AdminController::class,'UpdateBarang'])->name('Update-Barang');
        // Delete
        Route::get('/admin/inventaris/delete/{id}',[AdminController::class,'DeleteBarang'])->name('Delete-Barang');
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Admin - Dokumentasi Kegiatan */
    Route::get('/admin/beranda/dokumentasi-kegiatan',[AdminController::class,'DokumentasiKegiatan'])->name('Dokumentasi-Kegiatan')->middleware('auth');

        // Create
            Route::post('/admin/beranda/dokumentasi-kegiatan',[AdminController::class,'TambahDokumentasi'])->name('Tambah-Dokumentasi');
        // Update
            Route::post('/admin/beranda/dokumentasi-kegiatan/{id}',[AdminController::class,'UpdateDokumentasi'])->name('Update-Dokumentasi');
        // Delete
            Route::get('/admin/beranda/dokumentasi-kegiatan/delete/{id}',[AdminController::class,'DeleteDokumentasi'])->name('Delete-Dokumentasi');
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Admin - Instagram */
    Route::get('/admin/beranda/instagram',[AdminController::class,'Instagram'])->name('Instagram')->middleware('auth');

        // Create
            Route::post('/admin/beranda/instagram',[AdminController::class,'TambahInstagram']);
        // Update
            Route::post('/admin/beranda/instagram/{id}',[AdminController::class,'UpdateInstagram']);
        // Delete
            Route::get('/admin/beranda/instagram/delete/{id}',[AdminController::class,'DeleteInstagram']);
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */


/* Admin - Berita Terkini */
    Route::get('/admin/berita-terkini',[AdminController::class,'BeritaTerkini'])->name('Berita-Terkini')->middleware('auth');

        // Create
            Route::post('/admin/berita-terkini',[AdminController::class,'TambahBerita'])->name('Tambah-Berita');

        // Update
            Route::post('/admin/berita-terkini/{id}',[AdminController::class,'UpdateBerita'])->name('Update-Berita');

        // Delete
            Route::get('/admin/berita-terkini/delete/{id}',[AdminController::class,'DeleteBerita'])->name('Delete-Berita');

/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Admin - Arsipan Kajian */
    Route::get('/admin/arsipan-kajian',[AdminController::class,'ArsipanKajian'])->name('Arsipan-Kajian')->middleware('auth');

            // Create
                Route::post('/admin/arsipan-kajian',[AdminController::class,'TambahArsipan'])->name('Tambah-Arsipan');
            // Update
                Route::post('/admin/arsipan-kajian/{id}',[AdminController::class,'UpdateArsipan'])->name('Update-Arsipan');
            // Delete
                Route::get('/admin/arsipan-kajian/delete/{id}',[AdminController::class,'DeleteArsipan'])->name('Delete-Arsipan');
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Admin - Laporan Keuangan - Pemasukan */
    Route::get('/admin/laporan-keuangan/pemasukan',[AdminController::class,'LaporanPemasukan'])->name('Laporan-Pemasukan')->middleware('auth');

        // Create
            Route::post('/admin/laporan-keuangan/pemasukan',[AdminController::class,'TambahPemasukan'])->name('Tambah-Pemasukan');
        // Update
            Route::post('/admin/laporan-keuangan/pemasukan/{id}',[AdminController::class,'UpdatePemasukan'])->name('Update-Pemasukan');
        // Delete
            Route::get('/admin/laporan-keuangan/pemasukan/delete/{id}',[AdminController::class,'DeletePemasukan'])->name('Delete-Pemasukan');
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Admin - Laporan Keuangan - Pengeluaran */
    Route::get('/admin/laporan-keuangan/pengeluaran',[AdminController::class,'LaporanPengeluaran'])->name('Laporan-Pengeluaran')->middleware('auth');

        // Create
            Route::post('/admin/laporan-keuangan/pengeluaran',[AdminController::class,'TambahPengeluaran'])->name('Tambah-Pengeluaran');
        // Update
            Route::post('/admin/laporan-keuangan/pengeluaran/{id}',[AdminController::class,'UpdatePengeluaran'])->name('Update-Pengeluaran');
        // Delete
            Route::get('/admin/laporan-keuangan/pengeluaran/delete/{id}',[AdminController::class,'DeletePengeluaran'])->name('Delete-Pengeluaran');
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Admin - Data Pengurus */
    Route::get('/admin/data-pengurus',[AdminController::class,'DataPengurus'])->name('Data-Pengurus')->middleware('auth');
        // Create
            Route::post('/admin/data-pengurus/kepengurusan',[AdminController::class,'TambahKepengurusan'])->name('TambahKepengurusan');
        // Update
            Route::post('/admin/data-pengurus/kepengurusan/{id}',[AdminController::class,'UpdateKepengurusan'])->name('UpdateKepengurusan');;
        // Delete
            Route::get('/admin/data-pengurus/kepengurusan/delete/{id}',[AdminController::class,'DeleteKepengurusan'])->name('DeleteKepengurusan');;

/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Admin - Layanan - LaporJak*/
    Route::get('/admin/layanan/laporjak',[AdminController::class,'LaporJak'])->name('Admin-LaporJak')->middleware('auth');

        // Delete
            Route::get('/admin/layanan/laporjak/delete/{id}',[AdminController::class,'DeleteLaporJak'])->name('Delete-Laporjak');

/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Admin - Layanan - TanyaJak */
    Route::get('/admin/layanan/tanyajak',[AdminController::class,'TanyaJak'])->name('Admin-TanyaJak')->middleware('auth');

        // Delete
            Route::get('/admin/layanan/tanyajak/delete/{id}',[AdminController::class,'DeleteTanyaJak'])->name('Delete-Tanyajak');

/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Admin - Layanan - Kritik Saran */
    Route::get('/admin/layanan/kritik-saran',[AdminController::class,'KritikSaran'])->name('Admin-KritikSaran')->middleware('auth');

        // Delete
            Route::get('/admin/layanan/kritik-saran/delete/{id}',[AdminController::class,'DeleteKritikSaran'])->name('Delete-KritikSaran');

/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */


Route::get('/admin/tes/{id}',[AdminController::class,'Tes']);


Route::get('/beranda',[UserController::class,'Beranda']);
Route::get('/tentang-kami',[UserController::class,'TentangKami']);
Route::get('/arsipan-kajian',[UserController::class,'ArsipanKajian']);
Route::get('/berita-terkini',[UserController::class,'BeritaTerkini']);
Route::get('/hmj',[UserController::class,'HMJ']);
Route::get('/ukm',[UserController::class,'UKM']);
Route::get('/laporan-keuangan',[UserController::class,'LaporanKeuangan']);
Route::get('/kepengurusan',[UserController::class,'Kepengurusan']);

// Route::get('/detail',[UserController::class,'DetailBerita']);

/* User - Layanan */
    Route::get('/layanan',[UserController::class,'Layanan'])->name('Lapor-Jak');  
        // Create
            Route::post('layanan/laporjak',[UserController::class,'TambahLaporjak'])->name('Tambah-LaporJak');
        // Create
            Route::post('layanan/tanyajak',[UserController::class,'TambahTanyajak'])->name('Tambah-TanyaJak');
        // Create
            Route::post('layanan/kritiksaran',[UserController::class,'TambahKritiksaran'])->name('Tambah-KritikSaran');
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

Route::controller(LoginController::class)->group(function(){
    Route::get('/admin/login','Login')->name('Login');  
    Route::post('/admin/login','LoginProses');
    Route::get('/logout','Logout')->name('Logout');
});


