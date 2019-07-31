<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Controllers\Controller;
use App\Product;
use App\Brand;

class ProductController extends Controller
{
    use RrsourceDelete;

    protected $path = 'pages.backend.product.';
    protected $route_name = "products";
    private $product_path = "images/Products";
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {             
        $page_title = "All products";
        $name = $this->route_name;
        $results = Product::latest()->get();
        return view($this->path.'index', compact('name', 'page_title', 'results'));
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Product";
        $brands = Brand::orderBy('name')->get();
        return view($this->path.'create', compact('page_title', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
    	$data = new Product;
        
        $productName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path($this->product_path), $productName);
        $data->image = $this->product_path.'/'.$productName;
        if(!empty($request->image2)) {
        $productName = time().'2.'.$request->image2->getClientOriginalExtension();
        $request->image2->move(public_path($this->product_path), $productName);
        $data->image2 = $this->product_path.'/'.$productName;
        }
        if(!empty($request->image3)){
        $productName = time().'3.'.$request->image3->getClientOriginalExtension();
        $request->image3->move(public_path($this->product_path), $productName);
        $data->image3 = $this->product_path.'/'.$productName;
        }
        if(!empty($request->image4)) {
        $productName = time().'4.'.$request->image4->getClientOriginalExtension();
        $request->image4->move(public_path($this->product_path), $productName);
        $data->image4 = $this->product_path.'/'.$productName;
        }       

        $data->name = $request->name;
        $data->brand_id = $request->brand_id;
        $data->model_no = $request->model_no;
        $data->slug = strtolower(str_replace(' ', '-', $request->name));
        $data->slug = strtolower(str_replace('/', '-', $data->slug)).'-'.str_random(3);
        $data->price = $request->price;
        $data->description = $request->description;
        $data->technical_features = $request->technical_features;
        $data->general_features = $request->general_features;
        $data->safety_and_veri = $request->safety_and_veri;
        $data->order = $request->order;

        $data->save();

        return back()->withSuccess("Success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //dd($product);
        
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $result = $product;
        $page_title = $product->name.": Edit";
        $name = $this->route_name;
        $brands = Brand::orderBy('name')->get();
        return view($this->path.'edit', compact('page_title', 'result', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $product;
        $data->name = $request->name;
        $data->brand_id = $request->brand_id;
        $data->model_no = $request->model_no;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->technical_features = $request->technical_features;
        $data->general_features = $request->general_features;
        $data->safety_and_veri = $request->safety_and_veri;
        $data->status = $request->status;
        $data->order = $request->order;
        
        if(!empty($request->image)) 
        {
        	$request->validate(['image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:400']);    
            $this->delete($product->image);
            $productName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path($this->product_path), $productName);
            $data->image = $this->product_path.'/'.$productName;        
        }   

        if(!empty($request->image2)) {
            $request->validate(['image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:400']);       
            $this->delete($product->image2);
            $productName = time().'2.'.$request->image2->getClientOriginalExtension();
            $request->image2->move(public_path($this->product_path), $productName);
            $data->image2 = $this->product_path.'/'.$productName;
        }
        if(!empty($request->image3)){
            $this->delete($product->image3);           
            if (file_exists('public/'.$product->image3)) { unlink('public/'.$product->image3);} 
            $productName = time().'3.'.$request->image3->getClientOriginalExtension();
            $request->image3->move(public_path($this->product_path), $productName);
            $data->image3 = $this->product_path.'/'.$productName;
        }
        if(!empty($request->image4)) {
            $this->delete($product->image4);          
            if (file_exists('public/'.$product->image4)) { unlink('public/'.$product->image4);} 
            $productName = time().'4.'.$request->image4->getClientOriginalExtension();
            $request->image4->move(public_path($this->product_path), $productName);
            $data->image4 = $this->product_path.'/'.$productName;
        }  

        $data->save();

        return redirect('dashboard/products')->withSuccess("Update Success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->delete($product->image, $product->image2, $product->image3, $product->image4);     
        $product->delete();
        return back()->withSuccess("Success!");
    }
}
