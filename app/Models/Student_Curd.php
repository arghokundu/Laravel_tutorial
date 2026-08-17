<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student_Curd extends Model
{
    use HasFactory;

    protected $table='student_from';

    protected $primaryKey='student_id_pk';

    protected $keyType = 'int';
    
    public $incrementing=true;

    public $timestamps=false;
}
