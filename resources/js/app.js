import './bootstrap'; // верный путь!
import {createRouter, createWebHistory} from "vue-router";
import {createApp} from 'vue'
import Welcome from './vue/mpa/components/Welcome'
import AuthSignIn from "./vue/mpa/components/AuthSignIn.vue";
import Sidebar from "./vue/mpa/components/Sidebar.vue";
import Table from "./vue/common/Table.vue";
import SensorTable from "./vue/mpa/components/SensorTable.vue";
import Graphs from "./vue/common/Graphs.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            name: 'Profile',
            path: '/spa/profile',
            component: () => import('./vue/spa/view/ProfileView.vue'),
        }, {
            name: 'Table',
            path: '/spa/table',
            component: () => import('./vue/common/Table.vue'),
        }, {
            name: 'Graphs',
            path: '/spa/graphs',
            component: () => import('./vue/common/Graphs.vue'),
        },
    ]
})

//SPA
import App from "./vue/spa/App.vue";

const app = createApp(App)
// app.component('vue-sidebar', Sidebar)
app.use(router).mount('#app')

// Список компонентов и корневых элементов, для рендера
let renderComponents = [
    {
        rootSelector: '#vue-welcome',
        component: Welcome,
    },
    {
        rootSelector: '#vue-sidebar',
        component: Sidebar,
    },
    {
        rootSelector: '#vue-table',
        component: Table,
    },
    {
        rootSelector: '#vue-auth-sign-in',
        component: AuthSignIn,
    },
    {
        rootSelector: '#vue-graphs',
        component: Graphs,
    },
    {
        rootSelector: '#vue-sensor-table',
        component: SensorTable,
    },
]

// Рендер VUE JS компонентов
renderComponents.forEach(item => {
    createApp(item.component).mount(item.rootSelector)
});

import '../sass/app.scss';
//import '@fortawesome/fontawesome-free/js/all.min.js'; // vary size

// import Echo from 'laravel-echo';


//window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     wsHost: window.location.hostname,
//     wsPort: process.env.PUSHER_PORT,
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: false,
//     disableStats: true,
// });
