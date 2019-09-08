<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudyInAbrodeController extends Controller
{
    public function show($country)
    {
    	$title = "Study in $country";
    	if($country == "usa")
    	{
    		return view('pages.frontend.study-in-abrode.usa', compact('title'));
    	}
    	else if($country == "germany")
    	{
    		return view('pages.frontend.study-in-abrode.germany', compact('title'));
    	}
    	else
    		return back();
    }
}
