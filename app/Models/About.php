<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'fullname',
        'inputEmail',
        'dob',
        'age',
        'address',
        'number',
        'profile_image',
        'description1',
        'description2',
        'description3',

    ];
}
