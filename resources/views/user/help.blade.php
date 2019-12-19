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
.gallery {
-webkit-column-count: 3;
-moz-column-count: 3;
column-count: 3;
-webkit-column-width: 33%;
-moz-column-width: 33%;
column-width: 33%; }
.gallery .pics {
-webkit-transition: all 350ms ease;
transition: all 350ms ease; }
.gallery .animation {
-webkit-transform: scale(1);
-ms-transform: scale(1);
transform: scale(1); }

@media (max-width: 450px) {
.gallery {
-webkit-column-count: 1;
-moz-column-count: 1;
column-count: 1;
-webkit-column-width: 100%;
-moz-column-width: 100%;
column-width: 100%;
}
}

@media (max-width: 400px) {
.btn.filter {
padding-left: 1.1rem;
padding-right: 1.1rem;
}
}

</style>

<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Help <span>for Measurement </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="{{route('index')}}">Home</a><i>|</i></li>
								<li>Measurement</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- Grid row -->

<!-- Grid row -->

<!-- Grid row -->
<div class="gallery" id="gallery">

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/ankle.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">Ankle</a>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/arm hole.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">arm hole</a>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/around head.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">around head</a>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/back full body kameez length.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">back full body kameez length</a>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/back width.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">back width</a>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/bottom length.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">bottom length</a>
  </div>
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/bust.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">bust</a>
  </div>
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/elbow.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">elbow</a>
  </div>
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/front chest.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">front chest</a>
  </div>
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/front full body kameez length.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">front full body kameez length</a>
  </div>
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/front full body kameez length.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">front full body kameez length</a>
  </div>
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/full sleeve.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">full sleeve</a>
  </div>
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/hips.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">hips</a>
  </div>
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/inside leg.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">inside leg</a>
  </div>
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/mid calf.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">mid calf</a>
  </div>
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/mid thigh.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">mid thigh</a>
  </div>
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/neck to waist.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">neck to waist</a>
  </div>
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/outside leg.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">outside leg</a>
  </div>
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/shoulder size.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">shoulder size</a>
  </div>
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/shoulder to elbow.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">shoulder to elbow</a>
  </div>
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/waist to heap.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">waist to heap</a>
  </div>
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/ankle.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">waist</a>
  </div>
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('/measure/waist.jpg')}} " style="height: 400px" alt="Card image cap">

   <a class="hvr-outline-out button2">wrist</a>
  </div>
  

</div>
<!-- Grid row -->

 <script>
$(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});
</script>
<!--//single_page-->
@endsection