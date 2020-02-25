<?php

namespace documentoscontroller\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateprofesores extends FormRequest
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
            'idmun'=>'required',
        'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
        'ap_emp'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
        'am_emp'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
        'edad'=>'numeric',
        'calle'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
        'num_calle'=>'numeric',
        'colonia'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
        'telefono'=>'required',
        'cp'=>'required',
        'correo'=>'email',
        'sexo'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
        ];
    }
}
