<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FilialStoreRequest extends FormRequest
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
            'name'=>'required|min:5|max:50',
            'phone'=>'required|min:12|max:20',
            'email'=>'required|email',
            'about'=>'required|min:10|max:255',
            'location'=>'required|min:10|max:200',
            'isMain'=>'nullable'
        ];
    }
}
