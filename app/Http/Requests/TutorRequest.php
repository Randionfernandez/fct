<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \App\Models\Tutor;

class TutorRequest extends FormRequest {

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
    public function rules(Tutor $tutor) {
        return [
            'nombre_emp' => 'string',
            //'nif_tutor_emp' => "required|min:8|max:12|unique:tutores,nif_tutor_emp,$tutor->id" ,
            'nif_tutor_emp' => 'required|min:8|max:12',
            'documento' => 'required|in:dni,nif,pasaporte',
            'nombre_tutor_emp' => 'string',
            'apellido1_tutor_emp' => 'string',
            'apellido2_tutor_emp' => 'string|nullable',
            'status' => 'in:activo,inactivo',
            'telefono' => 'string|max:15|nullable',
            'email' => 'email|nullable',
        ];
    }

    public function messages() {
        return [
            //
        ];
    }

}
