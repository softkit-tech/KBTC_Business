<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;
use Image;
class BlogController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
    	return view('admin.blog.add');
    }

    public function store(Request $request)
    {
    	 $validatedData = $request->validate([
    	    'name' => 'required',
    	    'description' => 'required',
    	    'image' => 'required',
    	   
    	]);
    		$blog = new Blog();
    	    $blog->name = $request->name;
    	    $blog->description = $request->description;
    	    $blog->date = $request->date;


    	   if ($request->image > 0) {
    	    $image = $request->file('image');
    	    $img = time() . '.'. $image->getClientOriginalExtension();
    	    $location = public_path('backend/blog/' .$img);
    	    Image::make($image)->save($location);
    	    $blog->image = $img;
    	   }
    	    $blog->save();
    	      if ($blog) {           
    	      $notification=array(
    	        'messege'=>'Blog Added Successfully',
    	        'alert-type'=>'success'
    	         );
    	       return Redirect()->back()->with($notification);
    	 }
    }

    public function all()
    {
    	$blog=Blog::all();
    	return view('admin.blog.index',compact('blog'));
    }


    public function delete($id)
       {

         $delete = Blog::find($id);
         $delete->delete();
          $notification=array(
               'messege'=>'service Deleted Successfully',
               'alert-type'=>'success'
                );
              return Redirect()->back()->with($notification);

        }


        public function edit($id)
        {
        	$edit_data=Blog::find($id);
        	return view('admin.blog.edit',compact('edit_data'));
        }


        public function update(Request $request,$id)
        {
        	$validatedData = $request->validate([
        	        'name' => 'nullable',
        	        'description' => 'nullable',
        	        'image' => 'nullable',
        	    ]);
        	    $blog =Blog::find($id);
        	    $blog->name=$request->name;
        	    $blog->description=$request->description;
        	    $blog->date=$request->date;
        	    
        	   if ($request->image > 0) {
        	    $image = $request->file('image');
        	    $img = time() . '.'. $image->getClientOriginalExtension();
        	    $location = public_path('backend/blog/' .$img);
        	    Image::make($image)->save($location);
        	    $blog->image = $img;
        	   }
        	    $blog->save();
        	      if ($blog) {           
        	      $notification=array(
        	        'messege'=>'Blog Updated Successfully',
        	        'alert-type'=>'success'
        	         );
        	       return Redirect()->route('all.blog')->with($notification);
        	 }
        }



}
