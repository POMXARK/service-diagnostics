window.feather = require('feather-icons');
feather.replace();
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import {createApp} from 'vue';
import Sidebar from "./vue/mpa/components/Sidebar.vue";
import VueIco from 'vue3-ico';

// Список компонентов и корневых элементов
let renderComponents = [
    {
        rootSelector: '#vue-sidebar',
        component: Sidebar,
        render: 'any',
    },
]

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
