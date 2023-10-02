<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    //use HasFactory;
    protected $table='task';
    protected $primeryKey='id';
    protected $fillable=['m_id','c_id','task'];
}
