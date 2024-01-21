<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KonselorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('konselors')->insert([
            'nama' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'pendidikan_terakhir' => $faker->word,
            'alamat' => $faker->address,
            'tanggal_lahir' => $faker->date,
            'tahun_lulus' => $faker->year,
            'ijazah_profesi' => $faker->word,
            'surat_izin' => $faker->word,
            'nomor_telepon' => $faker->phoneNumber,
            'status' => $faker->boolean,
            'spesialisasi' => $faker->word,
            'foto' => $faker->imageUrl(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // You can add more records as needed.
    }
}
