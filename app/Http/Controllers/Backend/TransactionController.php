<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Training\Course;
use App\StudentTransaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $results = $user->transactions()->with('course')->latest()->get();
        $page_title = $user->name.' All Transactions';
        return view('pages.backend.transactions.index', compact('user','page_title', 'results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $course = Course::findOrFail(request()->course_id);
        $page_title = $user->name.' Payment Transaction';
        $course_fee = $user->payable_course($course->id)->first()->pivot->after_discunt;
        $paid_amount = StudentTransaction::where('user_id', $user->id)->where('course_id', $course->id)->sum('amount');
        $due = $course_fee - $paid_amount;
        
        return view('pages.backend.transactions.create', compact('course','user','page_title', 'due'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        if($request->amount <= 0){
            return back()->withError('Amount should be positive number');
        }
        $transaction = new StudentTransaction;
        $transaction->user_id = $user->id;
        $transaction->course_id = $request->course_id;
        $transaction->amount = $request->amount;
        $transaction->save();

        $account = $user->account;
        $account->debit = $account->debit + $request->amount;
        $account->save();

        if($request->amount >= $request->due){
            $user->courses()->updateExistingPivot($request->course_id, ['payment_status' => 1]);
        }
        return redirect("dashboard/students/$user->id/courses")->withSuccess('Payment is received successfull!');
    }
    
}
