<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogUpdateRequest extends FormRequest
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
            'title'=>'required|min:3|max:50',
            'description'=>'required|min:3|max:250',
            'image'=>'required|image|mimes:png,jpg,jpeg|max:2048',
            'categories*'=>'required|exists:categories,id',
            'tags*'=>'required|exists:tags,id',
            'isActive'=>'nullable',
        ];
    }
}
