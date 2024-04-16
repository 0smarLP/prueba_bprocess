<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Teacher;

class SubjectTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = Teacher::all();
        $subjects = Subject::all();

        foreach ($subjects as $subject) {

            $subject->teachers()->attach(
                $teachers->random(rand(1, 2))->pluck('id')->toArray()
            );
        }
    }
}
