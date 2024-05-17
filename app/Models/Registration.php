<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'other_name',
        'staff_id',
        'unit',
        'employment_status',
        'dob',
        'grade',
        'contact',
        'address',
        'c_p_name',
        'c_p_tel',
    ];
}
