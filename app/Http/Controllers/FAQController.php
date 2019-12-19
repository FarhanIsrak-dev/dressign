<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FAQ;
use Image;
use File;
class FAQController extends Controller
{
    public function index()
    {
    	$faq=FAQ::all();
    	return view('user.contact');
    }

    

    public function store(Request $request)
    {

    	$faq=new FAQ();

    	
    	$faq->name = $request->name;
    	$faq->email = $request->email;
    	$faq->message = $request->message;

    	/*if ($request->hasFile('image')) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/faq/' .$img);
        Image::make($image)->save($location);
        $faq->image = $img;
    	}*/

    	$faq->save();

    	session()->flash('success', 'Your meassage has been received. We will contact with you ASAP!! ');
    	return redirect('/');

    }
}
