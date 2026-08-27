<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee_Company extends Model
{
    use HasFactory;

    protected $table='employee_company_dtl';

    protected $primaryKey='company_id_pk';

    protected $keyType='int';

    public $incrementing=true;

    public $timestamp=false;
}
