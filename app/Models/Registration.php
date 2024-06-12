<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
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
