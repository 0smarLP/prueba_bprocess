<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Summary of table
     * @var string
     */
    protected $table = 'classrooms';

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = ['nombre', 'capacidad'];

    /**
     * Summary of dates
     * @var array
     */
    protected $casts = [
        'capacidad' => 'integer',
    ];

    /*-------------------------------- RELACIONES ------------------------------*/
    /**
     * Summary of students
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    /*------------------------------------------------------------------------*/
}
