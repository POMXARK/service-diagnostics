import AuthSignIn from "./vue/mpa/components/AuthSignIn.vue";
import {createApp} from 'vue'

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Список компонентов и корневых элементов
let renderComponents = [
    {
        rootSelector: '#vue-auth-sign-in',
        component: AuthSignIn,
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
