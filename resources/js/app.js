import './bootstrap';
import Vue from 'vue';
import Buefy from 'buefy';
import 'buefy/dist/buefy.css';

import router from './router';
import App from './layout/App.vue';

Vue.use(Buefy)

new Vue({
    router,
    el: '#app',
    render: h => h(App)
});
