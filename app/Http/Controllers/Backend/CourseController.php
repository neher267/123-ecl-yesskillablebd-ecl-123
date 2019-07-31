<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Training\Course;
use App\Models\Training\Category;
use App\Http\Requests\CourseStoreRequest;

class CourseController extends Controller
{
    use RrsourceDelete;

    protected $path = 'pages.backend.categories.courses.';
    protected $route_name = "courses";
    private $image_path = "images/courses";
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {             
        $page_title = "All Courses";
        $name = $this->route_name;
        $results = Course::latest()->get();
        return view($this->path.'index', compact('name', 'page_title', 'results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Course";
        $name = $this->route_name;
        $categories = Category::orderBy('name', 'asc')->get();
        return view($this->path.'create', compact('page_title','categories', 'name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseStoreRequest $request)
    {
        $data = new Course;
        $imageName1 = time().'thumnail.'.$request->thumnail->getClientOriginalExtension();
        $request->thumnail->move(public_path($this->image_path), $imageName1);
        
  //       $imageName2 = time().'background.'.$request->background->getClientOriginalExtension();
  //       $request->background->move(public_path($this->image_path), $imageName2);        
  //       if(!empty($request->referance)){ 
  //       	$imageName3 = time().'referance.'.$request->referance->getClientOriginalExtension();
		//  	$request->referance->move(public_path($this->image_path), $imageName3);
		//  	$data->referance = $this->image_path.'/'.$imageName3;        
		// }

		$data->name = $request->name;
        $data->slug = strtolower(str_replace(' ', '-', $request->name));
        $data->slug = strtolower(str_replace('/', '-', $data->slug));
        $data->category_id = $request->category_id;
        // $data->title = $request->title;
        $data->hands_on = (bool)$request->hands_on;
        $data->summary = $request->summary;
        $data->about = $request->about;
        // $data->learning = $request->learning;
        // $data->enroll = $request->enroll;
        // $data->job_opp = $request->job_opp;
        $data->duration = $request->duration;
        $data->fee = $request->fee;
        $data->thumnail = $this->image_path.'/'.$imageName1;
        // $data->background = $this->image_path.'/'.$imageName2;
        
        $data->save();        
        return back()->withSuccess("Success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //dd($course);
        
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $result = $course;
        $page_title = $course->name.": Edit";
        $name = $this->route_name;
        $categories = Category::orderBy('name', 'asc')->get();
        return view($this->path.'edit', compact('page_title', 'result', 'name', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $data = $course;
        $data->name = $request->name;
        $data->order = $request->order;
        $data->status = $request->status;
        $data->category_id = $request->category_id;
        // $data->title = $request->title;
        $data->hands_on = (bool)$request->hands_on;
        $data->summary = $request->summary;
        $data->about = $request->about;
        // $data->learning = $request->learning;
        // $data->enroll = $request->enroll;
        // $data->job_opp = $request->job_opp;
        $data->duration = $request->duration;
        $data->fee = $request->fee;
        
        if(!empty($request->thumnail)){
            $request->validate(['thumnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:400']); 
            $this->delete($course->thumnail);     
            $imageName = time().'thumnail.'.$request->thumnail->getClientOriginalExtension();
            $request->thumnail->move(public_path($this->image_path), $imageName);
            $data->thumnail = $this->image_path.'/'.$imageName;       
        }

        // if(!empty($request->background)){
        //     $request->validate(['background' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:400']); 
        //     $this->delete($course->background);            
        //     $imageName = time().'background.'.$request->background->getClientOriginalExtension();
        //     $request->background->move(public_path($this->image_path), $imageName);
        //     $data->background = $this->image_path.'/'.$imageName;       
        // }if(!empty($request->referance)){
        //     $request->validate(['referance' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:400']);   
        //     $this->delete($course->referance);
        //     $imageName = time().'referance.'.$request->referance->getClientOriginalExtension();
        //     $request->referance->move(public_path($this->image_path), $imageName);
        //     $data->referance = $this->image_path.'/'.$imageName;       
        // }
        $data->save();

        return redirect('dashboard/courses')->withSuccess("Update Success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $this->delete($course->thumnail, $course->background, $course->referance);
        $course->delete();
        return back()->withSuccess("Success!");
    }
}
