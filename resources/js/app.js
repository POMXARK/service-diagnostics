
import './bootstrap'; // верный путь!

import { createApp } from 'vue'
import Welcome from './components/Welcome'


const app = createApp({})

app.component('welcome', Welcome)

app.mount('#app')

import '../sass/app.scss';
