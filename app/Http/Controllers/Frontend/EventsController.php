<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
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
    	$title = "Events";
    	return view($this->viewPath.'events', compact('title'));
    }

    /**
	* Show the application Courses Details Page.
	*/
    public function show($course)
    {
    	$title = "Event Details";
    	return view($this->viewPath.'event-details', compact('title'));
    }
}
