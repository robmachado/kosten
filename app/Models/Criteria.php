<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use Values;
    
    protected $table = 'criterias';
    
    protected $fillable = [
        'operational',
        'financial',
        'apportionment',
        'profit',
        'commission',
        'rate',
        'ipi',
        'pis',
        'cofins',
        'csll',
        'ir'
    ];
    
    /*
    public function setOperationalAttribute($value)
    {
       $this->attributes['operational'] = Values::inteiro($value);
    }

    public function getOperationalFormattedAttribute()
    {
       return Values::brnumber($this->operational, 2); 
    }
    
    public function setFinancialAttribute($value)
    {
       $this->attributes['financial'] = Values::inteiro($value);
    }

    public function getFinancialFormattedAttribute()
    {
       return Values::brnumber($this->financial, 2);
    }
    
    public function setApportionmentAttribute($value)
    {
       $this->attributes['apportionment'] = Values::inteiro($value)*1000;
    }

    public function getApportionmentFormattedAttribute()
    {
       return Values::brnumber($this->apportionment/1000, 0);
    }
    
    public function setProfitAttribute($value)
    {
       $this->attributes['profit'] = Values::percent($value);
    }

    public function getProfitFormattedAttribute()
    {
       return Values::brnumber($this->profit*100, 2);
    }
    
    public function setCommissionAttribute($value)
    {
       $this->attributes['commission'] = Values::percent($value);
    }

    public function getCommissionFormattedAttribute()
    {
       return Values::brnumber($this->commission*100, 2);
    }
    
    public function setRateAttribute($value)
    {
       $this->attributes['rate'] = Values::percent($value);
    }

    public function getRateFormattedAttribute()
    {
       return Values::brnumber($this->rate*100, 2);
    }
    
    public function setIpiAttribute($value)
    {
       $this->attributes['ipi'] = Values::percent($value);
    }

    public function getIpiFormattedAttribute()
    {
       return Values::brnumber($this->ipi*100, 2);
    }
    
    public function setPisAttribute($value)
    {
       $this->attributes['pis'] = Values::percent($value);
    }
    
    public function getPisFormattedAttribute()
    {
       return Values::brnumber($this->pis*100, 2);
    }
    
    public function setCofinsAttribute($value)
    {
       $this->attributes['cofins'] = Values::percent($value);
    }
    
    public function getCofinsFormattedAttribute()
    {
       return Values::brnumber($this->cofins*100, 2);
    }
    
    public function setCsllAttribute($value)
    {
       $this->attributes['csll'] = Values::percent($value);
    }

    public function getCsllFormattedAttribute()
    {
       return Values::brnumber($this->csll*100, 2);
    }

    public function setIrAttribute($value)
    {
       $this->attributes['ir'] = Values::percent($value);
    }

    public function getIrFormattedAttribute()
    {
       return Values::brnumber($this->ir*100, 2);
    }*/
     
}
