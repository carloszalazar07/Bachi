@extends('home')

@section('contenido')

	<div class="row" id="crud_docentes">
		<div class=" margin">
			
			<div class="fixed-action-btn" id="boton">
		  		<a class="btn-floating btn-large green waves-effect waves-light modal-trigger" href="#create"><i class="fas fa-plus fa-lg"></i></a>
			</div>

				<blockquote><h1>Asistentes</h1></blockquote>

				<table class="striped">
					<thead>
						<tr>
							<th>Cuil</th>
							<th>Apellido</th>
							<th>Nombre</th>
							<th>Matricula</th>
							<th>Titulo</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($asistentes as $asistente)
						<tr v-for="docente in docentes">
							<td>{{$asistente->cuil}}</td>
							<td>{{$asistente->apellido}}</td>
							<td>{{$asistente->nombre}}</td>
							<td>{{$asistente->matricula}}</td>
							<td>{{$asistente->titulo}}</td>
							<td>
								<div class="btn-group" role="group">
						      <a class="btn blue"><i class="fas fa-print fa-lg"></i></a>
						      <a href="{{route('asistentes.edit', $asistente->id)}}" class="btn green"><i class="fas fa-pen fa-lg"></i></a>
									<a class="btn red darken-4" v-on:click.prevent="deleteDocente(docente)"><i class="fas fa-trash fa-lg"></i></a>
						    </div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>

				<ul class="pagination">
			    <li v-if="pagination.current_page > 1"><a href="" @click.prevent="changePage(pagination.current_page - 1)"><i class="fas fa-arrow-left fa-lg"></i></a></li>
			    <li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active light-green darken-2' : '']">
			    	<a href="" @click.prevent="changePage(page)">@{{ page }}</a>
			    </li>
			    <li v-if="pagination.current_page < pagination.last_page"><a href="" @click.prevent="changePage(pagination.current_page + 1)"><i class="fas fa-arrow-right fa-lg"></i></a></li>
			  </ul>

			<div>
				@include('asistentes.create')
			</div>

		</div>
	</div>


@endsection