<!DOCTYPE html>
<html>
<head>
<title>@yield('title','DRESSIGN')</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>

</head>
<body>
<!-- header -->
<div class="header" id="home">
    <div class="container">
        <ul>
            @guest
                            <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
                            <li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
                            
                        @else
                        <li> 
                            <a href="{{ route('user.dashboard') }}">
                                <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" class="img rounded-circle" style="width:30px "> Hello {{ Auth::user()->first_name }}{{ Auth::user()->last_name }}!!! 
                            </a>
                        </li>
                            <li> <a href="{{ route('logout') }}" data-toggle="modal" data-target="" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ __('Logout') }} </a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        
                                
                            
                        @endguest
            
            <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:dressignofficial@email.com">dressignofficial@gmail.com</a></li>
        </ul>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->

<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <div class="col-md-4 header-middle">
            <form action="{{route('search')}}" method="get">
                    <input type="search" name="search" placeholder="Search here..." required="">
                    <input type="submit" value=" ">
                <div class="clearfix"></div>
            </form>
        </div>
        <!-- header-bot -->
            <div class="col-md-4 logo_agile">
                <h1><a href="{{route('index')}}"><span>Dres</span>Sign <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
            </div>
        <!-- header-bot -->
        <div class="col-md-4 agileits-social top_content">
                        <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                                                           <li class="share">Share On : </li>
                                                            <li><a href="https://www.facebook.com/Dressign-2526265690736772/" class="facebook">
                                                                  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="https://twitter.com/dressign" class="twitter"> 
                                                                  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="https://www.youtube.com/channel/UCaASAkrffcQwyAhlBGXpAKg" class="youtube">
                                                                  <div class="front"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-youtube" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="https://www.linkedin.com/in/dressign-online-b99277184/" class="pinterest">
                                                                  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                                                        </ul>



        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav menu__list">
                    <li class="active menu__item menu__item--current"><a class="menu__link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a></li>
                    <li class=" menu__item"><a class="menu__link" href="{{route('about')}}">About</a></li>
                    
                    <li class=" menu__item"><a class="menu__link" href="{{URL::to('/product_index')}}">Products</a></li>
                    <li class="menu__item dropdown">
                       <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Dress Design <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                <div class="agile_inner_drop_nav_info">
                                    <div class="col-sm-3 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{URL::to('/salwar_design')}}">Salwar</a></li>
                                            <li><a href="{{URL::to('/kamiz_design')}}">Kameez</a></li>
                                            <li><a href="{{URL::to('/salwar_kamiz_design')}}">Salwar Kamiz</a></li>
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="col-sm-6 multi-gd-img multi-gd-text ">
                                        <a href="womens.html"><img src="images/top1.jpg" alt=" "/></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                    </li>
                    <li class=" menu__item"><a class="menu__link" href="{{route('contact')}}">Contact</a></li>
                  </ul>
                </div>
              </div>
            </nav>  
        </div>
        <div class="top_nav_right">
            <div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
                <a href="{{route('carts')}}">        
                        <button class="w3view-cart" type="submit" name="submit" value="">
                            <i class="fa fa-cart-arrow-down" aria-hidden="true"><span class="badge badge-warning" id="totalItems" >
                                {{ App\Models\Cart::totalItems() }}
                            </span></i>
                            
                        </button>
                      
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                        <div class="modal-body modal-body-sub_agile">
                        <div class="col-md-8 modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="styled-input agile-styled-input-top">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                <label>{{ __('E-Mail Address') }}</label>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif 
                                <label>{{ __('Password') }}</label>
                                <span></span>
                            </div> 
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                        </form>
                          <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                                                            <li class="share">Share On : </li>
                                                            <li><a href="https://www.facebook.com/Dressign-2526265690736772/" class="facebook">
                                                                  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="https://twitter.com/dressign" class="twitter"> 
                                                                  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="https://www.youtube.com/channel/UCaASAkrffcQwyAhlBGXpAKg" class="youtube">
                                                                  <div class="front"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-youtube" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="https://www.linkedin.com/in/dressign-online-b99277184/" class="pinterest">
                                                                  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                        <p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

                        </div>
                        <div class="col-md-4 modal_body_right modal_body_right1">
                            <img src="images/log_pic.jpg" alt=" "/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //Modal content-->
            </div>
        </div>
