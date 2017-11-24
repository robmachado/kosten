<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Knitting extends Model
{
    use Values;
    
    protected $table = 'knittings';
 
    protected $fillable = ['cod','description','price'];
    
    public function setCodAttribute($value)
    {
        $this->attributes['cod'] = str_replace(' ', '', strtoupper(trim($value)));
    }
    
    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = Values::real($value);
    }
    
    public function getPriceFormattedAttribute()
    {
        return Values::brnumber($this->price,2);
    }
}
