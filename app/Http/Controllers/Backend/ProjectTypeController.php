<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectTypeRequest;
use App\Http\Requests\UpdateProjectTypeRequest;
use App\Http\Controllers\Controller;
use App\ProjectType;
use App\Service;

class ProjectTypeController extends Controller
{
    use RrsourceDelete;

    protected $path = 'pages.backend.successful-case.';
    protected $route_name = "project-types";
    private $image_path = "images/Successful-Cases";
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {             
        $page_title = "Success Story";
        $name = $this->route_name;
        $results = ProjectType::get();
        return view($this->path.'index', compact('name', 'page_title', 'results'));
    }

    public function projects(ProjectType $project_type)
    {
        $page_title = $project_type->service->name.": All Projects";
        $name = $this->route_name;
        $results = $project_type->projects()->get();
        return view('pages.backend.projects.index', compact('name', 'page_title', 'results', 'project_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_success_case(Service $service)
    {
        $services = Service::orderBy('name')->get();
        $page_title = "Create success story for: $service->name";
        return view($this->path.'create', compact('page_title', 'service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectTypeRequest $request)
    {
        $data = new ProjectType;
        
        $data->service_id = $request->service_id;
        $data->description = $request->description;

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $data->image = $this->image_path.'/'.$imageName;
        $request->image->move(public_path($this->image_path), $imageName);

        $imageName = time().'1.'.$request->image1->getClientOriginalExtension();
        $data->image1 = $this->image_path.'/'.$imageName;
        $request->image1->move(public_path($this->image_path), $imageName);

        $imageName = time().'2.'.$request->image2->getClientOriginalExtension();
        $data->image2 = $this->image_path.'/'.$imageName;
        $request->image2->move(public_path($this->image_path), $imageName);

        $imageName = time().'3.'.$request->image3->getClientOriginalExtension();
        $data->image3 = $this->image_path.'/'.$imageName;
        $request->image3->move(public_path($this->image_path), $imageName);
        
        $data->save();

        return back()->withSuccess("Success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectType $project_type)
    {
        //dd($project_type);
        
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectType $project_type)
    {
        $result = $project_type;
        $page_title = $project_type->name.": Edit";
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
    public function update(UpdateProjectTypeRequest $request, ProjectType $project_type)
    {
        $data = $project_type;
        $data->description = $request->description;
        
        if(!empty($request->image)) 
        {
            $this->delete($project_type->src);
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path($this->image_path), $imageName);
            $data->image = $this->image_path.'/'.$imageName;        
        }    

        if(!empty($request->image1)) 
        {
            $this->delete($project_type->src);
            $imageName = time().'.'.$request->image1->getClientOriginalExtension();
            $request->image1->move(public_path($this->image_path), $imageName);
            $data->image1 = $this->image_path.'/'.$imageName;        
        } 

        if(!empty($request->image2)) 
        {
            $this->delete($project_type->src);
            $imageName = time().'.'.$request->image2->getClientOriginalExtension();
            $request->image2->move(public_path($this->image_path), $imageName);
            $data->image2 = $this->image_path.'/'.$imageName;        
        } 

        if(!empty($request->image3)) 
        {
            $this->delete($project_type->src);
            $imageName = time().'.'.$request->image3->getClientOriginalExtension();
            $request->image3->move(public_path($this->image_path), $imageName);
            $data->image3 = $this->image_path.'/'.$imageName;        
        }  

        $data->save();

        return redirect('dashboard/project-types')->withSuccess("Success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectType $project_type)
    {
        $this->delete($project_type->src);
        $project_type->delete();
        return back()->withSuccess("Success!");
    }
}
