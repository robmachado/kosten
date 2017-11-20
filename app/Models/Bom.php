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
    
    public function setPerc1Attribute($value)
    {
        $this->attributes['perc1'] = str_replace(',', '.', $value)/100;
    }
    
    public function setPerc2Attribute($value)
    {
        $this->attributes['perc2'] = str_replace(',', '.', $value)/100;
    }
    
    public function setPerc3Attribute($value)
    {
        $this->attributes['perc3'] = str_replace(',', '.', $value)/100;
    }
    
    public function setLossesAttribute($value)
    {
        $this->attributes['losses'] = str_replace(',', '.', $value)/100;
    }
}
