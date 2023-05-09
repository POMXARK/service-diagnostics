
import './bootstrap'; // верный путь!

import { createApp } from 'vue'
import Welcome from './components/Welcome'
import AuthSignIn from "./components/AuthSignIn.vue";
import Sidebar from "./components/Sidebar.vue";
import Table from "./components/Table.vue";

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
    ]

// Рендер VUE JS компонентов
renderComponents.forEach(item => { createApp(item.component).mount(item.rootSelector) });

import '../sass/app.scss';
import '@fortawesome/fontawesome-free/js/all.js';

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
