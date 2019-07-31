<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Account;

class StudentAccountController extends Controller
{
    public function index(User $user)
    {
    	//dd($user->account);
    	$page_title = $user->name.' Account Details';
    	return view('pages.backend.account.view', compact('user', 'page_title'));
    }

    
}
