// Instanciamos Vue para llamar a la libreria del CDN
const app = new Vue({
    el: '#app',
    data:{
        titulo: 'Ejercicio con Vue y Framework Bulma',
        descripcion: 'Practicas con vue usando haciendo uso de v-for en un array normal, y un array de objetos. Para este practica se uso el Framework de Bulma.',
        usuarios: ['Isaac', 'Alevi', 'Pedro'], 
        ciudadades: [
            {Ciudad: 'Mérida', Habitantes: '892,363 mil', Año: 2015},
            {Ciudad: 'Chiapas', Habitantes:'5.544 millones', Año: 2020},
            {Ciudad: 'Guadalajara', Habitantes: '1.46 millones', Año: 215},
            {Ciudad: 'Monterrey', Habitantes: '1.109 millones', Año: 2015},
            {Ciudad: 'México', Habitantes: '127.6 millones', Año: 2019},
            {Ciudad: 'Chihuahua', Habitantes: '878,062 mil', Año: 2017},
            {Ciudad: 'Baja california', Habitantes: '3.769 millones', Año: 2020},
        ],
    }
});
