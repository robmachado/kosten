<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class RawMaterial extends Model
{
    use Values;
    
    protected $table = 'rawmaterials';
    
    protected $fillable = [
        'reference',
        'valueorigin',
        'icms',
        'provider_cod',
        'description',
        'basecomponent',
        'cables',
        'dtex',
        'filaments',
        'finishing'
    ];
    
    public function setReferenceAttribute($value)
    {
        $this->attributes['reference'] = str_replace(' ', '', strtoupper(trim($value)));
    }
    /*
    public function setValueAttribute($value)
    {
       $this->attributes['value'] = Values::real($value);
    }
    
    public function getValueFormattedAttribute()
    {
        return Values::brnumber($this->value, 2);
    }
    
    public function setValueicmsAttribute($value)
    {
       $this->attributes['valueicms'] = Values::real($value);
    }
    
    public function getValueicmsFormattedAttribute()
    {
        return Values::brnumber($this->valueicms, 2);
    }
    */
    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d/m/Y');
    }
}
