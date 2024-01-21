<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KonselorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('konselors')->insert([
            'nama' => 'John Doe',
            'email' => 'john.doe@example.com',
            'pendidikan_terakhir' => 'S2 Psikologi',
            'alamat' => '123 Main Street',
            'tanggal_lahir' => '1990-01-01',
            'tahun_lulus' => '2015',
            'ijazah_profesi' => 'Ijazah Profesi Psikologi',
            'surat_izin' => 'Surat Izin Praktik Psikologi',
            'nomor_telepon' => '1234567890',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
