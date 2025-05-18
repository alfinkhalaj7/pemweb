<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;
use App\Models\Mapel;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Buat 10 guru dengan data palsu (menggunakan factory)
         Guru::factory(10)->create()->each(function ($guru) {
            // Ambil ID mapel IPA dan IPS
            $mapelIds = Mapel::inRandomOrder()->take(1)->pluck('id')->toArray();

            // Hubungkan guru dengan mapel (relasi many-to-many)
            $guru->mapels()->attach($mapelIds);
        });
    }
}
