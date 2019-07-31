<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Inquiry;

class InquiriesController extends Controller
{
    public function index()
    {
        $page_title = "Inquiryes";
        $inquiryes = Inquiry::where('product_id', null)->latest()->get();
        return view('pages.backend.inquiry.index', compact('inquiryes', 'page_title'));
    }  

    /*
    public function productInquries()
    {
        $page_title = "Inquiryes";
        $inquiryes = Inquiry::where('product_id', '!=', null)->latest()->get();
        return view('pages.backend.product-inquiry.index', compact('inquiryes', 'page_title'));
    }
    */

    public function show($id)
    {
        $inquiry = Inquiry::find($id);
    	$page_title = "Details";
        return view('pages.backend.inquiry.view', compact('inquiry', 'page_title'));
    }

    
    public function destroy($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->delete();
        return back()->withSuccess('Delete Success!');
    }
}
