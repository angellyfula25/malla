const Home = () => import('./components/Home.vue')
const Contacto = () => import('./components/Contacto.vue')

//importamos los componentes para el asignaturas
const Mostrar = () => import('./components/asignaturas/Mostrar.vue')
const Crear = () => import('./components/asignaturas/Crear.vue')
const Editar = () => import('./components/asignaturas/Editar.vue')

export const routes = [
    {
        name:'home',
        path: '/',
        component:Home
    },
    {
        name:'contacto',
        path: '/',
        component:Contacto
    },
    {
        name:'mostrarAsignaturas',
        path: '/asignaturass',
        component:Mostrar
    },
    {
        name:'crearAsignaturas',
        path: '/crear',
        component:Crear
    },
    {
        name:'mostrarAsignaturas',
        path: '/editar/:id',
        component:Editar
    },
];
