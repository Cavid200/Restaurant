<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PersonalStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'image'=>'required|image|mimes:png,jpg,jpeg|max:2048',
            'fullname'=>'required|min:5|max:50',
            'profession'=>'required|min:5|max:50',
            'about'=>'required|min:5|max:250',
            'isActive'=>'nullable'
        ];
    }
}
