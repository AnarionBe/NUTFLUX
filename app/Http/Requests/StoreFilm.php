<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class StoreFilm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // TODO: retirer l'autorisation auto
        return true;
        // return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required | string | max:255',
            'link' => 'nullable | string | max:255',
            'poster' => 'nullable | string | max:255',
            'film-director' => 'nullable | integer',
            'release' => 'required | date',
            'synopsis' => 'required | string',
        ];
    }
}
