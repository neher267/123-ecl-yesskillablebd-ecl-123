<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Training\Category;
use App\SkillnAble\Filters\CourseFilters;
use App\Models\Training\Course;

class CoursesController extends Controller
{
	/**
	* Frontend Pages Root path
	*
	* @var string
	*/
	protected $viewPath = 'pages.frontend.';

    /**
	* Show the application Training Popular Courses Page.
	*/
    public function index(CourseFilters $filters)
    {
        $title = "Popular Courses";
        $categories = Category::orderBy('name')->get();
        $courses = Course::filter($filters)->where('status', 1)->orderBy('order')->get();
        return view($this->viewPath.'courses', compact('title', 'categories', 'courses'));
    }

    /**
	* Show the application Courses Details Page.
	*/
    public function show(Course $course)
    {
        $title = "Course Details";

        if($course->special == 1 && $course->slug == 'bim') {
            $courses = $course->chieldCourses()->orderBy('name')->get();
            return view($this->viewPath.'special-course-details', compact('title', 'course', 'courses'));
        }

        $categories = Category::orderBy('name')->get();
        $related = $course->category->courses()->where('status', 1)
                    ->where('id', '!=', $course->id)->limit(2)->get();
        return view($this->viewPath.'course-details', compact('title', 'course', 'categories', 'related'));
    }
}
