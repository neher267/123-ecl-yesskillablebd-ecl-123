<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Training\Category;

class CategoryController extends Controller
{
    protected $path = 'pages.backend.categories.';
    protected $route_name = "categories";
    private $image_path = "images/categories";
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $page_title = "All Training Categories";
        $name = $this->route_name;
        $results = Category::orderBy('name', 'asc')->get();
        return view($this->path.'index', compact('name', 'page_title', 'results'));
    }

    public function courses(Category $category)
    {
        $page_title = $category->name.": All Courses";
        $name = $this->route_name;
        $results = $category->courses()->get();
        return view($this->path.'courses.index', compact('name', 'page_title', 'results', 'Category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Category";
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
        $data = new Category;
        $data->name = $request->name;
        $data->order = $request->order;
        $data->slug = strtolower(str_replace(' ', '-', $request->name));
        $data->slug = strtolower(str_replace('/', '-', $data->slug));
        $data->name = $request->name;
        $data->save();

        return back()->withSuccess("Success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //dd($category);
        
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $result = $category;
        $page_title = $category->name.": Edit";
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
    public function update(Request $request, Category $category)
    {
        $data = $category;
        $data->name = $request->name;
        $data->order = $request->order;
        $data->save();

        return redirect('dashboard/'.$this->route_name)->withSuccess("Update Success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->withSuccess("Success!");
    }
}
