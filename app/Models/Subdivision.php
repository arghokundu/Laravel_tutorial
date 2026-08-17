<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subdivision extends Model
{
    use HasFactory;

    protected $table='gta_dise_location_master_subdiv';

    protected $primarykey='subdiv_id_pk';

    public  $incrementing=true;

    public $timestamp=false;
}
