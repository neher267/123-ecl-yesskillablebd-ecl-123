<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseStoreRequest extends FormRequest
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
            'name'=>'required|string|max:50',
            'summary'=>'required|string',
            'about'=>'required|string',
            'duration'=>'required',
            'fee'=>'required',
            'thumnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:400',
            'hands_on'=>'required|min:1|string|max:1',   
            // 'title'=>'required|string|max:191',                   
            // 'learning'=>'required|string',
            // 'enroll'=>'required|string',
            // 'job_opp'=>'required|string',            
            // 'background' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:400',
            // 'referance' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:400',
        ];
    }
}
