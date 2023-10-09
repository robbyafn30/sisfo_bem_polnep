<?php

namespace App\Http\Controllers;
use Carbon\Carbon;


use App\Models\Ukm;
use App\Models\Psdm;
use App\Models\User;
use App\Models\Agama;
use App\Models\Dagri;
use App\Models\Ekraf;
use App\Models\Kokeu;
use App\Models\Kosek;
use App\Models\Lugri;
use App\Models\Surat;
use App\Models\Barang;
use App\Models\Presma;
use App\Models\Sospol;
use App\Models\Jabatan;
use App\Models\Jurusan;
use App\Models\Kominfo;
use App\Models\Laporan;
use App\Models\Layanan;
use App\Models\Laporjak;
use App\Models\Tanyajak;
use App\Models\Instagram;
use App\Models\Kementerian;
use App\Models\Kritiksaran;
use App\Models\Kepengurusan;
use Illuminate\Http\Request;
use App\Models\Arsipankajian;
use App\Models\Beritaterkini;
use App\Models\Dokumentasikegiatan;


class AdminController extends Controller
{
    public function Beranda () {
        return view ('admin.beranda');
    }

/* Data User */
    public function DataUser () {
        $data_user = User::all();
        return view ('admin.data-user' , ['user' => $data_user]);
    }
        // Update
            public function UpdateUser(Request $request, $id) {
                $data_user = User::find($id);
                $data_user->update($request->all());

                $data_user->password = bcrypt($request->password);
                $data_user->save();

                return redirect()->route("Data-User")->with('success','Data Berhasil di Update');
            }
        // End
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Ubah Password */
    public function UbahPassword () {
        return view ('admin.data-password');
    }

        // Update
            public function UpdatePassword(Request $request, $id) {
                $data_password = User::find($id);
                $data_password->update($request->all());

                $data_password->password = bcrypt($request->password);
                $data_password->save();

                return redirect()->route("Ubah-Password")->with('success','Data Berhasil di Update');
            }
        // End

/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */


/* Surat Masuk */
    public function SuratMasuk () {
        if (checkRole(2)) {
            $data_surat = Surat::where('keterangan', 'Surat Masuk')->get();
            return view ('admin.data-surat.surat-masuk', ['surat' => $data_surat]);
        } else {
            return to_route('Dashboard');
        }
    }
        // Create
            public function TambahSuratMasuk(Request $request) {
                $rand = date('sHiydm');
                $foto = $rand.'-'.$request->file('dokumen')->getClientOriginalName();

                $data_surat = Surat::create($request->all());
                
                if($request -> hasFile('dokumen')){
                    $request-> file('dokumen')->move('assets/DataSurat/SuratMasuk', $foto);
                    $data_surat->dokumen = $foto;
                    $data_surat->save();
                }
                return redirect()->route("Surat-Masuk")->with('success','Data Berhasil di Tambah');
            }
         // End

        // Update
        
            public function UpdateSuratMasuk(Request $request, $id) {
                $data_surat = Surat::find($id);
                // $data_surat->update($request->all());

                // Update Foto
                    $foto = $data_surat->dokumen;
                    if ($request->file('dokumen')) {
                        deleteFile("assets/DataSurat/SuratMasuk/", $foto);
                        $rand = date('sHiydm');
                        $foto = $rand.'-'.$request->file('dokumen')->getClientOriginalName();
                        if($request -> hasFile('dokumen')){
                            $request-> file('dokumen')->move('assets/DataSurat/SuratMasuk', $foto);
                        }
                    }
                    $data_surat->nomor = $request->nomor;
                    $data_surat->subjek = $request->subjek;
                    $data_surat->perihal = $request->perihal;
                    $data_surat->tgl_surat = $request->tgl_surat;
                    $data_surat->tgl_ket_surat = $request->tgl_ket_surat;
                    $data_surat->dokumen = $foto;
                    $data_surat->save();

                // Update Foto End

                return redirect()->route("Surat-Masuk")->with('success','Data Berhasil di Update');
            }
        // End


