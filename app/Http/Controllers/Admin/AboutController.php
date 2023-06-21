<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\AboutUs;
use Image;
class AboutController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
        }



        public function aboutus()
         {
          $setting=DB::table('about_us')->first();
          return view('admin.about.index',compact('setting'));
         }


         public function aboutupdate(Request $request)
         {
        	  $old=$request->oldpic;
                 $id=$request->id;

                

                if($request->hasFile('image')) 
                {
                unlink('public/backend/about/'.$old);
                $photo=$request->image; 
                $filename=hexdec(uniqid()).".".$photo->getClientOriginalExtension();
                Image::make($photo)->resize(200, 200)->save('public/backend/about/'.$filename);
                  
                 AboutUs::where('id',$id)->update([
                    'image'=> $filename               
                  ]);
                  
                    $notification=array(
                   'messege'=>'about Updated Successfully',
                   'alert-type'=>'success'
                      );
                   return Redirect()->back()->with($notification);
                 }
                 $settings=AboutUs::where('id',$id)->update([ 
    	          
    	           'name' => $request->name,          
    	          
    	           
    	          
                ]);
                  $notification=array(
                   'messege'=>'AboutUs Updated Successfully',
                   'alert-type'=>'success'
                      );
                   return Redirect()->back()->with($notification);
               }
        
}
