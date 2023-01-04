/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../../bootstrap');

import Vue from 'vue' 
import moment from 'moment'
import Toasted from 'vue-toasted';
import VuejsDialog from 'vuejs-dialog';
import VuejsDialogMixin from 'vuejs-dialog/dist/vuejs-dialog-mixin.min.js'; // only needed in custom components
import 'vuejs-dialog/dist/vuejs-dialog.min.css';
Vue.use(Toasted)
Vue.use(VuejsDialog)
Vue.use(VuejsDialogMixin)

import DatePicker from 'vue2-datepicker';
import 'vue2-datepicker/index.css';

Vue.use(DatePicker)

import VueEditor from "vue2-editor";

Vue.use(VueEditor);

import PulseLoader from 'vue-spinner/src/PulseLoader.vue'

Vue.component('PulseLoader', PulseLoader)

import JsonExcel from "vue-json-excel";
Vue.component("downloadExcel", JsonExcel);

import vSelect from 'vue-select'
import 'vue-select/dist/vue-select.css';
Vue.component('v-select', vSelect)

Vue.component('pagination', require('laravel-vue-pagination'));

import master from '../../../components/backend/layouts/Master';
import router from '../routers/router';
import store from '../stores/store';

Vue.component('TableContent', require('../../../components/backend/layouts/TableContent').default);
Vue.component('FormButton', require('../../../components/backend/layouts/FormButton').default);
Vue.component('LeftSidebar', require('../../../components/backend/layouts/LeftSidebar').default);
Vue.component('RightSidebar', require('../../../components/backend/layouts/RightSidebar').default);
Vue.component('Sidebar', require('../../../components/backend/layouts/Sidebar').default);
Vue.component('Footer', require('../../../components/backend/layouts/Footer').default);
Vue.component('Breadcrumb', require('../../../components/backend/layouts/Breadcrumb').default);
Vue.component('MainHeader', require('../../../components/backend/layouts/Header').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 const app = new Vue({
    router,moment,store,
    created() {
        const userInfo = localStorage.getItem("user");
        if (userInfo) {
            const userData = JSON.parse(userInfo);
            this.$store.commit("setUserData", userData);
        }
        axios.interceptors.response.use(
            response => response,
            error => {
                if (error.response.status === 401) {
                    this.$store.dispatch('singOut')
                }
                return Promise.reject(error)
            }
        )
    },
    render: h => h(master)
}).$mount('#app');
