<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\KameezFront;
use Image;
use File;

class KameezFrontController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }
  public function index()
  {
    $kameez_front = KameezFront::orderBy('id', 'desc')->get();
    return view('backend.pages.kameez_front.index', compact('kameez_front'));
  }

  public function create()
  {
    return view('backend.pages.kameez_front.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'code'  => 'required',
      'image'  => 'nullable|image',
    ],
    [
      'code.required'  => 'Please provide a kameez_front code',
      'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
    ]);

    $kameez_front = new KameezFront();
    $kameez_front->code = $request->code;
    //insert images also
    if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/kameez_front/' .$img);
        Image::make($image)->save($location);
        $kameez_front->image = $img;
    }
    $kameez_front->save();

    session()->flash('success', 'A new kameez_front has added successfully !!');
    return redirect()->route('admin.kameez_front');

  }

  public function edit($id)
  {
    $kameez_front= KameezFront::find($id);
    if (!is_null($kameez_front)) {
      return view('backend.pages.kameez_front.edit', compact('kameez_front'));
    }else {
      return resirect()->route('admin.kameez_front');
    }
  }


    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'code'  => 'required',
        'image'  => 'nullable|image',
      ],
      [
        'code.required'  => 'Please provide a kameez_front code',
        'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
      ]);

      $kameez_front = KameezFront::find($id);
      $kameez_front->code = $request->code;
      //insert images also
      if ($request->image > 0) {
        //Delete the old image from folder

          if (File::exists('images/kameez_front/'.$kameez_front->image)) {
            File::delete('images/kameez_front/'.$kameez_front->image);
          }

          $image = $request->file('image');
          $img = time() . '.'. $image->getClientOriginalExtension();
          $location = public_path('images/kameez_front/' .$img);
          Image::make($image)->save($location);
          $kameez_front->image = $img;
      }
      $kameez_front->save();

      session()->flash('success', 'KameezFront has updated successfully !!');
      return redirect()->route('admin.kameez_front');

    }

    public function delete($id)
    {
      $kameez_front = KameezFront::find($id);
      if (!is_null($kameez_front)) {
        // Delete kameez_front image
        if (File::exists('images/kameez_front/'.$kameez_front->image)) {
          File::delete('images/kameez_front/'.$kameez_front->image);
        }
        $kameez_front->delete();
      }
      session()->flash('success', 'KameezFront has deleted successfully !!');
      return back();

    }
}
