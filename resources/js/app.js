console.log('Programado por “Controller, Programación y diseño”.Programadores: Escobar German, Kazmer Maximiliano, Salazar Carlos, Soto Daniel.');


require('./bootstrap');

window.Vue = require('vue');

//Alumnos
Vue.component('alumnos-index', require('./components/alumnos/AlumnosIndex.vue'));
Vue.component('alumnos-create', require('./components/alumnos/AlumnosCreate.vue'));
Vue.component('alumnos-edit', require('./components/alumnos/AlumnosEdit.vue'));
//Cursos
Vue.component('cursos-index', require('./components/cursos/CursosIndex.vue'));
Vue.component('cursos-create', require('./components/cursos/CursosCreate.vue'));
// Vue.component('alumnos-edit', require('./components/alumnos/AlumnosEdit.vue'));

const app = new Vue({
    el: '#app'
});
