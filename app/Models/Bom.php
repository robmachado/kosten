<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bom extends Model
{
    use Values;
    
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
       $this->attributes['perc1'] = Values::percent($value);
    }
    
    public function setPerc2Attribute($value)
    {
        $this->attributes['perc2'] = Values::percent($value);
    }
    
    public function setPerc3Attribute($value)
    {
        $this->attributes['perc3'] = Values::percent($value);
    }
    
    public function setLossesAttribute($value)
    {
        $this->attributes['losses'] = Values::percent($value);
    }
    
    public function getLossesFormattedAttribute()
    {
        return Values::brnumber($this->losses*100,2);
    }
    
    public function getPerc1FormattedAttribute()
    {
        return Values::brnumber($this->perc1*100,2);
    }
    
    public function getPerc2FormattedAttribute()
    {
        return Values::brnumber($this->perc2*100,2);
    }
    
    public function getPerc3FormattedAttribute()
    {
        return Values::brnumber($this->perc3*100,2);
    }
}
