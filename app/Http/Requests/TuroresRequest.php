<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TuroresRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'nif_tutor_emp' => 'required|min:8|max:12',
            'documento' => 'required|in:dni,nif,pasaporte',
            'nombre_tutor_emp' => 'required|string',
            'apellido1_tutor_emp' => 'required|string',
            'apellido2_tutor_emp' => 'string',
//            'pais_documento' => 'required',
//            'provincia' => 'required',
//            'municipio' => 'required',
            'status' => 'required',
            'telefono' => 'string|max:15',
            'email' => 'email',
            'id_emp' => 'required',
        ];
    }

}
