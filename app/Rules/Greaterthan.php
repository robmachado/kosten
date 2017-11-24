<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Greaterthan implements Rule
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
        dd($value);
        return false;
        /*
        if (isset($parameters[1])) {
            $other = $parameters[1];
            return $value > $other;
        } else {
            return true;
        }
         * 
         */
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
