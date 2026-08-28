<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee_Company extends Model
{
    use HasFactory;

    protected $table='employee_company_dtl';

    protected $primaryKey='company_id_pk';

    protected $keyType='int';

    public $incrementing=true;

    public $timestamp=false;

    public function Company_dtlsAddress()
    {
        return $this->belongsTo(Company_dtl_address::class,'company_address_fk','company_address_pk');
    }
    public function Employee_companyDtls()
    {
        return $this->hasMany(Employee_Dtl::class,'company_id_fk','company_id_pk');
    }
}
