<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Subject extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Summary of table
     * @var string
     */
    protected $table = 'subjects';

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = ['codigo', 'nombre'];

    /*-------------------------------- RELACIONES ------------------------------*/
    /**
     * Summary of students
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_subjects');
    }

    /**
     * Summary of teachers
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'subject_teachers');
    }
    /*------------------------------------------------------------------------*/
}
