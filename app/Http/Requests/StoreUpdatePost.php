<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePost extends FormRequest
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
            'title' => 'required|min:5|max:30',
            'content' => 'required|min:5|max:200',

        ];
    }

    /*public function messages()
    {
       return[
           'required' => 'O campo :attribute é obrigatório !',
           'min' => 'O tamanho minimo do campo :attribute é :min caracteres',
           'max' => 'O tamanho maximo do campo :attribute é :max caracteres',
       ];
    }*/
}