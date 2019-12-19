@extends('user.layouts.master')
@section('content')
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>C<span>ontact Us </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i>|</i></li>
								<li>Contact</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
   <!--/contact-->
    <div class="banner_bottom_agile_info">
	    <div class="container">
		  <div class="contact-grid-agile-w3s">
				<div class="col-md-4 contact-grid-agile-w3">
						<div class="contact-grid-agile-w31">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<h4>Address</h4>
							<p>Dhaka<span>Bangladesh</span></p>
						</div>
					</div>
					<div class="col-md-4 contact-grid-agile-w3">
						<div class="contact-grid-agile-w32">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<h4>Call Us</h4>
							<p>+8801969279140<span>+8801919279140</span></p>
						</div>
					</div>
					<div class="col-md-4 contact-grid-agile-w3">
						<div class="contact-grid-agile-w33">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<h4>Email</h4>
							<p><a href="mailto:dressignofficial@gmail.com">dressignofficial@gmail.com</a><span><a href="mailto:farhan.yen@northsouth.edu">farhan.yen@northsouth.edu</a></span></p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
	   </div>
	 </div>
	   
   <div class="banner_bottom_agile_info">
	<div class="container">
	   <div class="agile-contact-grids">
				<div class="agile-contact-left">
					<div class="col-md-6 address-grid">
						<h4>For More <span>Information</span></h4>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Telephone </p><span>+8801969279140</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Mail </p><a href="mailto:dressignofficial@gmail.com">dressignofficial@gmail.com</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Location</p><span>North South University,Dhaka,Bangladesh</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							<ul class="social-nav model-3d-0 footer-social w3_agile_social two contact">
							                              <li class="share">SHARE ON : </li>
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
					<div class="col-md-6 contact-form">
						<h4 class="white-w3ls">Contact <span>Form</span></h4>
						<form action="{{route('contact.store')}}" method="POST">
							@csrf
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">            
								<input type="file" name="image" id="image" >
								<label>Image(Optional)</label>
								<span></span>
							</div>
							<div class="styled-input">
								<textarea name="message" required=""></textarea>
								<label>Message or Question</label>
								<span></span>
							</div>	 
							<input type="submit" value="SEND">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
       </div>
	</div>
 <!--//contact-->
<!--/grids-->
@endsection