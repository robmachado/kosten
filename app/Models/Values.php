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
        return (float) str_replace(',', '.', $value);
    }
}
