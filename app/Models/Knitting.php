<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Knitting extends Model
{
    protected $table = 'knittings';
 
    protected $fillable = ['cod','description','price'];
}
