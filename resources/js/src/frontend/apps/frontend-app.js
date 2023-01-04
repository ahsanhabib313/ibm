/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("../../bootstrap");

import Vue from "vue";
import moment from "moment";
import Toasted from "vue-toasted";
import VuejsDialog from "vuejs-dialog";
import VuejsDialogMixin from "vuejs-dialog/dist/vuejs-dialog-mixin.min.js"; // only needed in custom components
import "vuejs-dialog/dist/vuejs-dialog.min.css";
Vue.use(Toasted);
Vue.use(VuejsDialog);
Vue.use(VuejsDialogMixin);
import VueSweetalert2 from "vue-sweetalert2";
Vue.use(VueSweetalert2);
import "sweetalert2/dist/sweetalert2.min.css";
import VueMobileDetection from "vue-mobile-detection";
Vue.use(VueMobileDetection);

import Lightbox from "vue-easy-lightbox";

Vue.use(Lightbox);

import PulseLoader from "vue-spinner/src/PulseLoader.vue";

Vue.component("PulseLoader", PulseLoader);

import DatePicker from "vue2-datepicker";
import "vue2-datepicker/index.css";

Vue.use(DatePicker);

// Main JS (in UMD format)
import VueTimepicker from "vue2-timepicker";

// CSS
import "vue2-timepicker/dist/VueTimepicker.css";

Vue.component("VueTimepicker", VueTimepicker);

// import VueHtmlToPaper from 'vue-html-to-paper';

// const options = {
//   name: '_blank',
//   specs: [
//     'fullscreen=yes',
//     'titlebar=yes',
//     'scrollbars=yes'
//   ],
//   styles: [
//     'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
//     'https://unpkg.com/kidlat-css/css/kidlat.css'
//   ],
//   timeout: 1000, // default timeout before the print window appears
//   autoClose: true, // if false, the window will not close after printing
//   windowTitle: window.document.title, // override the window title
// }

// Vue.use(VueHtmlToPaper, options);

// // or, using the defaults with no stylesheet
// Vue.use(VueHtmlToPaper);

import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";
Vue.component("v-select", vSelect);

// import alanBtn from "@alan-ai/alan-sdk-web";

// alanBtn({
//   key: 'afcc31c6add622d54ca335b918d068a22e956eca572e1d8b807a3e2338fdd0dc/stage',
//   onCommand: (commandData) => {
//     if (commandData.command === 'go:back') {
//       //call client code that will react to the received command
//     }
//   },
// });

import master from "../../../components/frontend/layouts/Master";
import router from "./../../frontend/routers/router";
import store from "./../../frontend/stores/store";

Vue.component(
    "Navbar",
    require("../../../components/frontend/layouts/Navbar").default
);
Vue.component(
    "FooterContent",
    require("../../../components/frontend/layouts/FooterContent").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    router,
    moment,
    store,
    created() {
        const userInfo = localStorage.getItem("user");
        if (userInfo) {
            const userData = JSON.parse(userInfo);
            this.$store.commit("setUserData", userData);
        }
        axios.interceptors.response.use(
            (response) => response,
            (error) => {
                if (error.response.status === 401) {
                    this.$store.dispatch("singOut");
                }
                return Promise.reject(error);
            }
        );
    },
    render: (h) => h(master),
}).$mount("#frontend_app");

// Voice script
