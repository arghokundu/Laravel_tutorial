<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company_dtl_address extends Model
{
    use HasFactory;

    protected $table='employee_company_dtl_address';

    protected $primaryKey='company_address_pk';

    protected $keyType='int';

    public $incrementing=true;

    public $timestamp=false;

    public function Company_dtlsAddress()
    {
        return $this->hasMany(Employee_Company::class,'company_address_fk','company_address_pk');
    }
}
