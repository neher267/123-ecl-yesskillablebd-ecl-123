<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\StudentInfoRequest as Request;
use App\Http\Controllers\Controller;
use App\Models\Training\Course;
use App\StudentInfo;

class CourseRegistrationController extends Controller
{
    public function create(Course $course)
    {
    	$selected_course = $course;
        $courses = Course::where('status', 1)->orderBy('name','asc')->get();
    	$title = "Course Registration";
        return view('pages.frontend.course-registration', compact('title', 'courses', 'course', 'selected_course'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
    	$data = new StudentInfo;
        $data->name = $request->name;
        $data->course_id = 1;
        $data->mobile = $request->mobile;
        $data->email = $request->email;
        $data->location = $request->location;
        $data->current_institute = $request->current_institute;
        $data->qualifications = $request->qualifications;
        $data->created_by = 1;
        $data->save();

        return redirect('thank-you');
    }

    public function thankyou()
    {
        $title = "Thank You";
        return view('pages.frontend.thank-you', compact('title'));
    }
}
