<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MealStoreRequest extends FormRequest
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
            'name'=>'required|min:3|max:50',
            'ingredient'=>'required|min:3|max:200',
            'price'=>'required|min:1|max:4',
            'discount_price'=>'nullable|min:1|max:4',
            'image'=>'required|image|mimes:png,jpg,jpeg|max:2048',
            'categories'=>'required|exists:categories,id',
            'isActive'=>'nullable',
            'isDiscount'=>'nullable',
            'isEditor'=>'nullable',
        ];
    }
}
