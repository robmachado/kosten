<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packaging extends Model
{
    protected $table = 'packagings';
    
    protected $fillable = [
        'pack', 'description', 'value', 'quota'
    ];
    
    public function setValueAttribute($value)
    {
       $this->attributes['value'] = str_replace(',', '.', $value);
    }

    public function setQuotaAttribute($value)
    {
        $this->attributes['quota'] = str_replace(',', '.', $value)/100;
    }
}
