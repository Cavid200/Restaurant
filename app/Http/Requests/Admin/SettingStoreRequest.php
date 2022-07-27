<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingStoreRequest extends FormRequest
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
            'logo'=>'required|image|mimes:png,jpg,jpeg|max:2048',
            'footer'=>'required|min:5|max:50',
            'about'=>'required|min:5|max:255',
            'address'=>'required|min:5|max:100',
            'email'=>'required|email',
            'isfilial'=>'nullable',
            'phone'=>'required|min:13|max:20'
        ];
    }
}
