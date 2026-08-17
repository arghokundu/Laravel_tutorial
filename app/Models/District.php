<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory;

    protected $table='gta_dise_location_master_district';

    protected $primarykey='district_id_pk';

    public  $incrementing=true;

    public $timestamp=false;

    public function Student_district()
    {
        return $this->hasMany(Student_Curd::class,'district_id_fk','district_id_pk');
    }
}