        // Delete
            public function DeleteSuratMasuk($id) {
                $data_surat = Surat::find($id);
                deleteFile("assets/DataSurat/SuratMasuk/", $data_surat->dokumen);
                $data_surat->delete();
                
                return redirect()->route("Surat-Masuk");
            }
        // End
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Surat Keluar */
    public function SuratKeluar () {
        if (checkRole(2)) {
            $data_surat = Surat::where('keterangan', 'Surat Keluar')->get();
            return view ('admin.data-surat.surat-keluar', ['surat' => $data_surat]);
        } else {
            return to_route('Dashboard');
        }
    }
        // Create
            public function TambahSuratKeluar(Request $request) {
                $rand = date('sHiydm');
                $foto = $rand.'-'.$request->file('dokumen')->getClientOriginalName();

                $data_surat = Surat::create($request->all());
                
                if($request -> hasFile('dokumen')){
                    $request-> file('dokumen')->move('assets/DataSurat/SuratKeluar', $foto);
                    $data_surat->dokumen = $foto;
                    $data_surat->save();
                }
                return redirect()->route("Surat-Keluar")->with('success','Data Berhasil di Tambah');
            }
        // End

        // Update
            public function UpdateSuratKeluar(Request $request, $id) {
                $data_surat = Surat::find($id);
                // $data_surat->update($request->all());

                // Update Foto
                    $foto = $data_surat->dokumen;
                    if ($request->file('dokumen')) {
                        deleteFile("assets/DataSurat/SuratKeluar/", $foto);
                        $rand = date('sHiydm');
                        $foto = $rand.'-'.$request->file('dokumen')->getClientOriginalName();
                        if($request -> hasFile('dokumen')){
                            $request-> file('dokumen')->move('assets/DataSurat/SuratKeluar', $foto);
                        }
                    }
                    $data_surat->nomor = $request->nomor;
                    $data_surat->subjek = $request->subjek;
                    $data_surat->perihal = $request->perihal;
                    $data_surat->tgl_surat = $request->tgl_surat;
                    $data_surat->tgl_ket_surat = $request->tgl_ket_surat;
                    $data_surat->dokumen = $foto;
                    $data_surat->save();
                // Update Foto End

                return redirect()->route("Surat-Keluar")->with('success','Data Berhasil di Update');
            }
        // End

        // Delete
            public function DeleteSuratKeluar($id) {
                $data_surat = Surat::find($id);
                deleteFile("assets/DataSurat/SuratKeluar/", $data_surat->dokumen);
                $data_surat->delete();
                
                return redirect()->route("Surat-Masuk");
            }
        // End
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Inventaris */
    public function DataBarang () {
        if (checkRole(2)) {
            $data_barang = Barang::all();
            return view ('admin.inventaris', ['barang' => $data_barang]);
        } else {
            return to_route('Dashboard');
        }

    }
        // Create
            public function TambahBarang (Request $request) {
                Barang::create($request->all());
                return redirect()->route("Data-Barang")->with('success','Data Berhasil di Tambah');
            }
        // End

        // Update
            public function UpdateBarang(Request $request, $id) {
                $data_barang = Barang::find($id);
                $data_barang->update($request->all());

                return redirect()->route("Data-Barang")->with('success','Data Berhasil di Update');
            }
        // End

        // Delete
            public function DeleteBarang($id) {
                $data_barang = Barang::find($id);
                $data_barang->delete();
                
                return redirect()->route("Data-Barang");
            }
        // End
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */
  
/* Dokumentasi Kegiatan */
    public function DokumentasiKegiatan () {
        if (checkRole(4)) {
            $data_dokumentasi_kegiatan = Dokumentasikegiatan::all();
            return view ('admin.beranda.dokumentasi-kegiatan', ['dokumentasikegiatan' => $data_dokumentasi_kegiatan]);
        } else {
            return to_route('Dashboard');
        }
    }
        // Create
            public function TambahDokumentasi (Request $request) {
                $rand = date('sHiydm');
                $foto = $rand.'-'.$request->file('foto_kegiatan')->getClientOriginalName();

                $data_dokumentasi_kegiatan = Dokumentasikegiatan::create($request->all());
                
                if($request -> hasFile('foto_kegiatan')){
                    $request-> file('foto_kegiatan')->move('assets/DokumentasiKegiatan/', $foto);
                    $data_dokumentasi_kegiatan->foto_kegiatan = $foto;
                    $data_dokumentasi_kegiatan->save();
                }
                return redirect()->route("Dokumentasi-Kegiatan")->with('success','Data Berhasil di Tambah');
            }
        // End

