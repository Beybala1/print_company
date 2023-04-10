<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSocialRequest extends FormRequest
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
            'link'=>'required|max:255',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif',
        ];
    }

    public function messages()
    {
        return [
            'image.required'=>'Şəkil xanasını boş buraxmayın',
            'image.image'=>'Daxil edilən məlumat şəkil formatında deyil',
            'image.mimes:jpeg,png,jpg,gif'=>'Daxil edilən məlumat jpeg,png və jpg formatında deyil',
        ];
    }
}
