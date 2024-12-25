<?php

namespace Database\Factories;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Murid;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Murid>
 */
class MuridFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Murid::class;

    public function definition()
    {
        return [
            'nama_murid' => $this->faker->name,
            'id_kelas' => Kelas::inRandomOrder()->first()->id,
            'id_guru' => Guru::inRandomOrder()->first()->id,
        ];
    }

}
