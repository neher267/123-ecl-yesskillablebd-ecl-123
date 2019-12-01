<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Requests\InquiryStore;
use App\Http\Controllers\Controller;
use App\Inquiry;

class InquriesController extends Controller
{
    public function store(InquiryStore $request)
    {
    	$data = $request->all();
    	// dd($data);
    	if($request->course_id) {
    		$data['course_id'] = $request->course_id;            
    		$data['message'] = 'Course Registration';            
    	}
    	if ($request->course_ids) {
            $chield_ids = '';
            foreach ($request->course_ids as $id) {
                $chield_ids .= $id.',';
            }
            $data['chield_ids'] = $chield_ids;
        }

      Inquiry::create($data);
      // For Adds
      if($request->course_ids) {
      	return redirect('thank-you');
      }
      return redirect('thanks');
    }
}