        // Update
            public function UpdateDokumentasi(Request $request, $id) {
                $data_dokumentasi_kegiatan = Dokumentasikegiatan::find($id);
                // $data_dokumentasi_kegiatan->update($request->all());

                // Update Foto
                    $foto = $data_dokumentasi_kegiatan->foto_kegiatan;
                    if ($request->file('foto_kegiatan')) {
                        deleteFile("assets/DokumentasiKegiatan/", $foto);
                        $rand = date('sHiydm');
                        $foto = $rand.'-'.$request->file('foto_kegiatan')->getClientOriginalName();
                        if($request -> hasFile('foto_kegiatan')){
                            $request-> file('foto_kegiatan')->move('assets/DokumentasiKegiatan/', $foto);
                        }
                    }
                    $data_dokumentasi_kegiatan->nama = $request->nama;
                    $data_dokumentasi_kegiatan->tanggal = $request->tanggal;
                    $data_dokumentasi_kegiatan->foto_kegiatan = $foto;
                    $data_dokumentasi_kegiatan->save();
                // Update Foto End

                return redirect()->route("Dokumentasi-Kegiatan")->with('success','Data Berhasil di Update');
            }
        // End

         // Delete
            public function DeleteDokumentasi($id) {
                $data_dokumentasi_kegiatan = Dokumentasikegiatan::find($id);
                deleteFile("assets/DokumentasiKegiatan/", $data_dokumentasi_kegiatan->foto_kegiatan);
                $data_dokumentasi_kegiatan->delete();
                
                return redirect()->route("Dokumentasi-Kegiatan");
            }
        // End

/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Instagram */
    public function Instagram () {
        if (checkRole(4)) {
            $data_instagram = Instagram::all();
            return view ('admin.beranda.instagram', ['instagram' => $data_instagram]);
        } else {
            return to_route('Dashboard');
        }
    }
        // Create
            public function TambahInstagram (Request $request) {
                Instagram::create($request->all());
                return redirect()->route("Instagram")->with('success','Data Berhasil di Tambah');
            }
        // End

        // Update
            public function UpdateInstagram(Request $request, $id) {
                $data_instagram = Instagram::find($id);
                $data_instagram->update($request->all());

                return redirect()->route("Instagram")->with('success','Data Berhasil di Update');
            }
        // End

        // Delete
            public function DeleteInstagram($id) {
                $data_instagram = Instagram::find($id);
                $data_instagram->delete();
                
                return redirect()->route("Instagram");
            }
        // End
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Berita Terkini */
    public function Beritaterkini () {
        if (checkRole(4)) {
            $data_berita_terkini = Beritaterkini::all();
            return view ('admin.berita-terkini', ['beritaterkini' => $data_berita_terkini]);
        } else {
            return to_route('Dashboard');
        }
    }
        // Create
            public function TambahBerita (Request $request) {
                $rand = date('sHiydm');
                $foto = $rand.'-'.$request->file('foto_berita')->getClientOriginalName();

                $data_berita_terkini = Beritaterkini::create($request->all());
                
                if($request -> hasFile('foto_berita')){
                    $request-> file('foto_berita')->move('assets/FotoBerita/', $foto);
                    $data_berita_terkini->foto_berita = $foto;
                    $data_berita_terkini->save();
                }
                return redirect()->route("Berita-Terkini")->with('success','Data Berhasil di Tambah');
            }
        // End

        // Update
            public function UpdateBerita(Request $request, $id) {
                $data_berita_terkini = Beritaterkini::find($id);
                // $data_berita_terkini->update($request->all());

                // Update Foto
                    $foto = $data_berita_terkini->foto_berita;
                    if ($request->file('foto_berita')) {
                        deleteFile("assets/FotoBerita/", $foto);
                        $rand = date('sHiydm');
                        $foto = $rand.'-'.$request->file('foto_berita')->getClientOriginalName();

                        if($request -> hasFile('foto_berita')){
                            $request-> file('foto_berita')->move('assets/FotoBerita/', $foto);
                        }
                    }
                    $data_berita_terkini->judul_berita = $request->judul_berita;
                    $data_berita_terkini->narasi_berita = $request->narasi_berita;
                    $data_berita_terkini->foto_berita = $foto;
                    $data_berita_terkini->save();
                // Update Foto End

                return redirect()->route("Berita-Terkini")->with('success','Data Berhasil di Update');
            }
        // End

        // Delete
            public function DeleteBerita($id) {
                $data_berita_terkini = Beritaterkini::find($id);
                deleteFile("assets/FotoBerita/", $data_berita_terkini->foto_berita);
                $data_berita_terkini->delete();
                
                return redirect()->route("Berita-Terkini");
            }
        // End

/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */
   
/* Arsipan Kajian */     
    public function ArsipanKajian () {
        if (checkRole(4)) {
            $data_arsipan_kajian = Arsipankajian::all();
            return view ('admin.arsipan-kajian', ['arsipankajian' => $data_arsipan_kajian]);
        } else {
            return to_route('Dashboard');
        }
    }

