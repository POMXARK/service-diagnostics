import {createApp} from 'vue'
import Graphs from "./vue/common/Graphs.vue";

window.axios = require('axios');
window.ApexCharts = require('apexcharts');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Список компонентов и корневых элементов
let renderComponents = [
    {
        rootSelector: '#vue-graphs',
        component: Graphs,
        render: 'any',
    },
]

// Рендер VUE JS компонентов
renderComponents.forEach(item => {
    let instance = createApp(item.component);
    if (item.render){
    }
    instance.mount(item.rootSelector)
});
