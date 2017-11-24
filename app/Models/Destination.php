<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use Values;
    
    protected $table = 'destinations';
     
    protected $fillable = ['destination', 'icms'];
    
    public function setIcmsAttribute($value)
    {
        $this->attributes['icms'] = Values::percent($value);
    }
}
