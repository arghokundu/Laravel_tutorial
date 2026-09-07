<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class RegisterUser extends Model implements AuthenticatableContract
{
    use HasFactory,Authenticatable;

    protected $table='register_table_data';

    protected $primaryKey='user_id';

    public $keyType='int';

    public $incrementing=true;

    public $timestamps=false;
}
