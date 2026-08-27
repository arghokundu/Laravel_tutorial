<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee_hair extends Model
{
    use HasFactory;

    protected $table='employee_hair';

    protected $primaryKey='emp_hair_id_pk';

    protected $keyType='int';

    public $incrementing=true;

    public $timestamp=false;
}
