<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ReservationUpdateRequest extends FormRequest
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
            'image'=>'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'title'=>'required|min:5|max:50',
            'short_description'=>'required|min:5|max:255',
            'title'=>'required|min:5|max:50',
            'subtitle'=>'required|min:5|max:50'
        ];
    }
}
