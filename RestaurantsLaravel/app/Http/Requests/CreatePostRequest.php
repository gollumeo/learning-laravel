<?php

namespace App\Http\Requests;

use App\Rules\NotSelect;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string',
            'review' => 'required|integer|min:0|max:10',
            'address' => 'required|string',
            'zipCode' => 'required|integer',
            'town' => 'required|string',
            'country' => ['required', new NotSelect]
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The name is required',
            'description.required' => 'The description is required',
            'review.required' => 'The review is required',
            'address.required' => 'The address is required',
            'zipCode.required' => 'The zip code is required',
            'town.required' => 'The town is required',
            'country.required' => 'The country is required',
            'country.not_select' => 'Please select a valid country',
            'review.integer' => 'The review must be an integer',
            'review.min' => 'The review must be at least 0',
            'review.max' => 'The review must be at most 10'
        ];
    }
}
