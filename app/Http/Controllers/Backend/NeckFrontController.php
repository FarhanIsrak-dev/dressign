<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\NeckFront;
use Image;
use File;

class NeckFrontController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }
  public function index()
  {
    $neck_front = NeckFront::orderBy('id', 'desc')->get();
    return view('backend.pages.neck_front.index', compact('neck_front'));
  }

  public function create()
  {
    return view('backend.pages.neck_front.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'code'  => 'required',
      'image'  => 'nullable|image',
    ],
    [
      'code.required'  => 'Please provide a neck_front code',
      'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
    ]);

    $neck_front = new NeckFront();
    $neck_front->code = $request->code;
    //insert images also
    if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/neck_front/' .$img);
        Image::make($image)->save($location);
        $neck_front->image = $img;
    }
    $neck_front->save();

    session()->flash('success', 'A new neck_front has added successfully !!');
    return redirect()->route('admin.neck_front');

  }

  public function edit($id)
  {
    $neck_front= NeckFront::find($id);
    if (!is_null($neck_front)) {
      return view('backend.pages.neck_front.edit', compact('neck_front'));
    }else {
      return resirect()->route('admin.neck_front');
    }
  }


    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'code'  => 'required',
        'image'  => 'nullable|image',
      ],
      [
        'code.required'  => 'Please provide a neck_front code',
        'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
      ]);

      $neck_front = NeckFront::find($id);
      $neck_front->code = $request->code;
      //insert images also
      if ($request->image > 0) {
        //Delete the old image from folder

          if (File::exists('images/neck_front/'.$neck_front->image)) {
            File::delete('images/neck_front/'.$neck_front->image);
          }

          $image = $request->file('image');
          $img = time() . '.'. $image->getClientOriginalExtension();
          $location = public_path('images/neck_front/' .$img);
          Image::make($image)->save($location);
          $neck_front->image = $img;
      }
      $neck_front->save();

      session()->flash('success', 'NeckFront has updated successfully !!');
      return redirect()->route('admin.neck_front');

    }

    public function delete($id)
    {
      $neck_front = NeckFront::find($id);
      if (!is_null($neck_front)) {
        // Delete neck_front image
        if (File::exists('images/neck_front/'.$neck_front->image)) {
          File::delete('images/neck_front/'.$neck_front->image);
        }
        $neck_front->delete();
      }
      session()->flash('success', 'NeckFront has deleted successfully !!');
      return back();

    }
}
