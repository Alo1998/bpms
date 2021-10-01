<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table="Appointments";
     protected $fillable = [
         'name',
         'email',
         'select',
         'date',
         'time',
         'phone',
     ];

     
}
