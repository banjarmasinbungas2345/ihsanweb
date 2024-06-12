<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Prodi;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Prodi::create([
            'nama_prodi' => 'Bisnis Digital'
        ]);

        Prodi::create([
            'nama_prodi' => 'Manajemen Informatika'
        ]);

        prodi::factory(10)->create();

        Mahasiswa:: create([
            'nim' =>'E0202296',
            'nama'=>'Gusti',
            'no_hp'=>'0895339581442',
            'alamat'=>'kayutangi',
            'foto'=>'ihsan.jpg',
            'password'=> '124',
            'prodi_id'=> 1,
        ]);

        Mahasiswa::create([
            'nim'=> 'E020322097',
            'nama'=> 'ihsan',
            'no_hp'=> '123',
            'alamat'=> 'kayutangi',
            'foto'=> 'ihsan.jpg',
            'password'=>'123',
            'prodi_id'=> 2,
        ]);
        Mahasiswa::factory(100)->create();

    }

}