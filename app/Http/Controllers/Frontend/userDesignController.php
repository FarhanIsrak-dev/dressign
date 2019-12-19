<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bottom;
use App\Models\KameezBack;
use App\Models\KameezFront;
use App\Models\NeckBack;
use App\Models\NeckFront;
use App\Models\Sleeves;
use Image;

class userDesignController extends Controller
{
    public function salwar_kamiz()
  {
    $bottom = Bottom::orderBy('id', 'desc')->get();
    $kameez_back = KameezBack::orderBy('id', 'desc')->get();
    $kameez_front = KameezFront::orderBy('id', 'desc')->get();
    $neck_back = NeckBack::orderBy('id', 'desc')->get();
    $neck_front = NeckFront::orderBy('id', 'desc')->get();
    $sleeves = Sleeves::orderBy('id', 'desc')->get();
    return view('user.designs.salwar_kamiz_design', compact('bottom','kameez_front','kameez_back','neck_front','neck_back','sleeves'));
  }

  public function kamiz()
  {
    $bottom = Bottom::orderBy('id', 'desc')->get();
    return view('user.designs.kamiz_design',compact('bottom'));
  }

  public function salwar()
  {
    $bottom = Bottom::orderBy('id', 'desc')->get();
    $kameez_back = KameezBack::orderBy('id', 'desc')->get();
    $kameez_front = KameezFront::orderBy('id', 'desc')->get();
    $neck_back = NeckBack::orderBy('id', 'desc')->get();
    $neck_front = NeckFront::orderBy('id', 'desc')->get();
    $sleeves = Sleeves::orderBy('id', 'desc')->get();
    return view('user.designs.salwar_design', compact('bottom','kameez_front','kameez_back','neck_front','neck_back','sleeves'));
  }
}
