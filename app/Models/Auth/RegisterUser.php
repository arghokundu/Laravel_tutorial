<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class RegisterUser extends Model
{
    use HasFactory;

    protected $table='register_table_data';

    protected $primaryKey='user_id';

    public $keyType='int';

    public $incrementing=true;

    public $timestamp=false;
}
