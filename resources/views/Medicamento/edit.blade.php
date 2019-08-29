@extends('layouts.layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Medicamento</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('medicamento.update',$medicamentos->id) }}"  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="nombre" title="Nombre del medicamento" id="nombre" class="form-control input-sm" value="{{$medicamentos->nombre}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="cantidad" title="Cantidad del medicamento" id="cantidad" class="form-control input-sm" value="{{$medicamentos->cantidad}}">
									</div>
								</div>
							</div>
 
							<div class="form-group">
								<textarea name="descripcion" title="Descripcion del medicamento" class="form-control input-sm"  placeholder="Descripcion">{{$medicamentos->descripcion}}</textarea>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="date" name="fechav" title="Fecha de vencimiento" id="fechav" class="form-control input-sm" value="{{$medicamentos->fechav}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="precio" title="Precio del medicamento" id="precio" class="form-control input-sm" value="{{$medicamentos->precio}}">
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea name="laboratorio" title="Laboratorio del medicamento" class="form-control input-sm" placeholder="Laboratorio">{{$medicamentos->laboratorio}}</textarea>
							</div>
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
									<a href="{{ route('medicamento.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
	@endsection