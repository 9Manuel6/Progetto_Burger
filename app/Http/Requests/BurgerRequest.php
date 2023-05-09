<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BurgerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
         
            'title'=>'required|min:3|max:10',
            'ingredienti'=>'required|min:3|max:255',
            'imgCibo'=>'file|required|image',
           
        ];
   
       

    }

    public function messages(): array{
        return[
            'title.required'=>'Devi inserire il nome del panino',
            'title.min'=>'il nome deve essere di almeno tre caratteri',
            'title.max'=>'il nome deve essere di massimo 10 caratteri',
           
            'imgCibo.required'=>'Devi inserire un\'immagine',
            'ingredienti.required'=>'Devi inserire gli ingredienti del panino',
            'ingredienti.min'=>'gli ingredienti devono essere di almeno tre caratteri',
            'ingredienti.max'=>'gli ingredienti devono essere di massimo 30 caratteri',

        ];
    }  
}  