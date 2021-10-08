<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstUser extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'username';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
}
