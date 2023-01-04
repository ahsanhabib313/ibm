<template>
        <!-- slide-bar start -->
    <aside class="slide-bar">
        <div class="close-mobile-menu">
            <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
        </div>

        <!-- offset-sidebar start -->
        <div class="offset-sidebar">
            <div class="offset-widget offset-logo mb-30">
                <a href="/">
                    <img :src="image_url+'/frontend/assets/img/logo/logo.png'" alt="logo">
                </a>
            </div>
            <div class="offset-widget mb-40">
                <div class="info-widget">
                    <h4 class="offset-title mb-20">About Us</h4>
                    <p class="mb-30">
                        The Institute Of Business and Management (Victoria) is a Registered Training Organisation that offers a vibrant, unique learning experience for students.
                    </p>
                    <a class="theme_btn theme_btn_bg" href="/contact-us">Contact Us</a>
                </div>
            </div>
            <div class="offset-widget mb-30 pr-10">
                <div class="info-widget info-widget2">
                    <h4 class="offset-title mb-20">Contact Info</h4>
                    <p> <i class="fal fa-address-book"></i> 60 Belfast St BROADMEADOWS VIC 3047</p>
                    <p> <i class="fal fa-phone"></i> ++(03) 9478 3163 </p>
                    <p> <i class="fal fa-envelope-open"></i> info@ibm.vic.edu.au </p>
                </div>
            </div>
        </div>
        <!-- offset-sidebar end -->

        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu">
            <ul id="mobile-menu-active">
               <li><a href="/">Home</a></li>
                <li><a href="/about-us">About</a></li>
                <li class="has-dropdown">
                    <a href="#">Courses</a>
                    <ul class="sub-menu">
                        <li v-for="course, index in courses" :key="index"><a :href="'/courses/'+course.slug.replaceAll('_', '-', course.slug.toLowerCase())">{{course.title}}</a></li>
                        <li><a href="/courses">All Courses</a></li>
                    </ul>
                </li>
               
                <li><a href="/contact-us">Contact &nbsp; Us</a></li>
                <li><a v-if="user == null" href="/signin">Sign In</a></li>
                <li><a v-if="user == null" href="/signup">Register</a></li>
                <li><a v-if="user != null" href="/profile"> Profile</a></li>
                <li><router-link v-if="user != null" href="#" @click.native="signOut()"> Logout</router-link></li>
            </ul>
        </nav>
        <!-- side-mobile-menu end -->
    </aside>
    <!-- <div class="body-overlay"></div> -->
    <!-- slide-bar end -->
</template>

<script>
import {mapGetters} from 'vuex'
import path from '../../../src/global-config/mixin/path-solution'
export default {
    mixins:[path],
    data(){
        return{
            courses:[]
        }
    },

    created(){
        this.getCourses()
    },

    computed:{
        ...mapGetters({

            user:'user'

        })
    },

    methods:{
        getCourses(){
            axios.get(this.base_url+'/api/get-course')
                .then(response=>{
                    this.courses = response.data.data
                })
                .catch(error=>{
                    console.log(error)
                })
        },

        signOut(){
            this.$store.dispatch('signOut')
        },
    }
       
}
</script>