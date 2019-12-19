<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Sleeves;
use Image;
use File;

class SleevesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }
  public function index()
  {
    $sleeves = Sleeves::orderBy('id', 'desc')->get();
    return view('backend.pages.sleeves.index', compact('sleeves'));
  }

  public function create()
  {
    return view('backend.pages.sleeves.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'code'  => 'required',
      'image'  => 'nullable|image',
    ],
    [
      'code.required'  => 'Please provide a sleeves code',
      'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
    ]);

    $sleeves = new Sleeves();
    $sleeves->code = $request->code;
    //insert images also
    if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/sleeves/' .$img);
        Image::make($image)->save($location);
        $sleeves->image = $img;
    }
    $sleeves->save();

    session()->flash('success', 'A new sleeves has added successfully !!');
    return redirect()->route('admin.sleeves');

  }

  public function edit($id)
  {
    $sleeves= Sleeves::find($id);
    if (!is_null($sleeves)) {
      return view('backend.pages.sleeves.edit', compact('sleeves'));
    }else {
      return resirect()->route('admin.sleeves');
    }
  }


    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'code'  => 'required',
        'image'  => 'nullable|image',
      ],
      [
        'code.required'  => 'Please provide a sleeves code',
        'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
      ]);

      $sleeves = Sleeves::find($id);
      $sleeves->code = $request->code;
      //insert images also
      if ($request->image > 0) {
        //Delete the old image from folder

          if (File::exists('images/sleeves/'.$sleeves->image)) {
            File::delete('images/sleeves/'.$sleeves->image);
          }

          $image = $request->file('image');
          $img = time() . '.'. $image->getClientOriginalExtension();
          $location = public_path('images/sleeves/' .$img);
          Image::make($image)->save($location);
          $sleeves->image = $img;
      }
      $sleeves->save();

      session()->flash('success', 'Sleeves has updated successfully !!');
      return redirect()->route('admin.sleeves');

    }

    public function delete($id)
    {
      $sleeves = Sleeves::find($id);
      if (!is_null($sleeves)) {
        // Delete sleeves image
        if (File::exists('images/sleeves/'.$sleeves->image)) {
          File::delete('images/sleeves/'.$sleeves->image);
        }
        $sleeves->delete();
      }
      session()->flash('success', 'Sleeves has deleted successfully !!');
      return back();

    }
}
