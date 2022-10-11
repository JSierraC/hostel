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
					<h4>Bienvenido(a) a tu Panel de administracion - Reportes</h4> 
				</div>
				<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="inn-com-form">
							<form class="col s12" action="{{route('admin.reportes.generar')}}" method="POST" autocomplete="off">
								@csrf
								<div class="row">
									<div class="col s12 avail-title">
										<h4>Reporte</h4> 
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12 m4 l2">
										<input type="text" id="from2" name="from">
										<label for="from">Fecha Inicio</label>
									</div>
									<div class="input-field col s12 m4 l2">
										<input type="text" id="to2" name="to">
										<label for="to">Fecha Final</label>
									</div>
									<div class="input-field col s12 m4 l2">
							        	<input type="submit" value="Reporte" class="form-btn"> 
							    	</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
				<div class="db-cent-2">
					
				</div>
				<div class="db-cent-3">
					
				</div>
			</div>
		</div>
@endsection

			
