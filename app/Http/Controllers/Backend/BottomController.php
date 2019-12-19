<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Bottom;
use Image;
use File;

class BottomController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }
  public function index()
  {
    $bottom = Bottom::orderBy('id', 'desc')->get();
    return view('backend.pages.bottom.index', compact('bottom'));
  }

  public function create()
  {
    return view('backend.pages.bottom.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'code'  => 'required',
      'image'  => 'nullable|image',
    ],
    [
      'code.required'  => 'Please provide a bottom code',
      'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
    ]);

    $bottom = new Bottom();
    $bottom->code = $request->code;
    //insert images also
    if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/bottom/' .$img);
        Image::make($image)->save($location);
        $bottom->image = $img;
    }
    $bottom->save();

    session()->flash('success', 'A new bottom has added successfully !!');
    return redirect()->route('admin.bottom');

  }

  public function edit($id)
  {
    $bottom= Bottom::find($id);
    if (!is_null($bottom)) {
      return view('backend.pages.bottom.edit', compact('bottom'));
    }else {
      return resirect()->route('admin.bottom');
    }
  }


    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'code'  => 'required',
        'image'  => 'nullable|image',
      ],
      [
        'code.required'  => 'Please provide a bottom code',
        'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
      ]);

      $bottom = Bottom::find($id);
      $bottom->code = $request->code;
      //insert images also
      if ($request->image > 0) {
        //Delete the old image from folder

          if (File::exists('images/bottom/'.$bottom->image)) {
            File::delete('images/bottom/'.$bottom->image);
          }

          $image = $request->file('image');
          $img = time() . '.'. $image->getClientOriginalExtension();
          $location = public_path('images/bottom/' .$img);
          Image::make($image)->save($location);
          $bottom->image = $img;
      }
      $bottom->save();

      session()->flash('success', 'bottom has updated successfully !!');
      return redirect()->route('admin.bottom');

    }

    public function delete($id)
    {
      $bottom = Bottom::find($id);
      if (!is_null($bottom)) {
        // Delete bottom image
        if (File::exists('images/bottom/'.$bottom->image)) {
          File::delete('images/bottom/'.$bottom->image);
        }
        $bottom->delete();
      }
      session()->flash('success', 'bottom has deleted successfully !!');
      return back();

    }
}
