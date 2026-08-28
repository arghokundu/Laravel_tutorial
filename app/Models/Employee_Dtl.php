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

    public function Employee_Hair()
    {
        return $this->belongsTo(Employee_hair::class,'emp_hair_id_fk','emp_hair_id_pk');
    }
    public function Emplyee_DtlsAddress()
    {
        return $this->belongsTo(Employee_Address::class,'emp_address_id_fk','emp_address_id_pk');
    }
    public function Employee_DtlsBank()
    {
        return $this->belongsTo(Employee_Bank::class,'emp_bank_id_fk','emp_bank_id_pk');
    }
     public function Employee_Dtlscompany()
    {
        return $this->belongsTo(Employee_Company::class,'company_id_fk','company_id_pk');
    }
}
