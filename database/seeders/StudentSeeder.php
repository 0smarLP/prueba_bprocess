<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Student::create([
                'matricula' => $faker->unique()->numerify('##########'),
                'nombre' => $faker->name,
                'email' => $faker->unique()->safeEmail
            ]);
        }
    }
}
