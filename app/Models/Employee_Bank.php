<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee_Bank extends Model
{
    use HasFactory;

    protected $table='employee_bank_dtls';

    protected $primaryKey='emp_bank_id_pk';

    protected $keyType='int';

    public $incrementing=true;

    public $timestamp=false;
}
