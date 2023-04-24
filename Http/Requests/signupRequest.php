<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
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
            'name'=>'required|max:255|string',
            'age'=>'numeric',
            'date'=>'string',
            'phone'=>'numeric',
            'web'=>'string',
            'address'=>'string'
            //
        ];
    }
    public function messages()
    {
        return[
            'name.string'=>' vui long dien ten',
            'age.numeric'=>' vui long dien tuoi',
            'date.string'=>' vui long dien ngay thang',
            'phone.numeric'=>' vui long dien dien thoai',
            'web.string'=>' vui long kiem tra lai ki tu',
            'adress.string'=>' vui long dien nhap lai dia chi',



        ];
    }
}
