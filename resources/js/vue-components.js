import './bootstrap'; // верный путь!
import {createRouter, createWebHistory} from "vue-router";
import {createApp} from 'vue'
import Welcome from './vue/mpa/components/Welcome'
import AuthSignIn from "./vue/mpa/components/AuthSignIn.vue";
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
app
    // .use(router)
    .mount('#app')

// import VueIco, {icoClose, icoKeyboardArrowDown} from 'vue-ico'

// Список компонентов и корневых элементов, для рендера
let renderComponents = [
    {
        rootSelector: '#vue-welcome',
        component: Welcome,
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

import VueIco from 'vue3-ico'; //, icoHomeTwoTone

//
// Sidebar.use(VueIco, {
//      "home": icoHome,
//  });

import {
    icoHomeTwoTone,
    icoQueryStatsTwoTone,
    icoSensorsTwoTone,
    icoTable,
    icoDashboardTwoTone,
    icoBusinessCenterTwoTone,
    icoHistoryEduTwoTone,
    icoEditTwoTone,
    icoTableRowsTwoTone,
    icoBubbleChartTwoTone,
    icoMyLocationTwoTone,
    icoHttpsTwoTone,
    icoListAltTwoTone,
    icoStorefrontTwoTone
} from './vue3-ico-two-tone'
//const icoHomeTwoTone = (s, c, v) => icoWrapper('<path d="M19,11v9h-5v-6h-4v6H5v-9H3.6L12,3.4l8.4,7.6H19z" opacity=".3"></path><path d="M20,21h-7v-6h-2v6H4v-9H1l11-9.9L23,12h-3V21z M15,19h3v-8.8l-6-5.4l-6,5.4V19h3v-6h6V19z"></path>', s, c);
// Рендер VUE JS компонентов
renderComponents.forEach(item => {
    let instance = createApp(item.component);
    if (item.render){
        instance.use(VueIco, {
            "home": icoHomeTwoTone,
            'edit' : icoEditTwoTone,
            'graph': icoQueryStatsTwoTone,
            'sensors': icoSensorsTwoTone,
            'table': icoTable,
            'dashboard': icoDashboardTwoTone,
            'business_center' : icoBusinessCenterTwoTone,
            'history_edu': icoHistoryEduTwoTone,
            'table_rows': icoTableRowsTwoTone,
            'bubble_chart': icoBubbleChartTwoTone,
            'my_location': icoMyLocationTwoTone,
            'https': icoHttpsTwoTone,
            'list_alt': icoListAltTwoTone,
            'storefront': icoStorefrontTwoTone,
        })
    }
    instance.mount(item.rootSelector)
});

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
