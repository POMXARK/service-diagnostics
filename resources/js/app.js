
import './bootstrap'; // верный путь!

import { createApp } from 'vue'
import Welcome from './components/Welcome'
import AuthSignIn from "./components/AuthSignIn.vue";
import Sidebar from "./components/Sidebar.vue";

const app = createApp({})

app.component('welcome', Welcome)
app.component('vue-auth-sign-in', AuthSignIn)
app.component('vue-sidebar', Sidebar)

app.mount('#app')

import '../sass/app.scss';
