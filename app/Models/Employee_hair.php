<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee_hair extends Model
{
    use HasFactory;

    protected $table='employee_hair';

    protected $primaryKey='emp_hair_id_pk';

    protected $keyType='int';

    public $incrementing=true;

    public $timestamp=false;

    public function Employee_DtsHair()
    {
        return $this->hasMany(Employee_Dtl::class,'emp_hair_id_fk','emp_hair_id_pk');
    }
}
