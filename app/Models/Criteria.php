<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
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
       $this->attributes['operational'] = str_replace(',', '.', $value);
    }
    
    public function setFinancialAttribute($value)
    {
       $this->attributes['financial'] = str_replace(',', '.', $value);
    }
    
    public function setApportionmentAttribute($value)
    {
       $this->attributes['apportionment'] = str_replace(',', '.', $value);
    }
    
    public function setProfitAttribute($value)
    {
       $this->attributes['profit'] = str_replace(',', '.', $value)/100;
    }
    
    public function setCommissionAttribute($value)
    {
       $this->attributes['commission'] = str_replace(',', '.', $value)/100;
    }

    public function setRateAttribute($value)
    {
       $this->attributes['rate'] = str_replace(',', '.', $value)/100;
    }
   
    public function setIpiAttribute($value)
    {
       $this->attributes['ipi'] = str_replace(',', '.', $value)/100;
    }
    
    public function setPisAttribute($value)
    {
       $this->attributes['pis'] = str_replace(',', '.', $value)/100;
    }
    
    public function setCofinsAttribute($value)
    {
       $this->attributes['cofins'] = str_replace(',', '.', $value)/100;
    }

    public function setCsllAttribute($value)
    {
       $this->attributes['csll'] = str_replace(',', '.', $value)/100;
    }

    public function setIrAttribute($value)
    {
       $this->attributes['ir'] = str_replace(',', '.', $value)/100;
    }
}
