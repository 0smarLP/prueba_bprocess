<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Seeding tablas independientes
        $this->call(ClassroomSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(SubjectSeeder::class);

        // Seeding tablas dependientes
        $this->call(StudentSeeder::class);

        // Seeding relaciones
        $this->call(StudentSubjectSeeder::class);
        $this->call(SubjectTeacherSeeder::class);
    }
}
