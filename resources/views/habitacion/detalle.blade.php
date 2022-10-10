@extends('layouts.master')
@section('banner')
	<div class="hp-banner"> <img src="{{ asset('images/detailed-banner.jpg') }}" alt=""> </div>
@endsection

@section('disponibilidad')
<div class="check-available">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="inn-com-form">
							<form class="col s12">
								<div class="row">
									<div class="col s12 avail-title">
										<h4>Check Availability</h4> </div>
								</div>
								<div class="row">
									<div class="input-field col s12 m4 l2">
										<select>
											<option value="" selected>Select Room</option>
											<option value="1">Master Suite</option>
											<option value="2">Mini-Suite</option>
											<option value="3">Ultra Deluxe</option>
											<option value="4">Luxury</option>
											<option value="5">Premium </option>
											<option value="6">Normal</option>
										</select>
									</div>
									<div class="input-field col s12 m4 l2">
										<select>
											<option value="" selected>No of adults</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="1">4</option>
										</select>
									</div>
									<div class="input-field col s12 m4 l2">
										<select>
											<option value=""  selected>No of childrens</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="1">4</option>
										</select>
									</div>
									<div class="input-field col s12 m4 l2">
										<input type="text" id="from" name="from">
										<label for="from">Arrival Date</label>
									</div>
									<div class="input-field col s12 m4 l2">
										<input type="text" id="to" name="to">
										<label for="to">Departure Date</label>
									</div>
									<div class="input-field col s12 m4 l2">
										<input type="submit" value="submit" class="form-btn"> </div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection

@section('container')
	<div class="hom-com">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="hp-section">
								<div class="hp-sub-tit">
									<h4><span>{{$habitacion->nombre}}</span> Habitacion</h4>
								</div>
								<div class="hp-amini detai-2p">
									<p>{{$habitacion->descripcion}}</p>
								</div>
							</div>
							<div class="hp-section">
								<div class="hp-sub-tit">
									<h4><span>Caracteristicas</span> Habitacion</h4>
									<p>Aliquam id tempor sem. Cras molestie risus et lobortis congue. Donec id est consectetur, cursus tellus at, mattis lacus.</p>
								</div>
								<div class="hp-amini">
									<ul>
										<li><img src="{{asset('images/icon/a1.png')}}" alt=""> Elevator in building</li>
										<li><img src="{{asset('images/icon/a2.png')}}" alt=""> Friendly workspace</li>
										<li><img src="{{asset('images/icon/a3.png')}}" alt=""> Instant Book</li>
										<li><img src="{{asset('images/icon/a4.png')}}" alt=""> Wireless Internet</li>
										<li><img src="{{asset('images/icon/a5.png')}}" alt=""> Free parking on premises</li>
										<li><img src="{{asset('images/icon/a6.png')}}" alt=""> Free parking on street</li>
										<li><img src="{{asset('images/icon/a7.png')}}" alt=""> Elevator in building</li>
										<li><img src="{{asset('images/icon/a8.png')}}" alt=""> Friendly workspace</li>
										<li><img src="{{asset('images/icon/a9.png')}}" alt=""> Instant Book</li>
										<li><img src="{{asset('images/icon/a10.png')}}" alt=""> Wireless Internet</li>
										<li><img src="{{asset('images/icon/a11.png')}}" alt=""> Free parking on premises</li>
										<li><img src="{{asset('images/icon/a12.png')}}" alt=""> Free parking on street</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<!--=========================================-->
						<div class="hp-call hp-right-com">
							<div class="hp-call-in"> <img src="{{asset('images/icon/dbc4.png')}}" alt="">
								<h3><span>Check Availability. Call us!</span> +01 4214 4214</h3> <small>We are available 24/7 Monday to Sunday</small> <a href="#">Call Now</a> </div>
						</div>
						<!--=========================================-->
						<!--=========================================-->
						<div class="hp-book hp-right-com">
							<div class="hp-book-in">
								<button class="like-button"><i class="fa fa-heart-o"></i> Bookmark this listing</button> <span>159 people bookmarked this place</span>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i> Share</a>
									</li>
									<li><a href="#"><i class="fa fa-twitter"></i> Tweet</a>
									</li>
									<li><a href="#"><i class="fa fa-google-plus"></i> Share</a>
									</li>
									<!-- <li><a class="pinterest-share" href="#"><i class="fa fa-pinterest-p"></i> Pin</a></li> -->
								</ul>
							</div>
						</div>
						<!--=========================================-->
						<!--=========================================-->
						<div class="hp-card hp-right-com">
							<div class="hp-card-in">
								<h3>We Accept</h3> <span>159 people bookmarked this place</span> <img src="{{asset('images/card.png')}}" alt=""> </div>
						</div>
						<!--=========================================-->
					</div>
				</div>
			</div>
		</div>
@endsection