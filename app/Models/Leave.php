<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'start',
        'end',
        'notes',
        'employee_id',
        'leave_type_id'
    ];

    protected $table = 'leaves';
}
