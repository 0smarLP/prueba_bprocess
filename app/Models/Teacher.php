<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * Summary of table
     * @var string
     */
    protected $table = 'teachers';

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = ['id_empleado', 'nombre', 'apellido'];

    /*-------------------------------- RELACIONES ------------------------------*/
    /**
     * Summary of subjects
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'subject_teachers');
    }
    /*------------------------------------------------------------------------*/
}
