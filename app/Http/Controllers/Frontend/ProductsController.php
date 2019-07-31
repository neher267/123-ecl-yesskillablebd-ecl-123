<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
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
    	$title = "Shop";
    	return view($this->viewPath.'products', compact('title'));
    }

    /**
	* Show the application Courses Details Page.
	*/
    public function show($course)
    {
    	$title = "Product Details";
    	return view($this->viewPath.'product-details', compact('title'));
    }
}
