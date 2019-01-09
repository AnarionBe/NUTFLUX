<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // TODO: check if connected
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
            "pseudo" => "required | string | max:255 | unique:users",
            "firstname" => "nullable | string | max:255",
            "lastname" => "nullable | string | max:255",
            "account" => "required | integer",
        ];
    }
}
