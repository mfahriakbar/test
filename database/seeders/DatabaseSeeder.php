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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'yoga',
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
            'ttd' => 0,
        ]);
    }
}
