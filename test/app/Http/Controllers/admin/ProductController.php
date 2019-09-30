<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use App\ProductImage;
use App\ProductAttribute;
use App\ProductCategory;
use App\Category;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{

    public function __construct()
    {
      
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $product = Product::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $product = Product::latest()->paginate($perPage);
        }

        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();   
        return view('admin.product.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:products',
            'rate' => 'numeric|required',
            'color' => 'alpha|required',
            'quantity' => 'numeric|required|',
            'image.*'=>'image|mimes:jpg,jpeg,bmp,png,gif|max:2045',
            'category'=>'required',
            'subcategory'=>'required'
        ]);
        $requestData = $request->all();
  

      $product=new Product;

      $product_attribute=new ProductAttribute;
      $product_category=new ProductCategory;

      $product->name=$request->name;
           $product->rate=$request->rate;
           if($product->save())
           {
            
               






            if($request->hasFile('image'))
            {
        
                $filename="";
            $files = $request->file('image');
            $location='Product Image/';
            foreach($files as $file){
            $filename = time()."_".$file->getClientOriginalName();
          
            $result=$file->move($location,$filename);
          
          $product_image=new ProductImage;
            $product_image->name=$location.$filename;
            $product_image->product_id=$product->id;
            $product_image->save();
            }
 
        }

// product attribte insert data 
        $product_attribute->color=$request->color;

 $product_attribute->quantity=$request->quantity;
 $product_attribute->product_id=$product->id;
 $product_attribute->save();
 

// product category table data  insert data 
 $product_category->product_id=$product->id;

 $product_category->category_id=$request->subcategory;
 $product_category->save();
//  
           }
          


        return redirect('admin/product')->with('flash_message', 'Product added!');
       
        
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit(Request $request ,Product $product)
    {
         
        
     
        $categories = Category::all(); 
         
        return view('admin.product.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
  
        $this->validate($request, [
           
            'rate' => 'numeric',
            'color' => 'alpha',
            'quantity' => 'numeric',
            'image.*'=>'image|mimes:jpg,jpeg,bmp,png,gif|max:2045',
   
      
        ]);
    

        $products=array('name'=>$request->name,"rate"=>$request->rate);

        DB::table('products')->where('id', $id)->update($products);
       

       
        $products_attributes=array('color'=>$request->color,"quantity"=>$request->quantity,'product_id'=>$id);

        DB::table('product_attributes')->where('product_id', $id)->update($products_attributes);

        $products_categories=array('category_id'=>$request->subcategory,'product_id'=>$id);

        DB::table('category_product')->where('product_id', $id)->update( $products_categories);
    
        if($request->hasFile('image'))
        {
         
            $filename="";
        $files = $request->file('image');
        $location='Product Image/';
     
        $imageName=ProductImage::where('product_id',$id)->get();
  
     
        foreach($files as $file){
        $filename = time()."_".$file->getClientOriginalName();
      
       
  

    
       
      
   
      $product_image=new ProductImage;
        $product_image->name=$location.$filename;
        $product_image->product_id=$id;
        $product_image->save();
        $result=$file->move($location,$filename);
        echo "1";
    }
       
 }
  
        
        
                
 return redirect('admin/product')->with('flash_message', 'Product updated!');
        
        
        
        
        
        
        
        
}

 



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('admin/product')->with('flash_message', 'Product deleted!');
    }







public function imageDelete($id)
{
    
    $imageName=ProductImage::where('id',$id)->get();

    foreach ($imageName as $img) {
     unlink(public_path($img->name));
    }
    ProductImage::where('id',$id)->delete();
    return back()->with('flash_message', 'Image deleted!');
}


}
