<?php

namespace App\Http\Controllers;
use Socialite;
use Validator;
use Carbon\Carbon;
use App\Models\Ukm;
use App\Models\Psdm;
use App\Models\Agama;
use App\Models\Dagri;
use App\Models\Ekraf;
use App\Models\Kokeu;
use App\Models\Kosek;
use App\Models\Lugri;
use App\Models\Presma;
use App\Models\Sospol;
use App\Models\Jabatan;
use App\Models\Jurusan;
use App\Models\Kominfo;
use App\Models\Laporan;
use App\Models\Layanan;
use App\Models\Instagram;
use App\Models\Kementerian;
use App\Models\Kepengurusan;
use Illuminate\Http\Request;
use App\Models\Arsipankajian;
use App\Models\Beritaterkini;
use App\Models\Dokumentasikegiatan;

class UserController extends Controller
{
/* Beranda */
    public function Beranda () {
        $data_berita_terkini = Beritaterkini::orderBy('created_at', 'desc')->get();
        $data_dokumentasi_kegiatan = Dokumentasikegiatan::orderBy('tanggal', 'asc')->get();
        $data_instagram = Instagram::orderBy('created_at', 'desc')->get();
        return view ('user.beranda', compact ('data_berita_terkini','data_dokumentasi_kegiatan','data_instagram'));
    }

/* Tentang Kami */
    public function TentangKami () {
        return view ('user.tentang-kami');
    }

/* Kepengurusan */
    public function Kepengurusan () {
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
        return view ('user.kepengurusan', compact ('jurusan','jabatan','kementerian','kepengurusan'));
    }

/* Berita Terkini */
    public function BeritaTerkini() {
        $data_berita_terkini = Beritaterkini::orderBy('created_at', 'desc')->get();
        return view ('user.berita-terkini', ['beritaterkini' => $data_berita_terkini]);
    }

/* Arsipan Kajian */
    public function ArsipanKajian() {
        $data_arsipan_kajian = Arsipankajian::orderBy('created_at', 'desc')->get();
        return view ('user.kastrag' , ['arsipankajian' => $data_arsipan_kajian]);
    }

/* Layanan */
    public function Layanan() {
        $data_jurusan = Jurusan::all();
        return view ('user.layanan',['jurusan' => $data_jurusan]);
    }
        // Tambah Data
            public function TambahLaporjak (Request $request) {
                $rules = [
                    'nim' => 'required|max:10',
                    'nama' => 'required|regex:/^[a-zA-Z\s]+$/|min:3',
                    
                ];
        
                $messages = [
                    'nim.required' => 'Kolom NIM wajib diisi.',
                    'nim.max' => 'NIM tidak boleh lebih dari 10 karakter.',
                    'nama.required' => 'Kolom Nama wajib diisi.',
                    'nama.min' => 'Nama tidak boleh kurang dari 3 karakter.',
                    'nama.regex' => 'Nama hanya boleh mengandung huruf.',
                ];
        
                $validator = Validator::make($request->all(), $rules, $messages);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }

                Layanan::create($request->all());
                return redirect()->route("Lapor-Jak")->with('success', 'Laporan telah terkirim !');
            }
        // End

        // Tambah Data
            public function TambahTanyajak (Request $request) {
                $rules = [
                    'nim' => 'required|max:10',
                    'nama' => 'required|regex:/^[a-zA-Z\s]+$/|min:3',
                ];
        
                $messages = [
                    'nim.required' => 'Kolom NIM wajib diisi.',
                    'nim.max' => 'NIM tidak boleh lebih dari 10 karakter.',
                    'nama.required' => 'Kolom Nama wajib diisi.',
                    'nama.min' => 'Nama tidak boleh kurang dari 3 karakter.',
                    'nama.regex' => 'Nama hanya boleh mengandung huruf.',
                ];
        
                $validator = Validator::make($request->all(), $rules, $messages);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }

                Layanan::create($request->all());
                return redirect()->route("Lapor-Jak")->with('success', 'Pertanyaan telah terkirim !');
            }
        // End

        // Tambah Data
            public function TambahKritiksaran (Request $request) {
                $rules = [
                    'nim' => 'required|max:10',
                    'nama' => 'required|regex:/^[a-zA-Z\s]+$/|min:3',
                ];
        
                $messages = [
                    'nim.required' => 'Kolom NIM wajib diisi.',
                    'nim.max' => 'NIM tidak boleh lebih dari 10 karakter.',
                    'nama.required' => 'Kolom Nama wajib diisi.',
                    'nama.min' => 'Nama tidak boleh kurang dari 3 karakter.',
                    'nama.regex' => 'Nama hanya boleh mengandung huruf.',
                ];
        
                $validator = Validator::make($request->all(), $rules, $messages);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }

                Layanan::create($request->all());
                return redirect()->route("Lapor-Jak")->with('success', 'Kritik dan Saran telah terkirim !');
            }
        // End

/* Informasi - UKM */
    public function UKM () {
        return view ('user.informasi.ukm');
    }

/* Informasi - HMJ*/
    public function HMJ () {
        return view ('user.informasi.hmj');
    }

/* Informasi - Laporan Keuangan */
    public function LaporanKeuangan () {
        
        $data_laporan_pemasukan = Laporan::where('jenis', 'Pemasukan')->get();
        $data_laporan_pengeluaran = Laporan::where('jenis', 'Pengeluaran')->get();
        return view ('user.informasi.laporan-keuangan', compact ('data_laporan_pemasukan','data_laporan_pengeluaran'));

    }
}
