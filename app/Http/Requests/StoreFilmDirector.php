<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFilmDirector extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => 'required | string | max:255',
            'lastname' => 'required | string | max:255',
            'picture' => 'nullable | string | max:255',
            'born' => 'required | date',
            'death' => 'nullable | date',
        ];
    }
}
