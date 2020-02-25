<?php

namespace documentoscontroller\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updatelugares extends FormRequest
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
            'idmun'=>['required'],
            'lugar'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'colonia'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'num_exterior'=>'required|numeric',
           
        ];
    }
}
