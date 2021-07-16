require('./bootstrap');

// Import modules...
import { createApp, h } from 'vue';
import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

import axios from 'axios'
import VueAxios from 'vue-axios'


const el = document.getElementById('app');

const app = createApp({
    render: () =>
        h(InertiaApp, {
            initialPage: JSON.parse(el.dataset.page),
            resolveComponent: (name) => require(`./Pages/${name}`).default,
        }),
    })
    .mixin({ methods: { route } })
    .use(InertiaPlugin)
    .mount(el);

app.use(VueAxios, axios)

InertiaProgress.init({ color: '#4B5563' });
