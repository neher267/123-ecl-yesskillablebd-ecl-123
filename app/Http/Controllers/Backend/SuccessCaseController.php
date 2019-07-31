<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SuccessCase;

class SuccessCaseController extends Controller
{
    use RrsourceDelete;

    protected $path = 'pages.backend.success-case.';
    protected $route_name = "success-case";
    private $image_path = "images/success-case";
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {             
        $page_title = "Success Case";
        $name = $this->route_name;
        $results = SuccessCase::latest()->get();
        return view($this->path.'index', compact('name', 'page_title', 'results'));
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add New";
        return view($this->path.'create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	//dd($request->all());
	$request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:400']);
	$successCaseName = time().'.'.$request->image->getClientOriginalExtension();
	$request->image->move(public_path($this->image_path), $successCaseName);

	$data = new SuccessCase;
	$data->title = $request->title;
	$data->body = $request->body;
	$data->image = $this->image_path.'/'.$successCaseName;
	$data->save();

	return back()->withSuccess("Success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SuccessCase $successCase)
    {
        //dd($successCase);
        
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SuccessCase $successCase)
    {
        $result = $successCase;
        $page_title = $successCase->name.": Edit";
        $name = $this->route_name;
        return view($this->path.'edit', compact('page_title', 'result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuccessCase $successCase)
    {
	$data = $successCase;
	$data->title = $request->title;
	$data->body = $request->body;
        
	if(!empty($request->image)) 
	{
		$this->delete($successCase->image);
		$request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:400']);
		$successCaseName = time().'.'.$request->image->getClientOriginalExtension();
		$request->image->move(public_path($this->image_path), $successCaseName);      
		$data->image = $this->image_path.'/'.$successCaseName;
	} 

	$data->save();

	return redirect('dashboard/success-case')->withSuccess("Update Success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuccessCase $successCase)
    {
        $this->delete($successCase->image);
        $successCase->delete();
        return back()->withSuccess("Success!");
    }
}