        // Create
            public function TambahArsipan (Request $request) {
                $rand = date('sHiydm');
                $foto = $rand.'-'.$request->file('thumbnail')->getClientOriginalName();
                $dokumen = $rand.'-'.$request->file('dokumen')->getClientOriginalName();

                $data_arsipan_kajian = Arsipankajian::create($request->all());
                
                if($request -> hasFile('thumbnail')){
                    $request-> file('thumbnail')->move('assets/ThumbnailKajian/', $foto);
                    $data_arsipan_kajian->thumbnail = $foto;
                    $data_arsipan_kajian->save();
                }
                if($request -> hasFile('dokumen')){
                    $request-> file('dokumen')->move('assets/DokumenKajian/', $dokumen);
                    $data_arsipan_kajian->dokumen = $dokumen;
                    $data_arsipan_kajian->save();
                }
                return redirect()->route("Arsipan-Kajian")->with('success','Data Berhasil di Tambah');
            }
        // End

        // Update
            public function UpdateArsipan(Request $request, $id) {
                $data_arsipan_kajian = Arsipankajian::find($id);
                // $data_arsipan_kajian->update($request->all());


                // Update Thumbnail & Dokumen
                    $foto = $data_arsipan_kajian->thumbnail;
                    if ($request->file('thumbnail')) {
                        deleteFile("assets/ThumbnailKajian/", $foto);
                        $rand = date('sHiydm');
                        $foto = $rand.'-'.$request->file('thumbnail')->getClientOriginalName();
                        if($request -> hasFile('thumbnail')){
                            $request-> file('thumbnail')->move('assets/ThumbnailKajian/', $foto);
                        }
                    }

                    $dokumen = $data_arsipan_kajian->dokumen;
                    if ($request->file('dokumen')) {
                        deleteFile("assets/DokumenKajian/", $dokumen);
                        $rand = date('sHiydm');
                        $dokumen = $rand.'-'.$request->file('dokumen')->getClientOriginalName();
                        if($request -> hasFile('dokumen')){
                            $request-> file('dokumen')->move('assets/DokumenKajian/', $dokumen);
                        }
                    }
                    $data_arsipan_kajian->judul = $request->judul;
                    $data_arsipan_kajian->thumbnail = $foto;
                    $data_arsipan_kajian->dokumen = $dokumen;
                    $data_arsipan_kajian->save();

                // Update Thumbnail & Dokumen End

                return redirect()->route("Arsipan-Kajian")->with('success'.'Data Berhasil di Update');
            }
        // End

        // Delete
            public function DeleteArsipan($id) {
                $data_arsipan_kajian = Arsipankajian::find($id);
                deleteFile("assets/ThumbnailKajian/", $data_arsipan_kajian->thumbnail);
                deleteFile("assets/DokumenKajian/", $data_arsipan_kajian->dokumen);
                $data_arsipan_kajian->delete();
                
                return redirect()->route("Arsipan-Kajian");
            }
        // End
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Laporan Keuangan - Pemasukan */
    public function LaporanPemasukan () {
        if (checkRole(3)) {
            $data_laporan = Laporan::where('jenis', 'Pemasukan')->get();
            return view ('admin.laporan-keuangan.pemasukan', ['laporan' => $data_laporan]);
        } else {
            return to_route('Dashboard');
        }
    }
        // Create
            public function TambahPemasukan (Request $request) {
                $rand = date('sHiydm');
                $foto = $rand.'-'.$request->file('bukti')->getClientOriginalName();

                $data_laporan = Laporan::create($request->all());
                
                if($request -> hasFile('bukti')){
                    $request-> file('bukti')->move('assets/BuktiLaporanKeuangan/Pemasukan/', $foto);
                    $data_laporan->bukti = $foto;
                    $data_laporan->save();
                }
                return redirect()->route("Laporan-Pemasukan")->with('success','Data Berhasil di Tambah');
            }
        // End

