<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $table = 'destinations';
     
    protected $fillable = ['destination', 'icms'];
    
    public function setIcmsAttribute($value)
    {
        $this->attributes['icms'] = str_replace(',', '.', $value)/100;
    }
}
