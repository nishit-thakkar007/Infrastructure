<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class civil extends Model
{
    //use HasFactory;
    protected $table='civil';
    protected $primeryKey='id';
    protected $fillable=['name','email','designation','username','password'];

}
