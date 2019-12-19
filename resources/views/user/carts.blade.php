@extends('user.layouts.master')


@section('content')
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //tags -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
<link href="{{asset('css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css'/>
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>

<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Cart<span>Items </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i>|</i></li>
								<li>Cart</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>


<div class='container margin-top-20'>
    <h2>My Cart Items</h2>
    @if (App\Models\Cart::totalItems() > 0)
    <table class="table table-bordered table-stripe">
      <thead>
        <tr>
          <th>No.</th>
          <th>Product Title</th>
          <th>Product Image</th>
          <th>Product Quantity</th>
          <th>Unit Price</th>
          <th>Sub total Price</th>
          <th>
            Delete
          </th>
        </tr>
      </thead>
      <tbody>
        @php
        $total_price = 0;
        @endphp
        @foreach (App\Models\Cart::totalCarts() as $cart)
          <tr>
            <td>
              {{ $loop->index + 1 }}
            </td>
            <td>
              <a href="{{ route('user.products.show', $cart->product->slug) }}">{{ $cart->product->title }}</a>
            </td>
            <td>
              @if ($cart->product->images->count() > 0)
                <img src="{{ asset('images/products/'. $cart->product->images->first()->image) }}" width="60px">
              @endif
            </td>
            <td>
              <form class="form-inline" action="{{ route('carts.update', $cart->id) }}" method="post">
                @csrf
                <input type="number" name="product_quantity" class="form-control" value="{{ $cart->product_quantity }}"/>
                <button type="submit" class="btn btn-success ml-1">Update</button>
              </form>
            </td>
            <td>
              {{ $cart->product->price }} Taka
            </td>
            <td>
              @php
              $total_price += $cart->product->price * $cart->product_quantity;
              @endphp

              {{ $cart->product->price * $cart->product_quantity }} Taka
            </td>
            <td>
              <form class="form-inline" action="{{ route('carts.delete', $cart->id) }}" method="post">
                @csrf
                <input type="hidden" name="cart_id" />
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
        <tr>
          <td colspan="4"></td>
          <td>
            Total Amount:
          </td>
          <td colspan="2">
            <strong>  {{ $total_price }} Taka</strong>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="float-right">
      <a href="{{URL::to('/product_index')}}" class="btn btn-info btn-lg">Continue Shopping..</a>
      <a href="{{ route('checkouts') }}" class="btn btn-warning btn-lg">Checkout</a>
    </div>
  </div>
  @else
      <div class="alert alert-warning">
        <strong>There is no item in your cart.</strong>
        <br>
        <a href="{{URL::to('/product_index')}}" class="btn btn-info btn-lg">Continue Shopping..</a>
      </div>
    @endif

 <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<!--//single_page-->
@endsection