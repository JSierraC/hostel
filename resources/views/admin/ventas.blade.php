@extends('layouts.master')
@section('container')

		<div class="dashboard">
			<div class="db-left">
				<div class="db-left-1">
					
				</div>
				<div class="db-left-2">
					
				</div>
			</div>
			<div class="db-cent">
				<div class="db-cent-1">
					<p>Hi {{ Auth::user()->name }},</p>
					<h4>Bienvenido(a) a tu Panel de administracion</h4> </div>
				<div class="db-cent-2">
					<div class="db-2-main-1">
						<div class="db-2-main-2"> <img src="{{ asset('images/icon/dbc5.png') }}" alt=""> <span>Dinero Recaudado Este Mes</span>
							<p>All the Lorem Ipsum generators on the</p>
							<h4>${{number_format($reserValorPagadas)}}</h4> 
						</div>
					</div>
					<div class="db-2-main-1">
						<div class="db-2-main-2"> <img src="{{ asset('images/icon/dbc6.png') }}" alt=""> <span>Reservaciones Pagadas</span>
							<p>All the Lorem Ipsum generators on the</p>
							<h4>{{$reserCantPagadas}}</h4> 
						</div>
					</div>
					<div class="db-2-main-1">
						<div class="db-2-main-2"> <img src="{{ asset('images/icon/dbc3.png') }}" alt=""> <span>Reservaciones Confirmadas</span>
							<p>All the Lorem Ipsum generators on the</p>
							<h4>{{$reserCantConfirmada}}</h4> 
						</div>
					</div>
				</div>
				<div class="db-cent-3">
					<div class="head-typo typo-com db-cent-table db-com-table">
						<div class="db-title">
							<h3><img src="{{ asset('images/icon/dbc5.png') }}" alt=""/> Reservaciones</h3>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
						</div>
						<table class="bordered responsive-table">
							<thead>
								<tr>
									<th>Habitacion</th>
									<th>Cliente</th>
									<th>Nacionalidad</th>
									<th>Arrivo</th>
									<th>Salida</th>
									<th>Valor</th>
									<th>Estado</th>
								</tr>
							</thead>
							<tbody>
								
								@foreach($reservaciones as $reservacion)
								<tr>
									<td>{{$reservacion->habitacion->nombre}}</td>
									<td>{{$reservacion->cliente->nombre}}</td>
									<td><span class="db-tab-hi">{{$reservacion->cliente->nacionalidad}}</span></td>
									
									<td>{{$reservacion->fecha_inicio->toFormattedDateString() }}</td>
									<td>{{$reservacion->fecha_fin->toFormattedDateString() }}</td>
									<td>$ {{number_format($reservacion->valor)}}</td>
									<td><a href="#" class="label label-{{$reservacion->getCssEstado()}}">{{ $reservacion->estado }}</a>
									</td>
								</tr>
								@endforeach
								
							</tbody>
						</table>
					</div>

					@if ($reservaciones->lastPage() > 1)
					<ul class="pagination">
					    <li class="{{ ($reservaciones->currentPage() == 1) ? ' disabled' : '' }}">
					        <a href="{{ $reservaciones->url(1) }}">Previous</a>
					    </li>
					    @for ($i = 1; $i <= $reservaciones->lastPage(); $i++)
					        <li class="{{ ($reservaciones->currentPage() == $i) ? ' active' : '' }}">
					            <a href="{{ $reservaciones->url($i) }}">{{ $i }}</a>
					        </li>
					    @endfor
					    <li class="{{ ($reservaciones->currentPage() == $reservaciones->lastPage()) ? ' disabled' : '' }}">
					        <a href="{{ $reservaciones->url($reservaciones->currentPage()+1) }}" >Next</a>
					    </li>
					</ul>
					@endif
				</div>
			</div>
		</div>
@endsection