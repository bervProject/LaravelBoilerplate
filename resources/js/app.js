import './bootstrap';
import { createApp } from 'vue';
import Oruga from '@oruga-ui/oruga-next';
import { bulmaConfig } from '@oruga-ui/theme-bulma';
import '@oruga-ui/theme-bulma/dist/bulma.css';

import router from './router';
import App from './layout/App.vue';

const app = createApp(App);

app.use(router);
app.use(Oruga, bulmaConfig);

app.mount('#app');
