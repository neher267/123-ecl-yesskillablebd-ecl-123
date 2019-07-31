<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
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
    public function index()
    {
    	$title = "News";
    	return view($this->viewPath.'news', compact('title'));
    }

    /**
	* Show the application Courses Details Page.
	*/
    public function show($course)
    {
    	$title = "News Details";
    	return view($this->viewPath.'news-details', compact('title'));
    }
}
