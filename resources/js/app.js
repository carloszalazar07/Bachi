// //CRUD Alumnos

	new Vue({

		el: '#crud_alumno',

		created: function() {
			this.getAlumnos();
		},

		data: {
			alumnos: [],
			newCuil: '',
			newApellido: '',
			newNombre: '',
			newFechaNacimiento: '',
			newLugarNacimiento: '',
			newNacionalidad: '',
			newDireccion: '',
			newBarrio: '',
			newDepartamento: '',
			newAsignacionUniversal: '',
			newSalarioFamiliar: '',
			newPuebloOriginario: '',
			newProgramaCai: '',
			newDiscapacidad: '',
			newMadrePadre: '',
			newCuilTutor: '',
			newApellidoTutor: '',
			newNombreTutor: '',
			newFechaNacimientoTutor: '',
			newLugarNacimientoTutor: '',
			newNacionalidadTutor: '',
			newDireccionTutor: '',
			newTelefonoTutor: '',
			newBarrioTutor: '',
			newDepartamentoTutor: '',
			newACargo: '',
			newEsTutor: '',
			newPatriaPotestad: '',
			newViveConAlumno: '',
			newOcupacion: '',
			newDiabetes: '',
			newHernias: '',
			newConvulsiones: '',
			newProblemasRespiratorios: '',
			newProblemasCardiacos: '',
			newAlergias: '',
			newEsguiences: '',
			newEnfermedadesInfectocontagiosas: '',
			newIncapacidad: '',
			newOtros: '',
			newCertificadoSalud: '',
			newCertificadoDental: '',
			newCarnetVacuna: '',
			newGrupoSanguineo: '',
			newCertificadoNivelInicial: '',
			newFotocopiaDni: '',
			newContribucionCooperadora: ''
		},

		methods: {
			getAlumnos: function() {
				var urlAlumnos = 'alumnos';
				axios.get(urlAlumnos).then(response => {
					this.alumnos = response.data
				});
			},
			deleteAlumno: function(alumno) {
				var id = alumno.id;
				axios.delete('alumnos/' + id).then(response => {
					this.getAlumnos();
					M.toast({html: 'Alumno Eliminado'})
				});
			},
			createAlumno: function(){
				var url = 'alumnos';
				axios.post(url, {
					cuil: this.newCuil,
					apellido: this.newApellido,
					nombre: this.newNombre,
					fecha_nacimiento: this.newFechaNacimiento,
					lugar_nacimiento: this.newLugarNacimiento,
					nacionalidad: this.newNacionalidad,
					direccion: this.newDireccion,
					barrio: this.newBarrio,
					departamento: this.newDepartamento,
					asignacion_universal: this.newAsignacionUniversal,
					salario_familiar: this.newSalarioFamiliar,
					pueblo_originario: this.newPuebloOriginario,
					programa_cai: this.newProgramaCai,
					discapacidad: this.newDiscapacidad,
					madre_padre: this.newMadrePadre,
					cuil_tutor: this.newCuilTutor,
					apellido_tutor: this.newApellidoTutor,
					nombre_tutor: this.newNombreTutor,
					fecha_nacimiento_tutor: this.newFechaNacimientoTutor,
					lugar_nacimiento_tutor: this.newLugarNacimientoTutor,
					nacionalidad_tutor: this.newNacionalidadTutor,
					direccion_tutor: this.newDireccionTutor,
					telefono_tutor: this.newTelefonoTutor,
					barrio_tutor: this.newBarrioTutor,
					a_cargo: this.newACargo,
					es_tutor: this.newEsTutor,
					patria_potestad: this.newPatriaPotestad,
					vive_con_alumno: this.newViveConAlumno,
					ocupacion: this.newOcupacion,
					diabetes: this.newDiabetes,
					hernias: this.newHernias,
					convulsiones: this.newConvulsiones,
					problemas_respiratorios: this.newProblemasRespiratorios,
					problemas_cardiacos: this.newProblemasCardiacos,
					alergias: this.newAlergias,
					esguinces: this.newEsguiences,
					enfermedades_infectocontagiosas: this.newEnfermedadesInfectocontagiosas,
					incapacidad: this.newIncapacidad,
					otros: this.newOtros,
					certificado_salud: this.newCertificadoSalud,
					certificado_dental: this.newCertificadoDental,
					carnet_vacuna: this.newCarnetVacuna,
					grupo_sanguineo: this.newGrupoSanguineo,
					certificado_nivel_inicial: this.newCertificadoNivelInicial,
					fotocopia_dni: this.newFotocopiaDni,
					contribucion_cooperadora: this.newContribucionCooperadora
				}).then(response => {
					this.getAlumnos();
					this.newCuil = '';
					this.newApellido = '';
					this.newNombre = '';
					this.newFechaNacimiento = '';
					this.newLugarNacimiento = '';
					this.newNacionalidad = '';
					this.newDireccion = '';
					this.newBarrio = '';
					this.newDepartamento = '';
					this.newAsignacionUniversal = '';
					this.newSalarioFamiliar = '';
					this.newPuebloOriginario = '';
					this.newProgramaCai = '';
					this.newDiscapacidad = '';
					this.newMadrePadre = '';
					this.newCuilTutor = '';
					this.newApellidoTutor = '';
					this.newNombreTutor = '';
					this.newFechaNacimientoTutor = '';
					this.newLugarNacimientoTutor = '';
					this.newNacionalidadTutor = '';
					this.newDireccionTutor = '';
					this.newTelefonoTutor = '';
					this.newBarrioTutor = '';
					this.newDepartamentoTutor = '';
					this.newACargo = '';
					this.newEsTutor = '';
					this.newPatriaPotestad = '';
					this.newViveConAlumno = '';
					this.newOcupacion = '';
					this.newDiabetes = '';
					this.newHernias = '';
					this.newConvulsiones = '';
					this.newProblemasRespiratorios = '';
					this.newProblemasCardiacos = '';
					this.newAlergias = '';
					this.newEsguiences = '';
					this.newEnfermedadesInfectocontagiosas = '';
					this.newIncapacidad = '';
					this.newOtros = '';
					this.newCertificadoSalud = '';
					this.newCertificadoDental = '';
					this.newCarnetVacuna = '';
					this.newGrupoSanguineo = '';
					this.newCertificadoNivelInicial = '';
					this.newFotocopiaDni = '';
					this.newContribucionCooperadora = '';

				});
			}
		}

	});

// //----------------------------------------------------

//CRUD Materias

	new Vue({

		el: '#crud_materias',

		created: function() {
			this.getMaterias();
			this.getDocentes();
		},

		data: {
			materias: [],
			docentes: [],
			newNombre: '',
			newDocenteId: ''
		},

		methods: {
			getMaterias: function() {
				var urlMaterias = 'materias';
				axios.get(urlMaterias).then(response => {
					this.materias = response.data;
				});
			},
			getDocentes: function() {
				var urlDocentes = 'docentes';
				axios.get(urlDocentes).then(response => {
				this.docentes = response.data;
				});
			},
			deleteMateria: function(materia) {
				var id = materia.id;
				axios.delete('materias/' + id).then(response => {
					this.getMaterias();
					M.toast({html: 'Materia Eliminada'})
				});
			},
			createMateria: function(){
				var url = 'materias';
				axios.post(url, {
					nombre: this.newNombre,
					docente_id: this.newDocenteId
				}).then(response => {
					this.getMaterias();
					this.newNombre = '';
				}).catch(error => {
					console.log(error.response.data)
				});
			}
		}

	});


//----------------------------------------------------