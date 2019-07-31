<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PageStoreRequest;
use App\Page;

class PageController extends Controller
{
    protected $path = 'pages.backend.pages.';
    protected $route_name = "pages";
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {             
        $page_title = "Pages";
        $name = $this->route_name;
        $results = Page::orderBy('name', 'asc')->get();
        return view($this->path.'index', compact('name', 'page_title', 'results'));
    }

    public function projects(Page $page)
    {
        $page_title = $page->name.": All Projects";
        $name = $this->route_name;
        $results = $page->projects()->get();
        return view('pages.backend.projects.index', compact('name', 'page_title', 'results', 'page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Create New Page";
        return view($this->path.'create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageStoreRequest $request)
    {
        $data = new Page;
        $data->name = $request->name;
        $data->slug = str_slug($request->name, "-");
        $data->s_description = $request->s_description;
        $data->description = $request->description;
        $data->save();

        return back()->withSuccess("Success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //dd($page);
        
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $result = $page;
        $page_title = $page->name.": Edit";
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
    public function update(PageStoreRequest $request, Page $page)
    {
        $data = $page;
        $data->name = $request->name;
        // $data->slug = str_slug($request->name, "-");
        $data->s_description = $request->s_description;
        $data->description = $request->description;        
        $data->priority = $request->priority;        
        $data->save();

        return redirect('dashboard/pages')->withSuccess("Success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return back()->withSuccess("Success!");
    }
}
