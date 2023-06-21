<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Count;
class NumberController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function add()
    {
    	return view('admin.number.add');
    }

    public function store(Request $request)
    {
    	 $validatedData = $request->validate([
    	    'name' => 'required',
    	    'icon' => 'required',
    	    'count' => 'required',
    	   
    	   
    	]);
    		$number = new Count();
    	    $number->name = $request->name;
    	    $number->count = $request->count;
    	    $number->icon = $request->icon;


    	      $number->save();
    	      if ($number) {           
    	      $notification=array(
    	        'messege'=>'number Added Successfully',
    	        'alert-type'=>'success'
    	         );
    	       return Redirect()->back()->with($notification);
    	 }
    }

    public function all()
    {
    	$count=Count::all();
    	return view('admin.number.index',compact('count'));
    }


    public function delete($id)
       {

         $delete = Count::find($id);
         $delete->delete();
          $notification=array(
               'messege'=>'service Deleted Successfully',
               'alert-type'=>'success'
                );
              return Redirect()->back()->with($notification);

        }


        public function edit($id)
        {
        	$edit_data=Count::find($id);
        	return view('admin.number.edit',compact('edit_data'));
        }


        public function update(Request $request,$id)
        {
        	$validatedData = $request->validate([
        	        'name' => 'nullable',
        	        'count' => 'nullable',
        	        'icon' => 'nullable',
        	    ]);
        	    $number =Count::find($id);
        	    $number->name=$request->name;
        	    $number->count=$request->count;
        	    $number->icon=$request->icon;
        	 
        	    $number->save();
        	      if ($number) {           
        	      $notification=array(
        	        'messege'=>'Service Updated Successfully',
        	        'alert-type'=>'success'
        	         );
        	       return Redirect()->route('all.number')->with($notification);
        	 }
        }
}
