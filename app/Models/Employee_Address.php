<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee_Address extends Model
{
    use HasFactory;

    protected $table='employee_address';

    protected $primaryKey='emp_address_id_pk';

    protected $keyType='int';

    public $incrementing=true;

    public $timestamp=false;

    public function Emplyee_DtlAddress()
    {
        return $this->hasMany(Employee_Dtl::class,'emp_address_id_fk','emp_address_id_pk');
    }
}
