<?php

namespace Database\Seeders;

use App\Models\FormPernyataan;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();

        User::create([
            'name' => 'Tamu',
            'username' => 'tamu',
            'notelp' => '0088',
            'email' => 'tamu@gmail.com',
            'password' => bcrypt('tamu'),
        ]);
        FormPernyataan::create([
            'nama' => 'tamu',
            'email' => 'tamu@gmail.com',
            'jabatan' => 'anggota',
            'instansi' => 'ruang',
            'kota' => 'bogor',
            'tanggal' => '2017-09-13',
        ]);
        FormPernyataan::create([
            'nama' => 'tamu1',
            'email' => 'tamu1@gmail.com',
            'jabatan' => 'anggota',
            'instansi' => 'ruang',
            'kota' => 'bogor',
            'tanggal' => '2017-09-13',
        ]);
        FormPernyataan::create([
            'nama' => 'tamu2',
            'email' => 'tamu2@gmail.com',
            'jabatan' => 'anggota',
            'instansi' => 'ruang',
            'kota' => 'bogor',
            'tanggal' => '2017-09-13',
        ]);
    }
}
