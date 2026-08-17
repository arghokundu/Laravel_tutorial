<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CrudRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fullname'=>'required|min:2|max:30|regex:/^[A-Za-z]+$/',
            'email'=>'required|email',
            'address'=>'required|min:2|max:50',
            'pin'=>'required|digits:6|regex:/^[0-9]+$/',
            'phoneno'=>'required|digits:10|regex:/^[0-9]+$/',
            'state'=>'required|numeric',
            'district'=>'required|numeric',
            'subdivision'=>'required|numeric',
        ];
    }
    public function messages(): array
    {
        return [
        'fullname.required'=>"Full Name Is Require",
        'email.required'=>"email Name Is Require",
        'address.required'=>"address  Is Require",
        'pin.required'=>"pin Is Require",
        'phoneno.required'=>"phoneno Is Require",
        'state.required'=>"state Is Require",
        'district.required'=>"district Is Require",
        'subdivision.required'=>"Subdivision is require",
        ];
    }
}