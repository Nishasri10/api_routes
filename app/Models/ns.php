<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class ns extends Model
{
    use HasApiTokens;

protected $fillable=[
    'reg_no',
    'name',
    'department',
    'bloodgroup',
    'DOB',
    'user_name',
    'password'
];
}
