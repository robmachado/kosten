<?php

namespace App\Models;

trait Values
{
    public static function percent($value)
    {
        $value = self::real($value);
        if ($value > 1) {
            return $value/100;
        }
        return $value;
    }
    
    public static function real($value)
    {
        if (strpos($value, '.') !== false && strpos($value, ',') !== false) {
            $value = str_replace('.', '', $value);
        }
        return (float) str_replace(',', '.', $value);
    }
    
    public static function inteiro($value)
    {
        $value = self::real($value);
        return round($value, 0);
    }
    
    public static function brnumber($value, $decimals = 2)
    {
        $v = (float) $value;
        $nv = number_format($v,$decimals,',','');
        return $nv;
    }
    
    public static function brdata($value)
    {
        return (new \DateTime($value))->format('d/m/Y');
    }
}
