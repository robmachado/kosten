<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Knitting extends Model
{
    use Values;
    
    protected $table = 'knittings';
 
    protected $fillable = ['cod','description','price'];
    
    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = Values::real($value);
    }
}
