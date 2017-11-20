<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NumericBR implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //permite que o numero seja inteiro, ou separado
        //com uma virgula ou um ponto
        $regex = '/^\d*([\,\.]{1}\d{0,12})?$/';
        return preg_match($regex, $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O valor indicado não é um numero válido.';
    }
}