        // Update
            public function UpdatePemasukan(Request $request, $id) {
                $data_laporan = Laporan::find($id);

                // Update Foto
                    $foto = $data_laporan->bukti;
                    if ($request->file('bukti')) {
                        deleteFile("assets/BuktiLaporanKeuangan/Pemasukan/", $foto);
                        $rand = date('sHiydm');
                        $foto = $rand.'-'.$request->file('bukti')->getClientOriginalName();
                        if($request -> hasFile('bukti')){
                            $request-> file('bukti')->move('assets/BuktiLaporanKeuangan/Pemasukan/', $foto);
                        }
                    }
                    $data_laporan->rincian = $request->rincian;
                    $data_laporan->jumlah = $request->jumlah;
                    $data_laporan->keterangan = $request->keterangan;
                    $data_laporan->bukti = $foto;
                    $data_laporan->save();
                // Update Foto End

                return redirect()->route("Laporan-Pemasukan")->with('success','Data Berhasil di Update');
            }
        // End

        // Delete
            public function DeletePemasukan($id) {
                $data_laporan = Laporan::find($id);
                deleteFile("assets/BuktiLaporanKeuangan/Pemasukan/",  $data_laporan->bukti);
                $data_laporan->delete();
                return redirect()->route("Laporan-Pemasukan");
            }
        // End
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Laporan Keuangan - Pengeluaran */
    public function LaporanPengeluaran () {
        if (checkRole(3)) {
            $data_laporan = Laporan::where('jenis', 'Pengeluaran')->get();
            return view ('admin.laporan-keuangan.pengeluaran' , ['laporan' => $data_laporan]);
        } else {
            return to_route('Dashboard');
        }
    }
        // Create
            public function TambahPengeluaran (Request $request) {
                $data_laporan = Laporan::create($request->all());

                $rand = date('sHiydm');
                $foto = $rand.'-'.$request->file('bukti')->getClientOriginalName();
                
                if($request -> hasFile('bukti')){
                    $request-> file('bukti')->move('assets/BuktiLaporanKeuangan/Pengeluaran/', $foto);
                    $data_laporan->bukti = $foto;
                    $data_laporan->save();
                }
                return redirect()->route("Laporan-Pengeluaran")->with('success','Data Berhasil di Tambah');
            }
        // End

        // Update
            public function UpdatePengeluaran (Request $request, $id) {
                $data_laporan = Laporan::find($id);
                // $data_laporan->update($request->all());

                // Update Foto
                    $foto = $data_laporan->bukti;
                    if ($request->file('bukti')) {
                        deleteFile("assets/BuktiLaporanKeuangan/Pengeluaran/", $foto);
                        $rand = date('sHiydm');
                        $foto = $rand.'-'.$request->file('bukti')->getClientOriginalName();
                        if($request -> hasFile('bukti')){
                            $request-> file('bukti')->move('assets/BuktiLaporanKeuangan/Pengeluaran/', $foto);
                        }
                    }
                    $data_laporan->rincian = $request->rincian;
                    $data_laporan->jumlah = $request->jumlah;
                    $data_laporan->keterangan = $request->keterangan;
                    $data_laporan->bukti = $foto;
                    $data_laporan->save();
                // Update Foto End

                return redirect()->route("Laporan-Pengeluaran")->with('success','Data Berhasil di Update');
            }
        // End

        // Delete
            public function DeletePengeluaran ($id) {
                $data_laporan = Laporan::find($id);
                deleteFile("assets/BuktiLaporanKeuangan/Pengeluaran/",  $data_laporan->bukti);
                $data_laporan->delete();
                
                return redirect()->route("Laporan-Pengeluaran");
            }
        // End
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Data Pengurus */
public function DataPengurus() {
    if (checkRole(5)) {
        $kepengurusan = Kepengurusan::get()->sortBy(function ($item) {
            $jabatan_id = $item->jabatan_id;
        
            // Atur urutan berdasarkan jabatan_id yang diinginkan
            switch ($jabatan_id) {
                case 1:
                    return 1;
                case 2:
                    return 2;
                case 3:
                    return 3;
                case 4:
                    return 4;
                case 5:
                    return 5;
                case 6:
                    return 6;
                default:
                    // Jika ada jabatan_id lain yang perlu diatur, tambahkan di sini.
                    return PHP_INT_MAX; // Letakkan di akhir jika tidak ditemukan dalam daftar.
            }
        })->sortBy('kementerian_id');
        
        
        $jurusan = Jurusan::all();
        $jabatan = Jabatan::all();
        $kementerian = Kementerian::all();
        return view ('admin.kepengurusan', compact ('jurusan','jabatan','kementerian','kepengurusan'));
    } else {
        return to_route('Dashboard');
    }
    
}
        // Create
            public function TambahKepengurusan (Request $request) {

                $rules = [
                    'nim' => 'required|max:10',
                    'nama' => 'required|regex:/^[a-zA-Z\s]+$/|min:3',
                    'no_hp' => 'required|numeric',

                ];
                
                $messages = [
                    'nim.required' => 'Kolom NIM wajib diisi.',
                    'nim.max' => 'NIM tidak boleh lebih dari 10 karakter.',
                    'nama.required' => 'Kolom Nama wajib diisi.',
                    'nama.regex' => 'Nama hanya boleh mengandung huruf.',
                    'no_hp.numeric' => 'Nomor HP hanya boleh mengandung angka.',
                ];

                $this->validate($request, $rules, $messages);

                $kepengurusan = Kepengurusan::create($request->all());

                $rand = date('sHiydm');
                $foto = $rand.'-'.$request->file('foto')->getClientOriginalName();

                if($request -> hasFile('foto')){
                    $request-> file('foto')->move('assets/Kepengurusan/', $foto);
                    $kepengurusan->foto = $foto;
                    $kepengurusan->save();
                }

                return redirect()->route("Data-Pengurus")->with('success','Data Berhasil di Tambah');
            }
        // End

