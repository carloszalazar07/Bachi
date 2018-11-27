@extends('home')

@section('contenido')

	<div class="card-panel hoverable green lighten-4">
		<div class="row">
		
			<div class="input-field col s4">
				{{ Form::label('id','ID',(['class'=>'active','for'=>''])) }} 
				<h5>{{$asistente->id}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('cuil','Cuil',(['class'=>'active','for'=>''])) }}
				<h5>{{$asistente->cuil}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('apellido','Apellido',(['class'=>'active','for'=>''])) }}
				<h5>{{$asistente->apellido}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('nombre','Nombre',(['class'=>'active','for'=>''])) }}
				<h5>{{$asistente->nombre}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('matricula','Matricula',(['class'=>'active','for'=>''])) }}
				<h5>{{$asistente->matricula}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('titulo','Titulo',(['class'=>'active','for'=>''])) }}
				<h5>{{$asistente->titulo}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('direccion','Direccion',(['class'=>'active','for'=>''])) }}
				<h5>{{$asistente->direccion}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('telefono','Telefono',(['class'=>'active','for'=>''])) }}
				<h5>{{$asistente->telefono}}</h5>
			</div>

			<div class="input-field col s4">
				{{ Form::label('email','Email',(['class'=>'active','for'=>''])) }}
				<h5>{{$asistente->email}}</h5>
			</div>
		</div>
	</div>

@endsection