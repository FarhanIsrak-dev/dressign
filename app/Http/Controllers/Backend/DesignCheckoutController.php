<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DesignCheckout;
class DesignCheckoutController extends Controller
{
	
    public function __construct()
  {
    $this->middleware('auth:admin');
  }
  
  public function index()
  {
    $orders = DesignCheckout::orderBy('id', 'desc')->get();
    return view('backend.pages.designorder.index', compact('orders'));
  }  

  public function show($id)
  {
    $order = DesignCheckout::find($id);
    
    $order->save();
    return view('backend.pages.designorder.show', compact('order'));
  }

      public function delete($id)
    {
      $order = DesignCheckout::find($id);
      if (!is_null($order)) {
        
        $order->delete();
      }
      session()->flash('success', 'order has deleted successfully !!');
      return back();

    }

  
}
  
