<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Klien;
use App\Models\Konselor;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

         Role::insert([
            [
                "name" => "klien",
                "guard_name" => "web"
            ],
            [
                "name" => "konselor",
                "guard_name" => "konselor"
            ],
            [
                "name" => "admin ",
                "guard_name" => "admin"
            ],
        ]);


        $klien = Klien::create([
            "nama" => "user1",
            "password" => "123456",
            "jenis_kelamin" => "1",
            "alamat" => "sobo",
            "email" => "user@gmail.com"
        ]);

        $klien->assignRole("klien");

        $admin = User::create([
            "name" => "admin1",
            "password" => "123456",
            "email" => "admin@gmail.com"
        ]);

        $admin->assignRole('admin');
        
        $konselor = Konselor::create([
            "nama" => "konselor1",
            "password" => Hash::make('12345'),
            "email" => "konselor@gmail.com",
            "pendidikan_terakhir" => "sd",
            "alamat" => "sobo",
            "spesialisasi" => "gigi",
            "foto" => "foto.jpg",
            "status" => "1"
        ]);
        
        $konselor->assignRole('konselor');


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
