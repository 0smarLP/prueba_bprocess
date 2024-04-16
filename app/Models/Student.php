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
    protected $fillable = ['nombre', 'apellido', 'fecha_nacimiento', 'aula_id'];

    /**
     * Summary of dates
     * @var array
     */
    protected $dates = ['fecha_nacimiento'];

    protected $casts = [
        'fecha_nacimiento' => 'date:Y-m-d',
    ];

    /*-------------------------------- RELACIONES ------------------------------*/

    /*------------------------------------------------------------------------*/
}
