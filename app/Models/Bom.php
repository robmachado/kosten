<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bom extends Model
{
    protected $table = 'boms';
    
    protected $fillable = [
        'article',
        'description',
        'composition',
        'knittings_cod',
        'raw1',
        'raw2',
        'raw3',
        'perc1',
        'perc2',
        'perc3',
        'losses'
    ];
}
