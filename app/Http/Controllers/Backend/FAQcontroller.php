<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FAQ;

class FAQcontroller extends Controller
{
    public function __construct()
  {
    $this->middleware('auth:admin');
  }
  
  public function index()
  {
    $messages = FAQ::orderBy('id', 'desc')->get();
    return view('backend.pages.faq.index', compact('messages'));
  }  

  

      public function delete($id)
    {
      $messages = FAQ::find($id);
      if (!is_null($messages)) {
        
        $messages->delete();
      }
      session()->flash('success', 'Message has deleted successfully !!');
      return back();

    }
}
