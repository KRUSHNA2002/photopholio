<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePricemodel extends Model
{
    use HasFactory;

     protected $table="service_price";
     protected $primaryKey="id";
}
