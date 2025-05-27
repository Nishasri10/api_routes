<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dr extends Model
{
    protected $table='drs';
    protected $fillable=['Name','Rollno','Department'];
}
