<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dyeing extends Model
{
    protected $table = 'dyeings';
    
    protected $fillable = ['class', 'value'];
        
    public function setValueAttribute($value)
    {
        $this->attributes['value'] = str_replace(',', '.', $value);
    }
}
