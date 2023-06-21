<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Str;
use Image;
class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function add()
    {
    	return view('admin.service.add');
    }

    public function store(Request $request)
    {
    	 $validatedData = $request->validate([
    	    'name' => 'required',
    	    'description' => 'required',
    	   
    	   
    	]);
    		$service = new Service();
    	    $service->name = $request->name;
    	    $service->description = $request->description;


    	   if ($request->image > 0) {
    	    $image = $request->file('image');
    	    $img = time() . '.'. $image->getClientOriginalExtension();
    	    $location = public_path('backend/service/' .$img);
    	    Image::make($image)->save($location);
    	    $service->image = $img;
    	   }
    	    $service->save();
    	      if ($service) {           
    	      $notification=array(
    	        'messege'=>'service Added Successfully',
    	        'alert-type'=>'success'
    	         );
    	       return Redirect()->back()->with($notification);
    	 }
    }

    public function all()
    {
    	$services=Service::all();
    	return view('admin.service.index',compact('services'));
    }


    public function delete($id)
       {

         $delete = Service::find($id);
         $delete->delete();
          $notification=array(
               'messege'=>'service Deleted Successfully',
               'alert-type'=>'success'
                );
              return Redirect()->back()->with($notification);

        }


        public function edit($id)
        {
        	$edit_data=Service::find($id);
        	return view('admin.service.edit',compact('edit_data'));
        }


        public function update(Request $request,$id)
        {
        	$validatedData = $request->validate([
        	        'name' => 'nullable',
        	        'description' => 'nullable',
        	        'image' => 'nullable',
        	    ]);
        	    $service =Service::find($id);
        	    $service->name=$request->name;
        	    $service->description=$request->description;
        	    
        	   if ($request->image > 0) {
        	    $image = $request->file('image');
        	    $img = time() . '.'. $image->getClientOriginalExtension();
        	    $location = public_path('backend/service/' .$img);
        	    Image::make($image)->save($location);
        	    $service->image = $img;
        	   }
        	    $service->save();
        	      if ($service) {           
        	      $notification=array(
        	        'messege'=>'Service Updated Successfully',
        	        'alert-type'=>'success'
        	         );
        	       return Redirect()->route('all.service')->with($notification);
        	 }
        }
}
