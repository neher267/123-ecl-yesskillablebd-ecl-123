<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class ServiceController extends Controller
{
    use RrsourceDelete;

    protected $path = 'pages.backend.services.';
    protected $route_name = "services";
    private $image_path = "images/Services";
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {             
        $page_title = "All Services";
        $name = $this->route_name;
        $results = Service::orderBy('name', 'asc')->get();
        return view($this->path.'index', compact('name', 'page_title', 'results'));
    }

    public function projects(Service $service)
    {
        $page_title = $service->name.": All Projects";
        $name = $this->route_name;
        $results = $service->projects()->get();
        return view('pages.backend.projects.index', compact('name', 'page_title', 'results', 'service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Create New Type";
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
        $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:900']);
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path($this->image_path), $imageName);

        $data = new Service;
        $data->is_trining = $request->is_trining;
        $data->name = $request->name;
        $data->color = $request->color;
        $data->background_color = $request->background_color;
        $data->slug = strtolower(str_replace(' ', '-', $request->name));
        $data->slug = strtolower(str_replace('/', '-', $data->slug));
        $data->short_des = $request->short_des;
        $data->description = $request->description;
        $data->image = $this->image_path.'/'.$imageName;
        $data->save();

        return back()->withSuccess("Success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //dd($service);        
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $result = $service;
        $page_title = $service->name.": Edit";
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
    public function update(Request $request, Service $service)
    {
        $data = $service;
        $data->is_trining = $request->is_trining;
        $data->name = $request->name;
        $data->color = $request->color;
        $data->background_color = $request->background_color;
        $data->slug = strtolower(str_replace(' ', '-', $request->name));
        $data->slug = strtolower(str_replace('/', '-', $data->slug));
        $data->short_des = $request->short_des;
        $data->description = $request->description;
        $data->priority = $request->priority;
        
        if(!empty($request->image)) 
        {
            $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:900']);
            $this->delete($service->image);
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path($this->image_path), $imageName);
            $data->image = $this->image_path.'/'.$imageName;        
        }     

        $data->save();

        return redirect('dashboard/services')->withSuccess("Update Success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->delete($service->image);
        $service->delete();
        return back()->withSuccess("Success!");
    }
}
