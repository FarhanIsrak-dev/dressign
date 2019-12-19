@extends('user.layouts.master')
@section('content')
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Women's <span>Wear  </span></h3>
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
         <!-- mens -->
		<div class="col-md-4 products-left">
			<div class="filter-price">
					<ul class="dropdown-menu6">
						<li>                
							<div id="slider-range"></div>							
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>			
					</ul>
			</div>
			<div class="css-treeview">
				<h4>Categories</h4>
				<?php foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', NULL)->get() as $parent): ?>						
				<ul class="tree-list-pad">
					<li><a href="main-{{ $parent->id }}"><input type="checkbox" checked="checked" id="item-0" /><label ><i class="fa fa-long-arrow-right" aria-hidden="true"></i> {{ $parent->name }}</label>
						<?php foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', $parent->id)->get() as $child): ?>						
						
								<ul>
									<li><a href="{{ route('user.categories.show',$child->id)}}">{{$child->name}}</a></li>
									
								</ul>	
						<?php endforeach ?>						
					</a>
				</li>
					
					
				</ul>
				<?php endforeach ?>
			</div>
			
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 products-right">
			<h5>All <span>Products</span></h5>
			@php
				$products=$category->products;
			@endphp
			
			
		
		<div class="single-pro">
			@foreach($products as $product)
			 <div class="col-md-4 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										@php
											$i=1;
										@endphp
										@foreach($product->images as $image)
											@if($i>0)
												<img src="{{asset('images/products/'. $image->image)}}" alt="{{ $product->title}}" width="250" height="250" class="pro-image-front">
												<img src="{{asset('images/products/'. $image->image)}}" alt="{{ $product->title}}" width="250" height="250" class="pro-image-back">
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