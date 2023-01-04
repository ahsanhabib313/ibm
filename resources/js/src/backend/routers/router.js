import Vue from 'vue'
import Router from 'vue-router'
import axios from 'axios'
// import VueAxios from 'vue-axios'
// import VueResource from 'vue-resource'

import routeList from './router-list'

// axios.defaults.withCredentials = true
axios.defaults.baseURL = window.location.origin

Vue.use(Router, axios)

let router = new Router({
    mode: 'history',
    base: '/admin',
    fallback: true,
    routes: [...routeList]
})

router.beforeEach((to, from, next) => {
    const loggedIn = localStorage.getItem('user')
    const user = JSON.parse(localStorage.getItem('user'))

    if (to.matched.some(record => record.meta.auth) && !loggedIn) {
        // next('/auth/signin')
        location.href = window.location.origin+'/auth/signin'
        return
    } 
    // console.log('user', user); 
    
    next()

    
    
    
})

export default router