        // Update
            public function UpdateKepengurusan(Request $request, $id) {
                $kepengurusan = Kepengurusan::find($id);
                // $kepengurusan->update($request->all());

                // Update Foto
                    $foto = $kepengurusan->foto;
                    if ($request->file('foto')) {
                        deleteFile("assets/Kepengurusan/", $foto);
                        $rand = date('sHiydm');
                        $foto = $rand.'-'.$request->file('foto')->getClientOriginalName();
                        if($request -> hasFile('foto')){
                            $request-> file('foto')->move('assets/Kepengurusan/', $foto);
                        }
                    }
                    $kepengurusan->nama = $request->nama;
                    $kepengurusan->nim = $request->nim;
                    // $kepengurusan->departemen = $request->departemen;
                    $kepengurusan->tanggal_lahir = $request->tanggal_lahir;
                    $kepengurusan->no_hp = $request->no_hp;
                    $kepengurusan->instagram = $request->instagram;
                    $kepengurusan->foto = $foto;
                    $kepengurusan->save();
                // Update Foto End

                return redirect()->route("Data-Pengurus")->with('success','Data Berhasil di Update');
            }
        // End

        // Delete
            public function DeleteKepengurusan($id) {
                $kepengurusan = Kepengurusan::find($id);
                deleteFile("assets/Kepengurusan/", $kepengurusan->foto);
                $kepengurusan->delete();
                
                return redirect()->route("Data-Pengurus");
            }
        // End

/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */

/* Layanan */
    public function LaporJak () {
        if (checkRole(5)) {
            $data_layanan = Layanan::where('jenis', 'LaporJak')->get();
            return view ('admin.layanan.laporjak', ['laporjak' => $data_layanan]);
        } else {
            return to_route('Dashboard');
        }
    }
        // Delete
            public function DeleteLaporJak($id) {
                $data_layanan = Layanan::find($id);
                $data_layanan->delete();
                
                return redirect()->route("Admin-LaporJak")->with('success','Data Berhasil di Tambah');
            }
        // End

            
    public function TanyaJak () {
        if (checkRole(5)) {
            $data_tanya_jak = Layanan::where('jenis', 'TanyaJak')->get();
            return view ('admin.layanan.tanyajak', ['tanyajak' => $data_tanya_jak]);
        } else {
            return to_route('Dashboard');
        }

    }
        // Delete
            public function DeleteTanyaJak($id) {
                $data_tanya_jak = Tanyajak::find($id);
                $data_tanya_jak->delete();
                
                return redirect()->route("Admin-TanyaJak")->with('success','Data Berhasil di Update');
            }
        // End

        public function KritikSaran () {
            if (checkRole(5)) {
                $data_kritik_saran = Layanan::where('jenis', 'Kritik & Saran')->get();
                return view ('admin.layanan.kritiksaran', ['kritiksaran' => $data_kritik_saran]);
            } else {
                return to_route('Dashboard');
            }

        }
            // Delete
                public function DeleteKritikSaran($id) {
                    $data_kritik_saran = Kritiksaran::find($id);
                    $data_kritik_saran->delete();
                    
                    return redirect()->route("Admin-KritikSaran");
                }
            // End
    // End
/* ---------------------------------------------------------------------------------------------------------------------------------------------------- */


    // Percobaan membuat Hyperlink Berita Selengkapnya
    public function Tes ($id) {
        $beritaterkini = Beritaterkini::find($id);
        return view ('admin.tes', compact('beritaterkini'));

    }
}
