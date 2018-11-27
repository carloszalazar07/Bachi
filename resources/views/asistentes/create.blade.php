	<div id="create" class="modal">
			{{-- <form method='POST' v-on:submit.prevent="createDocente()"> --}}
		{!! Form::open(['action' => 'AsistentesController@store','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}
	    	<div class="modal-content">
	    		<blockquote><h4>Nuevo Asistente</h4></blockquote>
	    		<br>
		      	<div class="row">
					<div class="input-field col s12">
			          <input id="cuil" type="text" class="validate" name="cuil" v-model="newCuil">
			          <label for="cuil">Cuil</label>
			        </div>

			        <div class="input-field col s12">
			          <input id="apellido" type="text" class="validate" name="apellido" v-model="newApellido">
			          <label for="apellido">Apellido</label>
			        </div>

			        <div class="input-field col s12">
			          <input id="nombre" type="text" class="validate" name="nombre" v-model="newNombre">
			          <label for="nombre">Nombre</label>
			        </div>

			        <div class="input-field col s12">
			          <input id="matricula" type="text" class="validate" name="matricula" v-model="newMatricula">
			          <label for="matricula">Matricula</label>
			        </div>

			        <div class="input-field col s12">
			          <input id="titulo" type="text" class="validate" name="titulo" v-model="newTitulo">
			          <label for="titula">Titulo</label>
			        </div>

			        <div class="input-field col s12">
			          <input id="direccion" type="text" class="validate" name="direccion" v-model="newDireccion">
			          <label for="direccion">Direccion</label>
			        </div>

			        <div class="input-field col s12">
			          <input id="telefono" type="text" class="validate" name="telefono" v-model="newTelefono">
			          <label for="telefono">Telefono</label>
			        </div>

			        <div class="input-field col s12">
			          <input id="email" type="text" class="validate" name="email" v-model="newEmail">
			          <label for="email">Email</label>
			        </div>
				</div>
	    	</div>
	    	<div class="modal-footer">
	     	 	<button type="submit" class="btn btn-flat waves-effect waves-green green modal-close white-text">Guardar</button>
	    	</div>
	    {{-- </form> --}}
	    {!!Form::close() !!}
  	</div>