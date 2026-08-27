<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee_Dtl extends Model
{
    use HasFactory;

    protected $table='employee_dtl';

    protected $primaryKey='emp_id_pk';

    protected $keyType='int';

    public $incrementing=true;

    public $timestamp=false;
}
