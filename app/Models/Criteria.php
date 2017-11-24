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
    
    public function setOperationalAttribute($value)
    {
       $this->attributes['operational'] = Values::real($value);
    }
    
    public function setFinancialAttribute($value)
    {
       $this->attributes['financial'] = Values::real($value);
    }
    
    public function setApportionmentAttribute($value)
    {
       $this->attributes['apportionment'] = Values::real($value);
    }
    
    public function setProfitAttribute($value)
    {
       $this->attributes['profit'] = Values::percent($value);
    }
    
    public function setCommissionAttribute($value)
    {
       $this->attributes['commission'] = Values::percent($value);
    }

    public function setRateAttribute($value)
    {
       $this->attributes['rate'] = Values::percent($value);
    }
   
    public function setIpiAttribute($value)
    {
       $this->attributes['ipi'] = Values::percent($value);
    }
    
    public function setPisAttribute($value)
    {
       $this->attributes['pis'] = Values::percent($value);
    }
    
    public function setCofinsAttribute($value)
    {
       $this->attributes['cofins'] = Values::percent($value);
    }

    public function setCsllAttribute($value)
    {
       $this->attributes['csll'] = Values::percent($value);
    }

    public function setIrAttribute($value)
    {
       $this->attributes['ir'] = Values::percent($value);
    }
}
