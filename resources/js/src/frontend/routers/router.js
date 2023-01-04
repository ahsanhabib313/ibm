import Vue from 'vue'
import Router from 'vue-router'
import axios from 'axios'
// import VueAxios from 'vue-axios'
// import VueResource from 'vue-resource'

import routeGeneralPages from './router-general-pages'
import routerMainPages from './router-main-pages'
import routerSecondaryPages from './router-secondary-pages'

// axios.defaults.withCredentials = true
axios.defaults.baseURL = window.location.origin

Vue.use(Router, axios)

let router = new Router({
    mode: 'history',
    base: '/',
    fallback: true,
    routes: [...routeGeneralPages, ...routerMainPages, ...routerSecondaryPages]
})

router.beforeEach((to, from, next) => {
    const loggedIn = localStorage.getItem('user')
    const user = JSON.parse(localStorage.getItem('user'))

    if (to.matched.some(record => record.meta.auth) && !loggedIn) {
        // next('/auth/signin')
        // location.href = window.location.origin+'/auth/signin'
        return
    } 
    // console.log('user', user); 
    
    next()

    
    
    
})

export default router