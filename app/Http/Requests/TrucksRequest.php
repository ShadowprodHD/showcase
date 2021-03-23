<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrucksRequest extends FormRequest
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
            'customer_id'   => 'required|exists:App\Models\Customer,id',
            'truck_id'      => 'required|exists:App\Models\Trucks,id',
            'kenteken'      => 'required|unique',
            'brand'         => 'required'
        ];
    }
}
