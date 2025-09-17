<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addvaccine extends Model
{
    protected $fillable = ['hospital_id', 'hospital_name', 'hospital_email','vaccine_name','vaccine_status']; 
}
