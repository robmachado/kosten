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
    
    public function setValueAttribute($value)
    {
       $this->attributes['value'] = Values::real($value);
    }

    public function setQuotaAttribute($value)
    {
        $this->attributes['quota'] = Values::percent($value);
    }
}
