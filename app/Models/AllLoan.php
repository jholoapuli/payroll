<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllLoan extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'notes',
        'amount',
        'months_payable'
        
    ];

    protected $table = 'all_loans';

}
