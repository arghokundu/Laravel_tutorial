<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee_Address extends Model
{
    use HasFactory;

    protected $table='employee_address';

    protected $primaryKey='emp_address_id_pk';

    protected $keyType='int';

    public $incrementing=true;

    public $timestamp=false;
}
