<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTarefaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo'     => ['required','string'],
            'descricao'  => ['required','string'],
        ];
    }

    public function messages()
    {
        return [
            'titulo.required'   => 'O campo título é obrigatório.',
            'descricao.required'  => 'O campo descrição é obrigatório.',
        ];
    }
}
