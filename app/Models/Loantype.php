<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loantype extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'type',
        'description'
    ];

    protected $table = 'loan_type';
}
