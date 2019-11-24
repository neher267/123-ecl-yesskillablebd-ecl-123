<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentInfoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'mobile' => 'required|max:14|min:11|unique:student_infos',
            'email' => 'nullable|email|max:50',
            'location' => 'nullable|string|max: 100',
            'current_institute' => 'required|string|max:191',
            'qualifications' => 'required|string|min:10',
        ];
    }
}
