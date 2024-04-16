<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 3; $i++) {
            Teacher::create([
                'id_empleado' => $faker->unique()->numerify('EMP###'),
                'nombre' => $faker->name,
                'apellido' => $faker->name,
            ]);
        }
    }
}
