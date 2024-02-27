<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'type_id' => 'nullable|exists:types,id',
            'programma' => 'required|max:150',
            'data' => 'required|date',
            'emulazione' => 'required|max:150',
            'descrizione' => 'required',
        ];
    }

    public function meassages()
    {
        return [
            'nome.required' => 'Il nome del progetto è obbligatorio',
            'nome.max' => 'Il nome del progetto può essere lungo massimo 150 caratteri',
            'type_id.exists' => 'Questo tipo non esiste',
            'programma.required' => 'Il programma del progetto è obbligatorio',
            'programma.max' => 'Il programma del progetto può essere lungo massimo 150 caratteri',
            'data.required' => 'La data del progetto è obbligatoria',
            'data.date' => 'La data deve essere una data',
            'emulazione.required' => 'L emulazione del progetto è obbligatoria',
            'emulazione.max' => 'L emulazione del progetto può essere lunga massimo 150 caratteri',
            'descrizione.required' => 'La descrizione del progetto è obbligatoria',


        ];
    }
}
