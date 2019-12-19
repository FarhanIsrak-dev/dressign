@extends('user.layouts.master')
@section('title')
{{ $product->title}} |DRESSIGN
@endsection

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
			<h3>Single <span>Product </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="{{route('index')}}">Home</a><i>|</i></li>
								<li>Women's Wear</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
	     <div class="col-md-4 single-right-left ">
			
				<div class="w3-content w3-display-container">
  				
  				@php $i = 1; @endphp
            	@foreach ($product->images as $image)
              
                	<img class="mySlides" src="{!! asset('images/products/'.$image->image) !!}" width="350" height="450" alt="First slide">
              
              	@php $i++; @endphp
            	@endforeach
  				

  				<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  				<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
				</div> 
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3>{{ $product->title }}</h3>
					<p><span class="item_price">Brand: {{ $product->brand->name }}</span></p>
					<p><span class="item_price">{{$product->price}} Tk</p>
					
					<div class="description">
						<h5>{{$product->description}}</h5>						 
					</div>

					<div class="color-quality">
						<div class="color-quality-right">
							<h5>Quantity :</h5>
							<p><span class="item_price">{{$product->quantity}} </p>
						</div>
					</div>
					<div class="occasion-cart">
						@include('user.products.cart-button')
																			
					</div>
					<div class="description">
						<h5>{{ $product->quantity  < 1 ? 'No Item is Available' : $product->quantity.' items in stock' }}</h5>						 
					</div>
		      </div>
		      
	 			<div class="clearfix"> </div>
				<!-- /new_arrivals --> 
	
	<!-- //new_arrivals --> 
	  	<!--/slider_owl-->
	
			
	        </div>
 </div>
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