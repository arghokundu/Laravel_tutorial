<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student_Crud_Archive extends Model
{
    use HasFactory;

    protected $table='student_form_archive';

    protected $primaryKey='archive_id_pk';

    protected $keyType='int';

    public $incrementing=true;

    public $timestamp=false;

    public $guarded=[];

}
