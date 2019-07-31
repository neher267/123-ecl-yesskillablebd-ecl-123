<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Training\Course;
use DB;


class StudentCourseController extends Controller
{
	protected $path = 'pages.backend.students.courses.';
    protected $route_name = "student.courses";

    public function index(User $user)
    {
        $page_title = "$user->name : All Registered Courses";
        $name = $this->route_name;
        $results = $user->courses;
        return view($this->path.'index', compact('name', 'page_title', 'results', 'user'));
    }

    public function create(User $user)
    {
    	$page_title = "Select Courses";
        $name = $this->route_name;    
        $register_courses = $user->courses()->pluck('course_id')->toArray(); 
        $results = Course::orderBy('name', 'asc')->get();
        return view($this->path.'create', compact('name', 'page_title', 'results', 'user', 'register_courses'));
    }

    public function store(User $user, Request $request)
    {
    	$courses = $user->courses()->attach($request->courses, ['active'=>1]);

        return redirect("dashboard/students/$user->id/courses")->withSuccess('Course Registration Successfull');
    }

    public function detach(Request $request)
    {
        $student = User::find($request->student_id);
        $course = Course::find($request->course_id);
        if ($student != null && $course != null) {
            $student->courses()->updateExistingPivot($course->id, ['active' => 0]);
        }
        return back()->withSuccess('Deactived!');
        
    }    
}
