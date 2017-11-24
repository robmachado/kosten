<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dyeing extends Model
{
    use Values;
    
    protected $table = 'dyeings';
    
    protected $fillable = ['class', 'value'];
    
    public function setClassAttribute($value)
    {
        $this->attributes['class'] = str_replace(' ', '', strtoupper(trim($value)));
    }
        
    public function setValueAttribute($value)
    {
        $this->attributes['value'] = Values::real($value);
    }
    
    public function getValueFormattedAttribute()
    {
        return Values::brnumber($this->value,2);
    }
}
