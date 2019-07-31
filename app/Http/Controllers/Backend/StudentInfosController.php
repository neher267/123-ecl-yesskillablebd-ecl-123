<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\StudentInfoRequest;
use App\Http\Controllers\Controller;
use App\StudentInfo;

class StudentInfosController extends Controller
{
    protected $path = 'pages.backend.student-infos.';
    protected $route_name = "student-infos";
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {             
        $page_title = "All Student Informations";
        $name = $this->route_name;
        $results = StudentInfo::latest()->get();
        return view($this->path.'index', compact('name', 'page_title', 'results'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Student Infos";
        $name = $this->route_name;
        return view($this->path.'create', compact('page_title', 'name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentInfoRequest $request)
    {
        $data = new StudentInfo;
        $data->name = $request->name;
        $data->mobile = $request->mobile;
        $data->email = $request->email;
        $data->current_institute = $request->current_institute;
        $data->qualifications = $request->qualifications;
        $data->save();

        return back()->withSuccess("Success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(StudentInfo $student_info)
    {
        //dd($student_info);
        
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentInfo $student_info)
    {
        $result = $student_info;
        $page_title = $student_info->name.": Edit";
        $name = $this->route_name;
        return view($this->path.'edit', compact('page_title', 'result', 'name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentInfo $student_info)
    {
        $data = $student_info;
        $data->name = $request->name;
        $data->mobile = $request->mobile;
        $data->email = $request->email;
        $data->current_institute = $request->current_institute;
        $data->qualifications = $request->qualifications;    

        $data->save();

        return redirect('dashboard/student-infos')->withSuccess("Update Success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentInfo $student_info)
    {
        $student_info->delete();
        return back()->withSuccess("Success!");
    }
}
