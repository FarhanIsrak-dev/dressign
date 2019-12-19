@extends('user.layouts.master')
@section('content')
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Sea <span>rch </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="{{route('index')}}">Home</a><i>|</i></li>
								<li>Searched Products</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
         <!-- mens -->
		
		<h1>Search Result For- <span class="badge badge-primary"><h2>{{ $search }}</h2></span></h1>
		<div class="single-pro">
			@foreach($products as $product)
			 <div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										@php
											$i=1;
										@endphp
										@foreach($product->images as $image)
											@if($i>0)
												<img src="{{asset('images/products/'. $image->image)}}" alt="{{ $product->title}}" class="pro-image-front">
												<img src="{{asset('images/products/'. $image->image)}}" alt="{{ $product->title}}" class="pro-image-back">
											@endif
											
										@php
											$i--;
										@endphp
			@endforeach
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
												<a href="{!! route('user.products.show',$product->slug)!!}"  class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="{!! route('user.products.show',$product->slug)!!}">{{$product->title}}</a></h4>
										<div class="info-product-price">
											<span class="item_price">{{$product->price}}tk</span>
											<!-- <del>$189.71</del> -->
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="A-line Black Skirt" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
						@endforeach	
							

							<div class="clearfix"></div>
		</div>
	</div>
</div>	
<!-- //mens -->
<!--/grids-->
@endsection