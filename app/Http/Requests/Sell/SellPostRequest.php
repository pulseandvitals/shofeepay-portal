<?php

namespace App\Http\Requests\Sell;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SellPostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        switch($this->method()) {
            case 'POST':
                return [
                    'item_name' => 'required|max:50',
                    'item_description' => 'required|max:500',
                    'item_quantity' => 'required|numeric',
                    'value_price' => 'required|numeric',
                    'item_images' => 'required',
            ];
            case 'PATCH':
                return [
                    'item_name' => 'required|max:50',
                    'item_description' => 'required|max:500',
                    'item_quantity' => 'required|numeric',
                    'value_price' => 'required|numeric',
                    'item_images' => 'required',
            ];
        }
    }
}
