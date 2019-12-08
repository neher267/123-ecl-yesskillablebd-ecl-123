<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Training\Course;

class HomeController extends Controller
{
	/**
	* Frontend Pages Root path
	*
	* @var string
	*/
	protected $viewPath = 'pages.frontend.';

	/**
	* Show the application Home Page.
	*/

    public function index()
    {
    	$title = "Home";
    	$popular_courses = Course::popular();
        $courses = Course::where('status', 1)->paginate(6);
        $all_courses = Course::where('status', 1)->get();

    	return view($this->viewPath.'index', compact('title', 'popular_courses', 'courses', 'all_courses'));
    }

    /**
	* Show the application About Page.
	*/

    public function about()
    {
    	$title = "About Us";
    	return view($this->viewPath.'about', compact('title'));
    }

    public function howItWorks() 
    {
        $title = "How It Works";
        return view($this->viewPath.'how-it-works', compact('title'));
    }

    public function placements() 
    {
        $title = "placements";
        return view($this->viewPath.'placements', compact('title'));
    }

    public function corporateTraining() 
    {
        $title = "corporate training";
        return view($this->viewPath.'corporate-training', compact('title'));
    }


    public function successCase() 
    {
        $title = "Success Case";
        $results = \App\SuccessCase::latest()->get();
        return view($this->viewPath.'success-index', compact('results','title'));
    }
    
}
