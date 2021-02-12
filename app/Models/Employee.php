<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'file',
        'first_name',
        'last_name',
        'middle_name',
        'contact',
        'address',
        'birthday',
        'designation',
        'basic_rate'
    ];

    protected $table = 'employees';
}
