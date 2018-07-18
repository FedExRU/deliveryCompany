<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'firstName'     => 'required|string',
            'city'          => 'required|string',
            'state'         => 'required|string',
            'zip'           => 'numeric|digits:3',
            'agreenment'    => 'required|boolean',
            'email'         => 'required|email',
        ];
    }
}
