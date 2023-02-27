<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NotSelect implements Rule
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
        return $value !== 'select';
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Please select a valid country';
    }
}
