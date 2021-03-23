<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShipmentsRequest extends FormRequest
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
            'customer_id'       => 'required|exists:App\Models\Customer,id',
            'referentie_nummer' => 'required|unique|numeric',
            'loading_adres' => 'required|string',
            'loading_city' => 'required|string'
        ];
    }
}
