<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use App\ProjectType;
use App\Brand;

class ProjectController extends Controller
{
    protected $path = 'pages.backend.projects.';
    protected $route_name = "projects";
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ProjectType $project_type)
    {
        $companies = Brand::where('type','Company')->orderBy('name')->get();
        $page_title = $project_type->service->name.": Add New Project";
        return view($this->path.'create', compact('page_title', 'project_type','companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ProjectType $project_type)
    {
        $data = new Project;
        $data->title = $request->title;
        $data->slug = strtolower(str_replace(' ', '-', $request->title));
        $data->slug = strtolower(str_replace('/', '-', $data->slug));
        $data->brand_id = $request->brand_id;
        $data->introduction = $request->introduction;
        $data->provided = $request->provided;
        $data->challanges_overcome = $request->challanges_overcome;
        $project_type->projects()->save($data);

        return back()->withSuccess("Success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectType $project_type, Project $project)
    {
        $companies = Brand::where('type','Company')->orderBy('name')->get();
        $page_title = $project_type->service->name." > $project->title: Edit";
        return view($this->path.'edit', compact('page_title', 'project_type', 'project','companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectType $project_type, Project $project)
    {
        $project->title = $request->title;
        $project->brand_id = $request->brand_id;
        $project->introduction = $request->introduction;
        $project->provided = $request->provided;
        $project->challanges_overcome = $request->challanges_overcome;
        $project->save();

        return redirect("dashboard/project-types/$project_type->id/projects")->withSuccess("Update Success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
