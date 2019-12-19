<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Models\Product;

class ProductsController extends Controller
{
  public function index()
  {
      $products = Product::orderBy('id', 'desc')->paginate(16);
      return view('user.products.product_index')->with('products', $products);
  }
  public function show($slug)
  {
      $product = Product::where('slug', $slug)->first();
      if (!is_null($product)) {
        return view('user.products.show', compact('product'));
      }else {
        session()->flash('errors', 'Sorry !! There is no product by this URL..');
        return redirect()->route('user.products.product_index');
      }
  }
}
