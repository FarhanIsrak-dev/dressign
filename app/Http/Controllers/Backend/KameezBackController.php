<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\KameezBack;
use Image;
use File;

class KameezBackController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }
  public function index()
  {
    $kameez_back = KameezBack::orderBy('id', 'desc')->get();
    return view('backend.pages.kameez_back.index', compact('kameez_back'));
  }

  public function create()
  {
    return view('backend.pages.kameez_back.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'code'  => 'required',
      'image'  => 'nullable|image',
    ],
    [
      'code.required'  => 'Please provide a kameez_back code',
      'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
    ]);

    $kameez_back = new KameezBack();
    $kameez_back->code = $request->code;
    //insert images also
    if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/kameez_back/' .$img);
        Image::make($image)->save($location);
        $kameez_back->image = $img;
    }
    $kameez_back->save();

    session()->flash('success', 'A new kameez_back has added successfully !!');
    return redirect()->route('admin.kameez_back');

  }

  public function edit($id)
  {
    $kameez_back= KameezBack::find($id);
    if (!is_null($kameez_back)) {
      return view('backend.pages.kameez_back.edit', compact('kameez_back'));
    }else {
      return resirect()->route('admin.kameez_back');
    }
  }


    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'code'  => 'required',
        'image'  => 'nullable|image',
      ],
      [
        'code.required'  => 'Please provide a kameez_back code',
        'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
      ]);

      $kameez_back = KameezBack::find($id);
      $kameez_back->code = $request->code;
      //insert images also
      if ($request->image > 0) {
        //Delete the old image from folder

          if (File::exists('images/kameez_back/'.$kameez_back->image)) {
            File::delete('images/kameez_back/'.$kameez_back->image);
          }

          $image = $request->file('image');
          $img = time() . '.'. $image->getClientOriginalExtension();
          $location = public_path('images/kameez_back/' .$img);
          Image::make($image)->save($location);
          $kameez_back->image = $img;
      }
      $kameez_back->save();

      session()->flash('success', 'KameezBack has updated successfully !!');
      return redirect()->route('admin.kameez_back');

    }

    public function delete($id)
    {
      $kameez_back = KameezBack::find($id);
      if (!is_null($kameez_back)) {
        // Delete kameez_back image
        if (File::exists('images/kameez_back/'.$kameez_back->image)) {
          File::delete('images/kameez_back/'.$kameez_back->image);
        }
        $kameez_back->delete();
      }
      session()->flash('success', 'KameezBack has deleted successfully !!');
      return back();

    }
}

