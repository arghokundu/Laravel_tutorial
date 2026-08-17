<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student_Curd extends Model
{
    use HasFactory;

    protected $table='student_from';

    protected $primaryKey='student_id_pk';

    protected $keyType = 'int';
    
    public $incrementing=true;

    public $timestamps=false;

    public function state()
    {
        return $this->belongsTo(State::class,'state_id_fk','state_id_pk');
    }
    public function district()
    {
        return $this->belongsTo(District::class,'district_id_fk','district_id_pk');
    }
    public function subdivision()
    {
        return $this->belongsTo(Subdivision::class,'subdiv_id_fk','subdiv_id_pk');
    }
}
