<?php

namespace App\Http\Controllers\banner;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Http\Requests\BannerUpdateRequest;
use App\Banner;
use Illuminate\Http\Request;
use DB;
class BannerController extends Controller
{
   
   public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * banner display on frontend slider 
     * there is operation create banner ,
     * delete ,update
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
   //banners listing on index page banner 
    public function index(Request $request)
    {
       
            $banner = Banner::latest()->paginate($perPage);
      
        return view('admin.banner.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    //banner create view form 
    public function create()
    {
        return view('admin.banner.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    //store banner data in a database
    public function store(BannerRequest $request)
    {
  
    
        $banner=new Banner;
 
            $banner->name=$request->name;
            $banner->description=$request->description;

        // Set Banner Image in database 

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'_'.$image->getClientOriginalName();
            $destinationPath = public_path('/images');
          
            $image->move($destinationPath, $name);
            $banner->image=$name;
            $banner->save();
           
         
        }

        return redirect('admin/banner')->with('flash_message', 'Banner added!');



  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
   //specific show banner 
    public function show(Banner $banner)
    {

        return view('admin.banner.banner.show', compact('banner'));


        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
   //banner edit form display on screen
    public function edit(Banner $banner)
    {


        return view('admin.banner.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(BannerUpdateRequest $request, Banner $banner)
    {
        $location='Product Image/';
        $requestData = $request->all();
        $destinationPath = public_path('/images/');
  
      
         $image =$request->b_image;
         $file = $request->file('image');
  
       
      
      
    if($request->has('image'))
    {
  

        unlink(public_path('/images/').$image);
    $image=time()."_".$request->image->getClientOriginalName();
    $image_location = public_path("/images/");
     

    $file->move($destinationPath, $image);

    }

$data=array('name'=>$request->name,"image"=>$image,'description'=>$request->description);

 DB::table('banners')->where('id', $banner->id)->update($data);


       


        return redirect('admin/banner')->with('flash_message', 'Banner updated!');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
   //specific  banner delete  method 
    public function destroy(Banner $banner)
    {
      $banner->delete();

        return redirect('admin/banner')->with('flash_message', 'Banner deleted!');
    }



}

























