<?php

namespace App\Models;

use App\traits\GenUid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakananTradisional extends Model
{
    use HasFactory, GenUid;
    protected $guarded = ['id']; 
}
