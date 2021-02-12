<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'reg_in',
        'reg_out',
        'ot_hours',
        'night_diff_hour',
        'reg_early',
        'tardy',
        'double_pay',
        'date'
    ];

    protected $table = 'records';
}
