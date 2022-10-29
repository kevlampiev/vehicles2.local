// require('./bootstrap');
//
// import { InertiaApp } from '@inertiajs/inertia-vue'
// import Vue from 'vue'
// import ElementUI from 'element-ui'
// import 'element-ui/lib/theme-chalk/index.css'
//
// Vue.use(InertiaApp)
// Vue.use(ElementUI)
//
// const app = document.getElementById('app')
//
// new Vue({
//     render: h => h(InertiaApp, {
//         props: {
//             initialPage: JSON.parse(app.dataset.page),
//             resolveComponent: name => require(`./Pages/${name}`).default,
//         },
//     }),
// }).$mount(app)

import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'

import MainLayout from './Shared/Layouts/MainLayout'

Vue.use(ElementUI)

createInertiaApp({
    resolve: name => {
      const page = require(`./Pages/${name}`).default
        page.layout = page.layout || MainLayout

        return page
    },
    setup({ el, App, props, plugin }) {
        Vue.use(plugin)

        new Vue({
            render: h => h(App, props),
        }).$mount(el)
    },
})
