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
            // 'cover'=>'file|required|image',
           
        ];
   
       

    }

    public function messages(): array{
        return[
            'title.required'=>'Devi inserire il titolo del libro',
            'title.min'=>'il titolo deve essere di almeno tre caratteri',
            'title.max'=>'il titolo deve essere di massimo 10 caratteri',
           
            // 'cover.required'=>'Devi inserire un\'immagine',
            'ingredienti.required'=>'Devi inserire la descrizione del libro',
            'ingredienti.min'=>'la descrizione deve essere di almeno tre caratteri',
            'ingredienti.max'=>'la descrizione deve essere di massimo 30 caratteri',

        ];
    }  
}  