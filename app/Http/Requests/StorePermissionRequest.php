<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePermissionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'=>'required|max:255|string',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed|min:6|string',
        ];
    }
}
