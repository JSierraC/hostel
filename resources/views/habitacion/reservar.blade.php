@extends('layouts.master')
@section('container')
<div class="inn-body-section inn-booking">
			<div class="container" style="margin-top: 80px;">
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-6">
						<div class="book-title">
							<h2>{{$habitacion->nombre}}</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="book-form inn-com-form">
							<form class="col s12" autocomplete="off" action="{{route('reserva.guardar')}}" method="POST"> 
								@csrf()
								@include('errors.error')
								<div class="row">
									<div class="input-field col s6">
										<input type="hidden" name="habitacion_id" value="{{$habitacion->id}}">
										<input type="text" class="validate" name="nombre" value="{{old('nombre','dsd')}}" required>
										<label>Nombre</label>
									</div>
									<div class="input-field col s6">
										<input type="text" class="validate" name="numero_identificacion" value="{{old('numero_identificacion','ddd')}}" required>
										<label>Numero Identificacion</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input type="text" class="validate" name="celular" value="{{old('celular','dddd')}}" required>
										<label>Celular</label>
									</div>
									<div class="input-field col s6">
										<input type="email" class="validate" name="email" value="{{old('email','dddd@email.com')}}" required>
										<label>Email</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input type="text" class="validate" name="nacionalidad" value="{{old('nacionalidad','dddd')}}" required>
										<label>Pais</label>
									</div>
									<div class="input-field col s6">
										<select class="form-control" name="sexo" required>
											<option value="">Seleccione Sexo</option>
											<option value="F" selected>Femenino</option>
											<option value="M">Masculino</option>
											<option value="O">Otro</option>
										</select>
										
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<select class="form-control" name="adultos" style="margin: 10px 0px;"> 
											<option value="">No de adultos</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3"  selected>3</option>
											<option value="4">4</option>
										</select>
									</div>
									<div class="input-field col s6">
										<select class="form-control" name="childrens" style="margin: 10px 0px;">
											<option value="">No de niños</option>
											<option value="1">1</option>
											<option value="2"  selected>2</option>
											<option value="3">3</option>
											<option value="4">4</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input type="text" id="from" name="fecha_inicio" value="10/10/2022">
										<label for="from">Dia Llegada</label>
									</div>
									<div class="input-field col s6">
										<input type="text" id="to" name="fecha_fin" value="12/10/2022">
										<label for="to">Dia Salida</label>
									</div>
								</div>
								<div class="row text-center">
									<span class="ho-hot-pri"> ${{ number_format($habitacion->precio) }} / Dia</span>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input type="submit" value="submit" class="form-btn"> </div>
								</div>
							</form>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
			</div>
		</div>
@endsection