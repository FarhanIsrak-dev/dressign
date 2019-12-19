@extends('user.designs.partials.master')
@section('content')
	<div class="container-fluid">
		<div class="container-child">
			<form id="customer-designed-options">
				<input type="hidden" name="measurement-id" value="">
				<input type="hidden" name="selected-product-id" value="">
					<div class="tab">
						<button class="tablinks" onmouseover="openCity(event, 'nothing')"><img src="{{asset('design/images/logo.jpg')}}" class="img-responsive" alt="brand-1" /></button>
  						<button class="tablinks" onmouseover="openCity(event, 'Bottom')">Bottom</button>
					</div>
					<div id="Bottom" class="tabcontent">
  					<div class="list-group-header">
						Please Select One
					
					</div>
					<ul class="slider-selected-child-action">
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b21.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b21</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b20.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b20</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b19.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b19</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b18.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b18</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b17.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b17</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b16.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b16</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b15.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b15</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b14.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b14</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b13.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b13</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b12.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b12</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b11.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b11</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b10.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b10</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b9.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b9</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b8.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b8</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b7.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b7</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b6.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b6</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b5.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b5</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b4.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b4</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b3.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b3</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b2.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b2</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Bottom/b1.jpg')}}" image-type="shalwar" image_id="16" extra-top="" extra-left="0" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">b1</p>
							</div>
						</li>

					</ul>
				</div>
				<div id="tobe-usedin-mobile">
					<div id="front-img" class="maniqueue-selection">
						<div class="slider-container-show">
							<div class="main-spot-single"></div>
						</div>
						<img src="{{asset('images/design/front-vector.png')}}" class="img-responsive" alt="brand-1">
					</div>
					<div id="back-img" class="maniqueue-selection" style="display:none">
						<div class="slider-container-show"></div>
						<img src="{{asset('images/design/back-vector.png')}}" class="img-responsive" alt="brand-1">
					</div>
				</div>
			</form>
				<div class="right right-inthe-bottom" style="right: 60px;">
					<p class="price"> 700&#2547; </p>
						<a href="{{route('index')}}" >
								<p class="cart">
								Home
								</p>
						</a>
						<a href="javascript:;" id="reset-everything">
							<p class="reset">
								<i class="fa fa-trash"></i>
								Reset
							</p>
						</a>

				</div>
				<div class="clearfix"></div>


<br>
<br>
<br>
<br>
<br>
<h1 ><strong >Checkout</strong></h1>(Only fill up the parts you wamt to order)<br><br>
	<a href="{{route('help')}}" >
		<p class="cart">
			Help
		</p>
	</a>
<div class="container">
	<div class="row">
	  <form role="form" action="{{ route('kamiz.store') }}" method="post" enctype="multipart/form-data">
	  	{{ csrf_field() }}
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email Address">
        </div>        
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Contact No.</label>
            <input type="phone" class="form-control" name="contact" placeholder="Enter Contact no.">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Address</label>
            <input type="address" class="form-control" name="address" placeholder="Enter address">
        </div>        
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Bottom</label>
            <input type="text" class="form-control" name="bottom" placeholder="Design Code">
        </div>
        
        </div>
@endsection

