<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAccount extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //TODO: tester si déconnecté
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
            'email' => 'required | string | max:255',
            'confirmEmail' => 'required | string | max:255',
            'password' => 'required | string | max:255',
            'confirmPassword' => 'required | string | max:255',
        ];
    }
}
