<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company_dtl_address extends Model
{
    use HasFactory;

    protected $table='employee_company_dtl_address';

    protected $primaryKey='company_address_pk';

    protected $keyType='int';

    public $incrementing=true;

    public $timestamp=false;
}
