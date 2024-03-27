import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import '../css/app.css';
import { createApp, h } from 'vue';
// import App from './pages/App.vue'; 

createInertiaApp({
 resolve: (name) => resolvePageComponent(`./pages/${name}.vue`, import.meta.glob('./pages/**/*.vue')),
 setup({ el, props, App , plugin }) {
    createApp({ render: () => h(App, props) }) 
      .use(plugin)
      .mount(el);
 },
});
