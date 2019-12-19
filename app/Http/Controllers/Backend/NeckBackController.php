<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\NeckBack;
use Image;
use File;

class NeckBackController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }
  public function index()
  {
    $neck_back = NeckBack::orderBy('id', 'desc')->get();
    return view('backend.pages.neck_back.index', compact('neck_back'));
  }

  public function create()
  {
    return view('backend.pages.neck_back.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'code'  => 'required',
      'image'  => 'nullable|image',
    ],
    [
      'code.required'  => 'Please provide a neck_back code',
      'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
    ]);

    $neck_back = new NeckBack();
    $neck_back->code = $request->code;
    //insert images also
    if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/neck_back/' .$img);
        Image::make($image)->save($location);
        $neck_back->image = $img;
    }
    $neck_back->save();

    session()->flash('success', 'A new neck_back has added successfully !!');
    return redirect()->route('admin.neck_back');

  }

  public function edit($id)
  {
    $neck_back= NeckBack::find($id);
    if (!is_null($neck_back)) {
      return view('backend.pages.neck_back.edit', compact('neck_back'));
    }else {
      return resirect()->route('admin.neck_back');
    }
  }


    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'code'  => 'required',
        'image'  => 'nullable|image',
      ],
      [
        'code.required'  => 'Please provide a neck_back code',
        'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
      ]);

      $neck_back = NeckBack::find($id);
      $neck_back->code = $request->code;
      //insert images also
      if ($request->image > 0) {
        //Delete the old image from folder

          if (File::exists('images/neck_back/'.$neck_back->image)) {
            File::delete('images/neck_back/'.$neck_back->image);
          }

          $image = $request->file('image');
          $img = time() . '.'. $image->getClientOriginalExtension();
          $location = public_path('images/neck_back/' .$img);
          Image::make($image)->save($location);
          $neck_back->image = $img;
      }
      $neck_back->save();

      session()->flash('success', 'NeckBack has updated successfully !!');
      return redirect()->route('admin.neck_back');

    }

    public function delete($id)
    {
      $neck_back = NeckBack::find($id);
      if (!is_null($neck_back)) {
        // Delete neck_back image
        if (File::exists('images/neck_back/'.$neck_back->image)) {
          File::delete('images/neck_back/'.$neck_back->image);
        }
        $neck_back->delete();
      }
      session()->flash('success', 'NeckBack has deleted successfully !!');
      return back();

    }
}
