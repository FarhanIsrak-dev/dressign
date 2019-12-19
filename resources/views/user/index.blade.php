@extends('user.layouts.master')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            <li data-target="#myCarousel" data-slide-to="4" class=""></li> 
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active"> 
                <div class="container">
                    <div class="carousel-caption">
                        <h3> Be Your Own<span>Dress Designer</span></h3>
                        <p>Get Inside & Buy</p>
                        <a class="hvr-outline-out button2" href="{{URL::to('/product_index')}}">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item2"> 
                <div class="container">
                    <div class="carousel-caption">
                        <h3> Be Your Own<span>Dress Designer</span></h3>
                        <p>Get Inside & Buy</p>
                        <a class="hvr-outline-out button2" href="{{URL::to('/product_index')}}">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item3"> 
                <div class="container">
                    <div class="carousel-caption">
                        <h3> Be Your Own<span>Dress Designer</span></h3>
                        <p>Get Inside & Buy</p>
                        <a class="hvr-outline-out button2" href="{{URL::to('/product_index')}}">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item4"> 
                <div class="container">
                    <div class="carousel-caption">
                        <h3> Be Your Own<span>Dress Designer</span></h3>
                        <p>Get Inside & Buy</p>
                        <a class="hvr-outline-out button2" href="{{URL::to('/product_index')}}">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item5"> 
                <div class="container">
                    <div class="carousel-caption">
                        <h3> Be Your Own<span>Dress Designer</span></h3>
                        <p>Get Inside & Buy</p>
                        <a class="hvr-outline-out button2" href="{{URL::to('/product_index')}}">Shop Now </a>
                    </div>
                </div>
            </div> 
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- The Modal -->
    </div> 
    <!-- //banner -->
    
    <!-- schedule-bottom -->
    
<!-- //schedule-bottom -->
  <!-- banner-bootom-w3-agileits -->
    
<!--/grids-->
      <div class="agile_last_double_sectionw3ls">
            <div class="col-md-6 multi-gd-img multi-gd-text ">
                    <a href="{{URL::to('/product_index')}}"><img src="images/bot_1.jpg" alt=" "><h4>Checkout <span>Inside</span></h4></a>
                    
            </div>
             <div class="col-md-6 multi-gd-img multi-gd-text ">
                    <a href="{{URL::to('/salwar_kamiz_design')}}"><img src="images/bot_2.jpg" alt=" "><h4>Checkout <span>Inside</span></h4></a>
            </div>
            <div class="clearfix"></div>
       </div>                           
<!--/grids-->
<!-- /new_arrivals --> 
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
                                                <img src="{{asset('images/products/'. $image->image)}}" width="300" height="400" alt="" class="pro-image-front">
                                                <img src="{{asset('images/products/'. $image->image)}}" width="300" height="400" alt="" class="pro-image-back">
                                            @endif
                                            
                                        @php
                                            $i--;
                                        @endphp
            @endforeach
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="{!! route('user.products.show',$product->slug)!!}" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>
                                            
                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">{{$product->title}}</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">{{$product->price}}tk</span>
                                            <!-- <del>$189.71</del> -->
                                        </div>
                                        @include('user.products.cart-button')
                                                                            
                                    </div>
                                </div>
                            </div>
                        @endforeach 
                            

                            <div class="clearfix"></div>
        </div>
        <div class="pagination">
            {{ $products->links() }}
        </div>
@endsection