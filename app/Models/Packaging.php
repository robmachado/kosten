<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packaging extends Model
{
    use Values;
    
    protected $table = 'packagings';
    
    protected $fillable = [
        'pack', 'description', 'value', 'quota'
    ];
    
    public function setPackAttribute($value)
    {
        $this->attributes['pack'] = str_replace(' ', '', strtoupper(trim($value)));
    }
    
    /*
    public function setValueAttribute($value)
    {
       $this->attributes['value'] = Values::real($value);
    }

    public function getValueFormattedAttribute()
    {
        return Values::brnumber($this->value,2);
    }

    public function setQuotaAttribute($value)
    {
        $this->attributes['quota'] = Values::percent($value);
    }
    
    public function getQuotaFormattedAttribute()
    {
        return Values::brnumber($this->quota*100,2);
    }
     * 
     */
}
