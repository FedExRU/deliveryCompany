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
            'zip'           => 'numeric|digits_between:3,5',
            'agreenment'    => 'required|boolean',
            'email'         => 'required|email',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'agreenment.required' => 'Please, agree with the terms and conditions of the site',
        ];
    }

    protected function getValidatorInstance()
    {
        $validator = parent::getValidatorInstance();

        \Session::flash('formTab',true);

        return $validator;
    }
}
