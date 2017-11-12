<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    protected $table = 'criterias';
    
    protected $fillable = [
        'operational_cost',
        'financial_cost',
        'apportionment',
        'profit',
        'commission',
        'financial_rate',
        'ipi',
        'pis',
        'cofins',
        'csll',
        'ir'
    ];
}
