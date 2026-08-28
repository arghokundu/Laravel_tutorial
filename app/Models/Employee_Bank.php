<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee_Bank extends Model
{
    use HasFactory;

    protected $table='employee_bank_dtls';

    protected $primaryKey='emp_bank_id_pk';

    protected $keyType='int';

    public $incrementing=true;

    public $timestamp=false;

    public function Employee_BankDtl()
    {
        return $this->hasMany(Employee_Dtl::class,'emp_bank_id_fk','emp_bank_id_pk');
    }
}
