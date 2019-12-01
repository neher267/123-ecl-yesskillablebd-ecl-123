<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InquiryStore extends FormRequest
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
            'name'=>['required', 'string', 'max:50', 'min:3'],
            'mobile'=>['required', 'digits_between:11,14'],
            'message'=>['nullable', 'string', 'min:3']
        ];
    }
}
