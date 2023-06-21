<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Count;
use App\Models\Newslater;
class MainController extends Controller
{
    //
    public function main()
    {
        $allslider=Slider::all();
        $allservice=Service::all();
        $allblog=Blog::all();
        $counts=Count::all();
    	return view('welcome',compact('allslider','allservice','allblog','counts'));
    }

    public function profile()
    {
    	return view('pages.company-profile');
    }

    public function aboutus()
    {
    return view('pages.about');	
    }

    public function contactus()
    {
      return view('pages.contact');     
    }

    public function blog()
    {
        $allblog=Blog::all();
      return view('pages.blog',compact('allblog'));     
    }

    public function policy()
    {
      return view('pages.company-policy');    
    }

    public function contactstore(Request $request)
    {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->last = $request->last;
            $contact->email = $request->email;
            $contact->msg = $request->msg;
            $contact->number = $request->number;

            $contact->save();

            session()->flash('success', 'Contact added successfully  !!');
                 return Redirect()->back();
    }


    public function services()
    {
        $allservice=Service::all();
        return view('pages.service',compact('allservice'));
    }

    public function news(Request $request)
    {

         $validatedData = $request->validate([
            'email' => 'required',
           
           
        ]);

    $newslater = new Newslater();
    $newslater->email = $request->email;
    $newslater->save();

    session()->flash('success', 'Newslater added successfully  !!');
         return Redirect()->back();    
    }
    
    public function Details($id)
    {
        $details=Blog::find($id);
         return view('pages.blogdetails',compact('details'));
    }
}
