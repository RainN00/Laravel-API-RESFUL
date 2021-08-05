<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'size' => 'required',
            'color' => 'required',
            'linkWeb' => 'required',
            'wishlist' => 'required'
        ];
    }
    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Name is not blank',
            'name.string' => 'The name must be a string',
            'name.min' => 'Name with at least 3 characters',
            'price.required' => 'Price is not blank',
            'price.regex' => 'The unit price is not in the correct format',
            'size.required' => 'Size is not blank',
            'color.required' => 'Color is not blank',
            'linkWeb.required' => 'Link web is not blank',
            'wishlist.required' => 'Wishlist is not blank',
        ];
    }
}
