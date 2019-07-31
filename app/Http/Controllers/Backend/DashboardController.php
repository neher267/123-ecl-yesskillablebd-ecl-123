<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Service;
use App\Inquiry;
use App\Product;
use App\Order;

class DashboardController extends Controller
{
    public function index() 
    {
        $users = User::get()->count();
    	$inquiryes = Inquiry::get()->count();        
    	return view('pages.backend.dashboard', compact('users', 'inquiryes'));
    }

    public function successful_cases() 
    {
    	return view('pages.backend.successful-case.index');
    }   
    
}
