<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'=>'required|string|max:255',
            'description_1'=>'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif',
            'category_id'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'image.image'=>'Daxil edilən məlumat şəkil formatında deyil',
            'image.mimes:jpeg,png,jpg,gif'=>'Daxil edilən məlumat jpej,png,və jpg formatında deyil',
        ];
    }
}
