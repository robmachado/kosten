<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RawMaterial extends Model
{
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
}
