<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Summary of table
     * @var string
     */
    protected $table = 'students';

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = ['matricula', 'nombre', 'email'];

    /*-------------------------------- RELACIONES ------------------------------*/

    /**
     * Summary of subjects
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'student_subjects');
    }
    /*------------------------------------------------------------------------*/
}
