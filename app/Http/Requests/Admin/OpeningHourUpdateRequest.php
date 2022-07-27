<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class OpeningHourUpdateRequest extends FormRequest
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
            'title'=>'required|min:5|max:50',
            'subtitle'=>'required|min:5|max:150',
            'week_day1'=>'required|min:5|max:50',
            'start_time1'=>'required|min:5|max:20',
            'end_time1'=>'required|min:5|max:20',
            'week_day2'=>'required|min:5|max:50',
            'start_time2'=>'required|min:5|max:20',
            'end_time2'=>'required|min:5|max:20',
            'phone'=>'required|min:12|max:20',
            'video'=>'nullable | mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv |max:90000'
        ];
    }
}
