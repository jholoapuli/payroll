<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'contribution',
        'base_range',
        'monthly',
        'employee_share',
        'employeer_share'
        
    ];

    protected $table = 'deductions';
}
