<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory;

    protected $table='gta_dise_location_master_state';

    protected $primarykey='state_id_pk';

    public  $incrementing=true;

    public $timestamp=false;

}
