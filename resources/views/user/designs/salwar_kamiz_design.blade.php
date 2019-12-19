@extends('user.designs.partials.master')
@section('content')

	<div class="container-fluid">
		<div class="container-child">
			<form id="customer-designed-options">
				<input type="hidden" name="measurement-id" value="">
				<input type="hidden" name="selected-product-id" value="">
					<div class="tab">
						<button class="tablinks" onmouseover="openCity(event, 'nothing')"><img src="{{asset('design/images/logo.jpg')}}" class="img-responsive" alt="brand-1" /></button>
  						<button onmouseover="openCity(event, 'Kameez Front')">Kameez Front</button>
  						<button class="tablinks" onmouseover="openCity(event, 'Sleeves')">Sleeves</button>
  						<button class="tablinks" onmouseover="openCity(event, 'Neck Front')">Neck Front</button>
  						<button class="tablinks" onmouseover="openCity(event, 'Bottom')">Bottom</button>
  						<button class="tablinks" onmouseover="openCity(event, 'Kameez Back')">Kameez Back</button>
  						<button class="tablinks" onmouseover="openCity(event, 'Neck Back')">Neck Back</button>
					</div>

				<div id="Kameez Front" class="tabcontent">
  					<div class="list-group-header">
						Please Select One
					
					</div>
					<ul class="slider-selected-child-action">
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Front/f16.jpg')}}" image-type="shirt-front" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">kf16</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Front/f15.jpg')}}" image-type="shirt-front" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">kf15</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Front/f14.jpg')}}" image-type="shirt-front" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">kf14</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Front/f13.jpg')}}" image-type="shirt-front" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">kf13</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Front/f12.jpg')}}" image-type="shirt-front" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">kf12</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Front/f11.jpg')}}" image-type="shirt-front" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">kf11</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Front/f10.jpg')}}" image-type="shirt-front" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">kf10</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Front/f9.jpg')}}" image-type="shirt-front" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">kf9</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Front/f8.jpg')}}" image-type="shirt-front" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">kf8</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Front/f7.jpg')}}" image-type="shirt-front" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">kf7</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Front/f6.jpg')}}" image-type="shirt-front" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">kf6</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Front/f5.jpg')}}" image-type="shirt-front" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">kf5</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Front/f4.jpg')}}" image-type="shirt-front" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">kf4</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Front/f3.jpg')}}" image-type="shirt-front" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">kf3</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Front/f2.jpg')}}" image-type="shirt-front" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">kf2</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Front/f1.jpg')}}" image-type="shirt-front" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">kf1</p>
							</div>
						</li>
					</ul>
				</div>

				<div id="Sleeves" class="tabcontent">
   					<div class="list-group-header">
						Please Select One
					
					</div>
					<ul class="slider-selected-child-action">
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/32.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s32</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/31.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s31</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/30.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s30</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/29.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s29</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/28.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s28</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/27.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s27</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/26.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s26</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/25.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s25</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/24.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s24</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/23.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s23</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/22.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s22</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/21.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s21</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/20.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s20</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/19.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s19</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/18.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s18</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/17.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s17</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/16.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s16</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/15.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s15</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/14.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s14</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/13.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s13</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/12.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s12</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/11.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s11</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/10.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s10</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/9.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s9</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/8.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s8</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/7.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s7</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/6.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s6</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/5.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s5</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/4.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s4</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/3.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s3</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/2.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s2</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Sleeves/1.jpg')}}" image-type="select-sleeve" image_id="1" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">s1</p>
							</div>
						</li>
					</ul>
				</div>


				<!-- <div id="Neck Front" class="tabcontent">
  					<div class="list-group-header">
						Please Select One
					
					</div>
					<ul class="slider-selected-child-action">
						@foreach ($neck_front as $neck_front)
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{!! asset('images/neck_front/'.$neck_front->image) !!}" image-type="select-collar" image_id="{{ $neck_front->id }}" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">{{ $neck_front->code }}</p>
							</div>
						</li>
						@endforeach
					</ul>
				</div> -->

				<div id="Neck Front" class="tabcontent">
  					<div class="list-group-header">
						Please Select One
					
					</div>
					<ul class="slider-selected-child-action">
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/30.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf30</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/29.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf29</p>
							</div>
						</li>

						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/28.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf28</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/27.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf27</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/26.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf26</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/25.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf25</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/24.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf24</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/23.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf23</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/22.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf22</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/21.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf21</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/20.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf20</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/19.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf19</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/18.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf18</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/17.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf17</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/16.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf16</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/15.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf15</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/14.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf14</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/13.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf13</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/12.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf12</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/11.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf11</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/10.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf10</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/9.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf9</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/8.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf8</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/7.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf7</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/6.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf6</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/5.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf5</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/4.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf4</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/3.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf3</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/2.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf2</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Front/1.jpg')}}" image-type="select-collar" image_id="6" extra-top="" extra-left="" style-position="front" class="img-responsive" alt="dics">
							<p style="margin: 0px;">nf1</p>
							</div>
						</li>
					</ul>
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

				<div id="Kameez Back" class="tabcontent">
  					<div class="list-group-header">
						Please Select One
					
					</div>
					<ul class="slider-selected-child-action">						
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Back/k6.jpg')}}" image-type="shirt_back" image_id="66" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">K6</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Back/k5.jpg')}}" image-type="shirt_back" image_id="66" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">K5</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Back/k4.jpg')}}" image-type="shirt_back" image_id="66" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">K4</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Back/k3.jpg')}}" image-type="shirt_back" image_id="66" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">K3</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Back/k2.jpg')}}" image-type="shirt_back" image_id="66" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">K2</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Kameez Back/k1.jpg')}}" image-type="shirt_back" image_id="66" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">K1</p>
							</div>
						</li>

					</ul>
				</div>

				<div id="Neck Back" class="tabcontent">
  					<div class="list-group-header">
						Please Select One
					
					</div>
					<ul class="slider-selected-child-action">
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/29.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n29</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/28.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n28</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/27.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n27</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/26.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n26</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/25.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n25</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/24.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n24</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/23.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n23</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/22.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n22</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/21.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n21</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/20.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n20</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/19.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n19</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/18.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n18</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/17.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n17</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/16.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n16</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/15.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n15</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/14.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n14</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/13.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n13</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/12.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n12</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/11.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n11</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/10.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n10</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/9.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n9</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/8.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n8</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/7.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n7</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/6.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n6</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/5.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n5</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/4.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n4</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/3.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n3</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/2.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n2</p>
							</div>
						</li>
						<li class="list-group-item selection-item">
							<div class="checkbox">
							<img style="height: 80px;" src="{{asset('design/images/Neck Back/1.jpg')}}" image-type="neck_back" image_id="144" extra-top="" extra-left="" style-position="back" class="img-responsive" alt="dics">
							<p style="margin: 0px;">n1</p>
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
					<p class="price"> 2000&#2547; </p>
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
            <label for="">Kameez Front</label>
            <input type="text" class="form-control" name="kf" placeholder="Design Code">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Sleeves</label>
            <input type="text" class="form-control" name="sleeve" placeholder="Design Code">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Neck Front</label>
            <input type="text" class="form-control" name="nf" placeholder="Design Code">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Bottom</label>
            <input type="text" class="form-control" name="bottom" placeholder="Design Code">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Kameez Back</label>
            <input type="text" class="form-control" name="kb" placeholder="Design Code">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Neck Back</label>
            <input type="text" class="form-control" name="nb" placeholder="Design Code">
        </div>
@endsection