<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class nsRequest extends FormRequest
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
            'reg_no'=>['required','min:4','max:18'],
            'name'=>['required','string'],
            'department'=>['required','string'],
            'bloodgroup'=>['required','string'],
            'DOB'=>['required','date_format:d-m-Y'],
            'user_name'=>['required','string'],
            'password'=>['required','string']           
        ];
    }
}
