<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutInfomodel extends Model
{
    use HasFactory;

     protected $table="about_info";
     protected $primaryKey="about_info_id";
}
