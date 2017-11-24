<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RawMaterial extends Model
{
    use Values;
    
    protected $table = 'rawmaterials';
    
    protected $fillable = [
        'reference',
        'value',
        'valueicms',
        'provider_cod',
        'description',
        'basecomponent',
        'cables',
        'dtex',
        'filaments',
        'finishing'
    ];
    
    public function setValueAttribute($value)
    {
       $this->attributes['value'] = Values::real($value);
    }
    
    public function setValueicmsAttribute($value)
    {
       $this->attributes['valueicms'] = Values::real($value);
    }
}
