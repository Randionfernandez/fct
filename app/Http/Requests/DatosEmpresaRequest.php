<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatosEmpresaRequest extends FormRequest {

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
            'nombre_emp' => "required|unique:empresas|min:3|max:40",
            'cif' => "required",
            'direccion_emp' => 'required|string|max:40',
            'poblacion_emp' => 'required',
            //'email_emp' => "required|email|unique:empresas,email_emp,". $this->id,
            'email_emp' => "required|email|unique:empresas",
            'cp_emp' => "digits:5",
            'sector' => "in:primario,secundario,terciario",
            'actividad_principal' => "required",
            'titularidad' => "in:publica,privada",
            'num_trabajadores' => 'integer',
            'representante_nombre' => 'required',
            'representante_nif' => 'required',
            'nombre_ct' => 'required',
            'cp_ct' => "nullable|digits:5",
            'email_ct' => 'required',
            'telefono1_ct' => 'required',
            'jornada' => "in:continua,partida",
            "horario_ct" => "required",
            'nombre_tutor_emp' => 'required',
            'nif_tutor_emp' => 'required',
            'lugar_firma' => "required|string|max:35",
            'fecha_firma' => 'date|max:' . date('Y-M-D'),
        ];
    }

    public function messages() {
        return [
            'nombre_emp.required' => 'Haz el favor de teclear el nombre de la empresa',
        ];
    }

    public function attributes(): array {
        return ['nombre_emp' => "nombre de la empresa"];
    }

}
