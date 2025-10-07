<?php

namespace App\Http\Requests;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException as ValidationException;

class RegistroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cod_sensor'=>'required',
            'valor'=>'required|numeric',
            'unidade'=>'required'
        ];

    }

    protected function failedValidation(Validator $validator)
    {
        if($this-> expectsJson()){
            throw new HttpResponseException(response()->json([
                'success'=> false,
                'message'=>'Erro de validação',
                'errors'=>$validator->errors()
            ],422));
        }

        throw new ValidationException($validator);
    }

    public function messages()
    {
        return  [
            'cod_sensor.required'=>'o codigo do sensor é obrigatorio',
            'valor.required'=>'o valor do sensor é obrigatorio',
            'valor.numeric'=> 'o valor do sensor precisa ser numerico',
            'unidade.required'=>'a unidade de medida é obrigatoria'

        ];
    }

}
