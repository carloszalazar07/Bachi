@extends('home')

@section('contenido')


	<blockquote><h1>Nuevo Alumno</h1></blockquote>


		{!! Form::open(['action' => 'AlumnosController@store','method'=>'POST','file'=>'true','enctype'=>'multipart/form-data','class'=>'form']) !!}

			<div class="col s12">	
				<div class="card">
	    		<div class="card-content">
	      		<img src="{{'/img/ministerio.png'}}" width="300" height="auto">
	      		<br>
	      		<h5 class="center-align">PLANILLA ANEXA I - RESOLUCION Nº 9858</h5>
	    		</div>
	    		<div class="card-tabs">
	      		<ul class="tabs tabs-fixed-width">
			        <li class="tab"><a href="#alumno"><b>Datos del Alumno</b></a></li>
			        <li class="tab"><a href="#tutor"><b>Tutor</b></a></li>
			        <li class="tab"><a href="#enfermedades"><b>Información Medica</b></a></li>
			        <li class="tab"><a href="#documentacion"><b>Documentación Presentada</b></a></li>
	      		</ul>
	    		</div>
	    		<div class="card-content grey lighten-5">

			      <div id="alumno" class="container">

			      	<br>
							
							<p>Repitente</p>
			      	<div class="switch">
						    <label>
						      NO
						      <input type="checkbox" name="repitente">
						      <span class="lever"></span>
						      SI
						    </label>
						  </div>

					    <br>

								<div class="row">
									<div class="input-field col s4">
	          				<input id="cuil" type="text" class="validate" name="cuil">
	          				<label for="cuil">CUIL Nº</label>
	        				</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
	          				<input id="apellido" type="text" class="validate" name="apellido">
	          				<label for="apellido">Apellidos</label>
	        				</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
	          				<input id="nombre" type="text" class="validate" name="nombre">
	          				<label for="nombre">Nombres</label>
	        				</div>
								</div>

								<div class="row">
									<div class="input-field col s4">
	          				<input id="nacimiento" type="text" class="datepicker" name="fecha_nacimiento">
	          				<label for="nacimiento">Fecha de Nacimiento</label>
	        				</div>
	        				<div class="input-field col s4">
	          				<input id="lugar" type="text" class="validate" name="lugar_nacimiento">
	          				<label for="lugar">Lugar de Nacimiento</label>
	        				</div>
	        				<div class="input-field col s4">
	          				<input id="nacionalidad" type="text" class="validate" name="nacionalidad">
	          				<label for="nacionalidad">Nacionalidad</label>
	        				</div>
								</div>

								<div class="row">
									<div class="input-field col s4">
	          				<input id="domiciolio" type="text" class="validate" name="direccion">
	          				<label for="domiciolio">Domicilio</label>
	        				</div>
	        				<div class="input-field col s4">
	          				<input id="barrio" type="text" class="validate" name="barrio">
	          				<label for="barrio">Barrio</label>
	        				</div>
	        				<div class="input-field col s4">
	          				<input id="departamento" type="text" class="validate" name="departamento">
	          				<label for="departamento">Departamento</label>
	        				</div>
								</div>

								<div class="row">
									<div class="input-field col s4 offset-s2">
	          				<input id="telefono" type="text" class="validate" name="telefono">
	          				<label for="telefono">CEL/TEL</label>
	        				</div>
	        				<div class="input-field col s4">
	          				<input id="email" type="text" class="validate" name="email">
	          				<label for="email">Email</label>
	        				</div>
								</div>

								<table>
                <thead>
                  <tr>
                    <th></th>
                    <th>SI</th>
                    <th>NO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Asiganación Universal</td>
                    <td>
											<label>
								        <input name="asignacion_universal" type="radio" value="1" />
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="asignacion_universal" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Salario Familiar</td>
                    <td>
											<label>
								        <input name="salario_familiar" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="salario_familiar" type="radio" checked value="0"/>
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Pertenece a un Pueblo Originario</td>
                    <td>
											<label>
								        <input name="pueblo_originario" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="pueblo_originario" type="radio" checked value="0"/>
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Programa CAI</td>
                    <td>
											<label>
								        <input name="programa_cai" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="programa_cai" type="radio" checked value="0"/>
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Discapacidad</td>
                    <td>
											<label>
								        <input name="discapacidad" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="discapacidad" type="radio" checked value="0"/>
								        <span></span>
								      </label>
                    </td>
                  </tr>
                </tbody>
              </table>
					  </div>

			      <div id="tutor">
			      </div>

						<div id="enfermedades">
							<table>
                <thead>
                  <tr>
                    <th>Padece las siguientes enfermedades</th>
                    <th>SI</th>
                    <th>NO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Diabetes</td>
                    <td>
											<label>
								        <input name="diabetes" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="diabetes" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Hernias</td>
                    <td>
											<label>
								        <input name="hernias" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="hernias" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Convulsiones</td>
                    <td>
											<label>
								        <input name="convulsiones" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="convulsiones" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Problemas respiratorios</td>
                    <td>
											<label>
								        <input name="problemas_respiratorios" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="problemas_respiratorios" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Problemas cardiacos</td>
                    <td>
											<label>
								        <input name="problemas_cardiacos" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="problemas_cardiacos" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Alergias (consignar)</td>
                    <td>
											<label>
								        <input name="alergias" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="alergias" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>En los últimos 60 días ha padecido: Luxaciones - Esguínces (torceduras de tobillos, hombres, muñecas, etc)</td>
                    <td>
											<label>
								        <input name="esguinces" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="esguinces" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Enfermedades Infectocontagiosas: (paperas, sarampión, varicela, etc)</td>
                    <td>
											<label>
								        <input name="enfermedades_infectocontagiosas" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="enfermedades_infectocontagiosas" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Tuvo algún accidente que lo dejo con alguna incapacidad o impedimento</td>
                    <td>
											<label>
								        <input name="incapacidad" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="incapacidad" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                </tbody>
              </table>
							
							<br>
							<p><b class="red-text">Importante</b> actualmente tiene alguna enfermedad o hay otra situación en particular que quisiera informar</p>
              <textarea id="textarea1" class="materialize-textarea" placeholder="Consignar" name="otros"></textarea>
							<br>
			      </div>

			      <div id="documentacion">
			      	<table>
                <thead>
                  <tr>
                    <th>Documentación presentada</th>
                    <th>SI</th>
                    <th>NO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Certificado de salud</td>
                    <td>
											<label>
								        <input name="certificado_salud" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="certificado_salud" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Certificado Buco dental</td>
                    <td>
											<label>
								        <input name="certificado_dental" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="certificado_dental" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Fotocopia del Carnet de Vacunación</td>
                    <td>
											<label>
								        <input name="carnet_vacuna" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="carnet_vacuna" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Fotocopia del grupo Sanguíneo</td>
                    <td>
											<label>
								        <input name="grupo_sanguineo" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="grupo_sanguineo" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Certificado de finalización del Jardín Infantes</td>
                    <td>
											<label>
								        <input name="certificado_nivel_inicial" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="certificado_nivel_inicial" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Fotocopia del DNI</td>
                    <td>
											<label>
								        <input name="fotocopia_dni" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="fotocopia_dni" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Contribución a Cooperadora</td>
                    <td>
											<label>
								        <input name="contribucion_cooperadora" type="radio" value="1"/>
								        <span></span>
								      </label>
                    </td>
                    <td>
                    	<label>
								        <input name="contribucion_cooperadora" type="radio" checked value="0" />
								        <span></span>
								      </label>
                    </td>
                  </tr>
                </tbody>
              </table>
			      </div>

	    		</div>

	    		<div class="card-action">
						{{ Form::submit('Guardar',(['class'=>'btn green'])) }}
        	</div>

	  		</div>
	  	</div>
    	
		{!! Form::close() !!}

@endsection