<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('roles')->insert ([
        //     'nama' => 'Super Admin'
        // ]);
        // DB::table('roles')->insert ([
        //     'nama' => 'Kementerian Koordinator Kesektretariatan'
        // ]);
        // DB::table('roles')->insert ([
        //     'nama' => 'Kementerian Koordinator Keuangan'
        // ]);
        // DB::table('roles')->insert ([
        //     'nama' => 'Kementerian Komunikasi dan Informasi'
        // ]);
        // DB::table('roles')->insert ([
        //     'nama' => 'Kementerian PSDM'
        // ]);


        // DB::table('jurusans')->insert ([
        //     'nama' => 'Teknik Sipil'
        // ]);
        // DB::table('jurusans')->insert ([
        //     'nama' => 'Teknik Mesin'
        // ]);
        // DB::table('jurusans')->insert ([
        //     'nama' => 'Teknik Elektro'
        // ]);
        // DB::table('jurusans')->insert ([
        //     'nama' => 'Administrasi Bisnis'
        // ]);
        // DB::table('jurusans')->insert ([
        //     'nama' => 'Akuntansi'
        // ]);
        // DB::table('jurusans')->insert ([
        //     'nama' => 'Teknologi Pertanian'
        // ]);
        // DB::table('jurusans')->insert ([
        //     'nama' => 'Ilmu Kelautan dan Perikanan'
        // ]);
        // DB::table('jurusans')->insert ([
        //     'nama' => 'Teknik Arsitektur'
        // ]);

        // DB::table('jabatans')->insert ([
        //     'nm_jabatan' => 'Presiden Mahasiswa'
        // ]);
        // DB::table('jabatans')->insert ([
        //     'nm_jabatan' => 'Wakil Presiden Mahasiswa'
        // ]);
        // DB::table('jabatans')->insert ([
        //     'nm_jabatan' => 'Menteri'
        // ]);
        // DB::table('jabatans')->insert ([
        //     'nm_jabatan' => 'Wakil Menteri'
        // ]);
        // DB::table('jabatans')->insert ([
        //     'nm_jabatan' => 'Kepala Departemen'
        // ]);
        // DB::table('jabatans')->insert ([
        //     'nm_jabatan' => 'Staf'
        // ]);

        DB::table('kementerians')->insert ([
            'nm_kementerian' => 'Kementerian Koordinator Kesekretariatan'
        ]);
        DB::table('kementerians')->insert ([
            'nm_kementerian' => 'Kementerian Koordinator Keuangan'
        ]);
        DB::table('kementerians')->insert ([
            'nm_kementerian' => 'Kementerian Dalam Negeri'
        ]);
        DB::table('kementerians')->insert ([
            'nm_kementerian' => 'Kementerian Luar Negeri'
        ]);
        DB::table('kementerians')->insert ([
            'nm_kementerian' => 'Kementerian Unit Kegiatan Mahasiswa'
        ]);
        DB::table('kementerians')->insert ([
            'nm_kementerian' => 'Kementerian Agama'
        ]);
        DB::table('kementerians')->insert ([
            'nm_kementerian' => 'Kementerian Sosial Politik'
        ]);
        DB::table('kementerians')->insert ([
            'nm_kementerian' => 'Kementerian Komunikasi dan Informasi'
        ]);
        DB::table('kementerians')->insert ([
            'nm_kementerian' => 'Kementerian PSDM'
        ]);
        DB::table('kementerians')->insert ([
            'nm_kementerian' => 'Kementerian Ekonomi Kreatif'
        ]);


        // User::create([
        //     'name' => 'Super Admin',
        //     'email' => 'superadmin@gmail.com',
        //     'role_id' => 1,
        //     'password' => Hash::make('2')
        // ]);
        // User::create([
        //     'name' => 'Kementerian Koordinator Kesektretariatan',
        //     'email' => 'kosek@gmail.com',
        //     'role_id' => 2,
        //     'password' => Hash::make('2')
        // ]);
        // User::create([
        //     'name' => 'Kementerian Koordinator Keuangan',
        //     'email' => 'kokeu@gmail.com',
        //     'role_id' => 3,
        //     'password' => Hash::make('3')
        // ]);
        // User::create([
        //     'name' => 'Kementerian KOMINFO',
        //     'email' => 'kominfo@gmail.com',
        //     'role_id' => 4,
        //     'password' => Hash::make('4')
        // ]);
        // User::create([
        //     'name' => 'Kementerian PSDM',
        //     'email' => 'psdm@gmail.com',
        //     'role_id' => 5,
        //     'password' => Hash::make('5')
        // ]);
        
    }
}
