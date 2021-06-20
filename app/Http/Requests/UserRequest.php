<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
          'name'=>'required',
          'email'=>'required',
          'password'=>'required',
          'cpf'=>'required',
          'birthDate'=>'required',
          'cell'=>'required',
      ];
    }

    public function messages()
    {
        return [
          'name.required'=> 'Prencha seu Nome',
          'email.required'=> 'Informe um Email',
          'password.required'=> 'Informe uma Senha',
          'cpf.required'=> 'Inofrme seu CPF',
          'birthDate.required'=> 'Informe sua Data de Nascimento',
          'cell.required'=> 'Informe um número de Celular',
        ];
    }
}
