<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Account;

class StudentCourseFeeController extends Controller
{
    protected $path = 'pages.backend.students.course-fee.';
        
    
    public function edit()
    {
        $user = User::findOrFail(request()->student_id);

        if($user->account == null){
            $account =  new Account;
            $account->user()->associate($user)->save();
        }

    	$result = User::findOrFail(request()->student_id)->courses()->where('course_id', request()->course_id)->first();
    	$page_title = 'Manage Course Fee for Specific Student';
        return view($this->path.'edit', compact('page_title', 'result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    	$student = User::findOrFail($request->student_id);
        $after_discount = $this->after_discount_calculate($request->course_fee, $request->after_discount);
        $student->courses()
        	->updateExistingPivot($request->course_id, 
        	['course_fee' => $request->course_fee, 'after_discunt'=>$after_discount, 'discount_per'=>$request->after_discount]);

        $account =  $student->account;
        $account->credit = $account->credit + $after_discount;
        $account->save();

        return redirect('dashboard/students/'.$request->student_id.'/courses')->withSuccess("Update Success!");
    }   

    private function after_discount_calculate($course_fee, $discount)
    {
        if($discount <= 0){
            return $course_fee;
        }
        return (int)$course_fee - (int)($course_fee * $discount)/100;
    } 
    
}
