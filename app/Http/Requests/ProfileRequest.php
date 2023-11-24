<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name'=>'required|between:8,20',
            'email'=>'|required|email',
            'password'=>'required|confirmed|min:9|max:50',
            'bio' =>'required',
            'image'=>'image|mimes:jpg,jpeg,svg|max:10240'
        ];
    }
}
