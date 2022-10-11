@extends('layouts.master')
@section('banner')
	<div class="hp-banner"> <img src="{{ asset($habitacion->imagen) }}" height="400" alt=""> </div>
@endsection
@section('container')
	<div class="hom-com">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="hp-section">
								<div class="hp-sub-tit">
									<h4><span>Caracteristicas</span> Habitacion</h4>
									<span>{{$habitacion->nombre}}</span>
									<p>{{$habitacion->descripcion}}</p>
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
								<h3><span>Llamanos!</span> 300 739 5442</h3> <small>Estamos disponibles 24/7 Lunes to Domingo</small> <a href="{{route('reservar.index',[$habitacion->id])}}">Reserva Ahora</a> </div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
@endsection