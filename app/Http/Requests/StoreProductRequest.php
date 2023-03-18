<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|string|max:255',
            'description_1'=>'required|string',
            'description_2'=>'string',
            'description_3'=>'string',
            'description_4'=>'string',
            'description_5'=>'string',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif',
        ];
    }

    public function messages()
    {
        return [
	        'image.required'=>'Şəkil xanasını boş buraxmayın',
            'image.image'=>'Daxil edilən məlumat şəkil formatında deyil',
            'image.mimes:jpeg,png,jpg,gif'=>'Daxil edilən məlumat jpej,png,və jpg formatında deyil',
        ];
    }
}