<!-- //Modal1 -->
<!-- Modal2 -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                        <div class="modal-body modal-body-sub_agile">
                        <div class="col-md-8 modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
                         <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="styled-input agile-styled-input-top">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>
                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                                <label>First Name</label>
                                <span></span>
                            </div>
                            <div class="styled-input agile-styled-input-top">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>
                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                                <label>Last Name</label>
                                <span></span>
                            </div>

                            <div class="styled-input">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required> 
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <label>Email</label>
                                <span></span>
                            </div> 

                            <div class="styled-input agile-styled-input-top">
                                <input id="phone_no" type="text" class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }}" name="phone_no" value="{{ old('phone_no') }}" required autofocus>
                                @if ($errors->has('phone_no'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_no') }}</strong>
                                    </span>
                                @endif
                                <label>Phone</label>
                                <span></span>
                            </div>
                            

                            

                            <div class="styled-input">
                                <input id="street_address" type="street_address" class="form-control{{ $errors->has('street_address') ? ' is-invalid' : '' }}" name="street_address" value="{{ old('street_address') }}" required> 
                                @if ($errors->has('street_address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('street_address') }}</strong>
                                    </span>
                                @endif
                                <label>Street Address</label>
                                <span></span>
                            </div>


                            <div class="styled-input">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required> 
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <label>Password</label>
                                <span></span>
                            </div> 
                            <div class="styled-input">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required> 
                                <label>Confirm Password</label>
                                <span></span>
                            </div> 
                            <input type="submit" value="Sign Up">
                        </form>
                          <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                                                            <li class="share">Share On : </li>
                                                            <li><a href="https://www.facebook.com/Dressign-2526265690736772/" class="facebook">
                                                                  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="https://twitter.com/dressign" class="twitter"> 
                                                                  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="https://www.youtube.com/channel/UCaASAkrffcQwyAhlBGXpAKg" class="youtube">
                                                                  <div class="front"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-youtube" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="https://www.linkedin.com/in/dressign-online-b99277184/" class="pinterest">
                                                                  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                        <p><a href="#">By clicking register, I agree to your terms</a></p>

                        </div>
                        <div class="col-md-4 modal_body_right modal_body_right1">
                            <img src="images/log_pic.jpg" alt=" "/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //Modal content-->
            </div>
        </div>
<!-- //Modal2 -->

<!-- banner -->
@include('user.partials.messages')
    @yield('content')

    <!-- //we-offer -->
<!--/grids-->
<div class="coupons">
        <div class="coupons-grids text-center">
            <div class="w3layouts_mail_grid">
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>FREE SHIPPING</h3>
                        <p>Get free home delivery and on time!!</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-headphones" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>24/7 SUPPORT</h3>
                        <p>We're here for you for 24/7</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>MONEY BACK GUARANTEE</h3>
                        <p>Got problems in product??Get your money back!</p>
                    </div>
                </div>
                    <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-gift" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>FREE GIFT COUPONS</h3>
                        <p>Surprise!!Surprise!!Surprise!!!</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
</div>

<!--grids-->
<!-- footer -->
<div class="footer">
    <div class="footer_agile_inner_info_w3l">
        <div class="col-md-3 footer-left">
            <h2><a href="{{route('index')}}"><span>Dres</span>sign </a></h2>
            <p>Design Your Own Wear</p>
            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                                                            <li class="share">Share On : </li>
                                                            <li><a href="https://www.facebook.com/Dressign-2526265690736772/" class="facebook">
                                                                  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="https://twitter.com/dressign" class="twitter"> 
                                                                  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="https://www.youtube.com/channel/UCaASAkrffcQwyAhlBGXpAKg" class="youtube">
                                                                  <div class="front"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-youtube" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="https://www.linkedin.com/in/dressign-online-b99277184/" class="pinterest">
                                                                  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                                                        </ul>
        </div>
        <div class="col-md-9 footer-right">
            <div class="sign-grds">
                <div class="col-md-4 sign-gd">
                    <h4>Our <span>Information</span> </h4>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{URL::to('/product_index')}}">Products</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
                
                <div class="col-md-5 sign-gd-two">
                    <h4>Store <span>Information</span></h4>
                    <div class="w3-address">
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Phone Number</h6>
                                <p>+1 234 567 8901</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Email Address</h6>
                                <p>Email :<a href="mailto:dressignofficial@email.com"> dressignofficial@example.com</a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Location</h6>
                                <p>Dhaka,Bangladesh 
                                
                                </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-3 sign-gd flickr-post">
                    <h4>Flickr <span>Posts</span></h4>
                    <ul>
                        <li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
                    </ul>
                </div> -->
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
            
        <p class="copy-right">All rights reserved | Design by <a href="{{route('index')}}">Dressign</a></p>
    </div>
</div>
<!-- //footer -->

<!-- login -->
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                            <div class="login-grids">
                                <div class="login">
                                    <div class="login-bottom">
                                        <h3>Sign up for free</h3>
                                        <form>
                                            <div class="sign-up">
                                                <h4>Email :</h4>
                                                <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required=""> 
                                            </div>
                                            <div class="sign-up">
                                                <h4>Password :</h4>
                                                <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                                                
                                            </div>
                                            <div class="sign-up">
                                                <h4>Re-type Password :</h4>
                                                <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                                                
                                            </div>
                                            <div class="sign-up">
                                                <input type="submit" value="REGISTER NOW" >
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="login-right">
                                        <h3>Sign in with your account</h3>
                                        <form>
                                            <div class="sign-in">
                                                <h4>Email :</h4>
                                                <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required=""> 
                                            </div>
                                            <div class="sign-in">
                                                <h4>Password :</h4>
                                                <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                                                <a href="#">Forgot password?</a>
                                            </div>
                                            <div class="single-bottom">
                                                <input type="checkbox"  id="brand" value="">
                                                <label for="brand"><span></span>Remember Me.</label>
                                            </div>
                                            <div class="sign-in">
                                                <input type="submit" value="SIGNIN" >
                                            </div>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
    <!-- Custom-JavaScript-File-Links --> 
    <!-- cart-js -->
    <script src="js/minicart.min.js"></script>
<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>

    <!-- //cart-js --> 
<!-- script for responsive tabs -->                     
<script src="js/easy-responsive-tabs.js"></script>
<script>
    $(document).ready(function () {
    $('#horizontalTab').easyResponsiveTabs({
    type: 'default', //Types: default, vertical, accordion           
    width: 'auto', //auto or any width like 600px
    fit: true,   // 100% fit in a container
    closed: 'accordion', // Start closed if in accordion view
    activate: function(event) { // Callback function if tab is switched
    var $tab = $(this);
    var $info = $('#tabInfo');
    var $name = $('span', $info);
    $name.text($tab.text());
    $info.show();
    }
    });
    $('#verticalTab').easyResponsiveTabs({
    type: 'vertical',
    width: 'auto',
    fit: true
    });
    });
</script>
<!-- //script for responsive tabs -->       
<!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
@include('user.partials.scripts')
  @yield('scripts')
</body>
</html>
