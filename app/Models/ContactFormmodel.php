<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactFormmodel extends Model
{
    use HasFactory;

     protected $table="contact_form";
     protected $primaryKey="id";
}