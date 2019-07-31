<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\StudentRegistrationRequest;
use App\Http\Controllers\Controller;
use App\User;
use App\StudentInfo;

class StudentRegistrationController extends Controller
{
	private $image_path = "images/Profile";

    public function __construct()
    {
        //$this->middleware('Backend');
	}

    public function index()
    {
        $name = 'students';
    	$page_title = "All Students";
    	$results = User::with('account')->where('role' , 3)->latest()->get();
        return view('pages.backend.students.index', compact('results', 'page_title', 'name'));
    }

    public function create_student(StudentInfo $student_info)
    {
    	$name = 'students';
    	$page_title = "Register a Student";
    	return view('pages.backend.students.create', compact('student_info', 'page_title', 'name'));
    }


    public function store(StudentRegistrationRequest $request)
    {
        //dd($request->all());
    	$data = new User;
        
        if(!empty($request->image)){
        	$imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path($this->image_path), $imageName);  
            $data->image = $this->image_path.'/'.$imageName;             
        }

        $data->name = $request->name;
        $data->student_info_id = $request->student_info_id;
        $data->gender = $request->gender;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->password = bcrypt($request->password);
        $data->role = 3;
        $data->save();
        $this->update_student_info($request->student_info_id);
    	return redirect('dashboard/students')->withSuccess('Student Registration is Success!');
    }    

    public function update_student_info($id)
    {
    	$info = StudentInfo::find($id);
    	$info->status = 3;
    	$info->save();
    	return;
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
    	$user->delete();
    	return back()->withSuccess('Delete success!');
    }
}
