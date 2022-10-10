<section>
		<div class="hom1 hom-com pad-bot-40">
			<div class="container">
				<div class="row">
					<div class="hom1-title">
						<h2>Nuestras Habitaciones</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Aenean euismod sem porta est consectetur posuere. Praesent nisi velit, porttitor ut imperdiet a, pellentesque id mi.</p>
					</div>
				</div>
				<div class="row">
					<div class="to-ho-hotel">
						<!-- HOTEL GRID -->
						@foreach($habitaciones as $habitacion)
						<a href="{{route('detalle',[$habitacion->id])}}">
						<div class="col-md-4">
							<div class="to-ho-hotel-con">
								<div class="to-ho-hotel-con-1">
									<div class="hom-hot-av-tic"> {{$habitacion->estado}} </div> <img src="{{$habitacion->imagen}}" alt=""> </div>
								<div class="to-ho-hotel-con-23">
									<div class="to-ho-hotel-con-2"> <a href="all-rooms.html"><h4>{{$habitacion->nombre}}</h4></a> </div>
									<div class="to-ho-hotel-con-3">
										<ul>
											<li>Hotel: {{$habitacion->hotel->nombre}}
												<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
											</li>
											<li><span class="ho-hot-pri">${{number_format($habitacion->precio)}}</span> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						</a>
						@endforeach
						<!-- HOTEL GRID -->
						
					</div>
				</div>
			</div>
		</div>
	</section>