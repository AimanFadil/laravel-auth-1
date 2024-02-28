<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTypeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:150',
        ];
    }
    public function meassages()
    {
        return [
            'nome.required' => 'Il nome del progetto è obbligatorio',
            'nome.max' => 'Il nome del progetto può essere lungo massimo 150 caratteri',

        ];
    }
}
