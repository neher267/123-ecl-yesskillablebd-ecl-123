<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\InquiryStore;
use App\Http\Controllers\Controller;
use App\Inquiry;

class InquriesController extends Controller
{
    public function store(InquiryStore $request)
    {
    	Inquiry::create($request->all());

        return back()->withSuccess("Thank You for your Inquiry. We will contact you soon.");
    }
}
