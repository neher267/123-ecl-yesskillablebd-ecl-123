<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StudentTransaction;

class InvoiceController extends Controller
{
    public function show(StudentTransaction $student_transaction)
    {
    	$student = $student_transaction->user;
    	$course = $student->courses()->where('course_id', $student_transaction->course_id)->first();
    	$tran_amount = StudentTransaction::where('course_id', $student_transaction->course_id)
    			->where('user_id', $student->id)
    			->where('id', '<=', $student_transaction->id)
    			->get()
    			->sum('amount');

    	
    	return view('documents.invoice', compact('student_transaction', 'student', 'course', 'tran_amount'));
    }
}
