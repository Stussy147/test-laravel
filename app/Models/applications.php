<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applications extends Model
{
    protected $fillable = ['id','user_id','service_type','date_type','adress','status'];
    
}
