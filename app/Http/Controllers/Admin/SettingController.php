<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Setting;
use App\Models\Contact;
use App\Models\Newslater;
use Image;
class SettingController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
        }



        public function sitesetting()
         {
          $setting=DB::table('settings')->first();
          return view('admin.site.index',compact('setting'));
         }


         public function Update(Request $request)
         {
        	  $old=$request->oldpic;
                 $id=$request->id;

                

                if($request->hasFile('image')) 
                {
                unlink('public/backend/setting/'.$old);
                $photo=$request->image; 
                $filename=hexdec(uniqid()).".".$photo->getClientOriginalExtension();
                Image::make($photo)->resize(200, 200)->save('public/backend/setting/'.$filename);
                  
                 Setting::where('id',$id)->update([
                    'image'=> $filename               
                  ]);
                  
                    $notification=array(
                   'messege'=>'Setting Updated Successfully',
                   'alert-type'=>'success'
                      );
                   return Redirect()->back()->with($notification);
                 }
                 $settings=Setting::where('id',$id)->update([ 
    	          
    	           'name' => $request->name,          
    	           'email' => $request->email,
    	           'address' => $request->address,
    	           'facebook' => $request->facebook,
    	           'instagram' => $request->instagram,
                   'twitter' => $request->twitter,
                   'linkend' => $request->linkend,
                   'phone' => $request->phone,
                   'title' => $request->title,
    	           
    	          
                ]);
                  $notification=array(
                   'messege'=>'Setting Updated Successfully',
                   'alert-type'=>'success'
                      );
                   return Redirect()->back()->with($notification);
               }


               public function allContact()
               {
                $contact=Contact::all();
                return view('admin.site.contact',compact('contact'));
               }

               public function allnewslater()
               {
                $newslater=Newslater::all();
                return view('admin.site.newslater',compact('newslater'));
               }


               public function delete($id)
               {
                $delete = Contact::find($id);
                $delete->delete();
                 $notification=array(
                      'messege'=>'Contact Deleted Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->back()->with($notification);
               }
        
}
