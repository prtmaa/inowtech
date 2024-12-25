<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Murid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
              $kelas = Kelas::all();
              $guru = Guru::all();
      
              Murid::factory()->count(60)->create()->each(function($murid) use ($kelas, $guru) {
                  $murid->id_kelas = $kelas->random()->id;
                  $murid->id_guru = $guru->random()->id;
                  $murid->save();
              });
    }
}
