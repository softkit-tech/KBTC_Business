<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Str;
use Image;
class SliderController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function add()
    {
    	return view('admin.slider.add');
    }

    public function store(Request $request)
    {
    	 $validatedData = $request->validate([
    	    'name' => 'required',
    	    'second_name' => 'required',
    	    'three_name' => 'required',
    	    'image' => 'nullable',
    	   
    	]);
    		$slider = new Slider();
    	    $slider->name = $request->name;
    	    $slider->second_name = $request->second_name;
    	    $slider->three_name = $request->three_name;


    	   if ($request->image > 0) {
    	    $image = $request->file('image');
    	    $img = time() . '.'. $image->getClientOriginalExtension();
    	    $location = public_path('backend/slider/' .$img);
    	    Image::make($image)->save($location);
    	    $slider->image = $img;
    	   }
    	    $slider->save();
    	      if ($slider) {           
    	      $notification=array(
    	        'messege'=>'slider Added Successfully',
    	        'alert-type'=>'success'
    	         );
    	       return Redirect()->back()->with($notification);
    	 }
    }

    public function all()
    {
    	$sliders=Slider::all();
    	return view('admin.slider.index',compact('sliders'));
    }


    public function delete($id)
       {

         $delete = Slider::find($id);
         $delete->delete();
          $notification=array(
               'messege'=>'Slider Deleted Successfully',
               'alert-type'=>'success'
                );
              return Redirect()->back()->with($notification);

        }


        public function edit($id)
        {
        	$edit_data=Slider::find($id);
        	return view('admin.slider.edit',compact('edit_data'));
        }


        public function update(Request $request,$id)
        {
        
        	    $slider =Slider::find($id);
        	    $slider->name = $request->name;
    	        $slider->second_name = $request->second_name;
    	        $slider->three_name = $request->three_name;
        	    
        	    
        	   if ($request->image > 0) {
        	    $image = $request->file('image');
        	    $img = time() . '.'. $image->getClientOriginalExtension();
        	    $location = public_path('backend/slider/' .$img);
        	    Image::make($image)->save($location);
        	    $slider->image = $img;
        	   }
        	    $slider->save();
        	      if ($slider) {           
        	      $notification=array(
        	        'messege'=>'Slider Updated Successfully',
        	        'alert-type'=>'success'
        	         );
        	       return Redirect()->route('all.slider')->with($notification);
        	 }
        }
}
