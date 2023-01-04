<template>
    
<!-- Page Sidebar Start-->
<div class="page-sidebar">
  <div class="main-header-left d-none d-lg-block">
    <div class="logo-wrapper"><router-link to="#" style="font-weight: 600;color:#fff;"><img style="width:208px;background:#fff;" :src="image_url+'/backend/assets/images/logo/logo.png'" alt=""></router-link></div>
  </div>
  <div class="sidebar custom-scrollbar">
    <div class="sidebar-user text-center">
      <div><img class="img-60 rounded-circle" :src="image_url+'/uploads/user/'+profile_pic" alt="#">
        <!-- <div class="profile-edit"><router-link to="edit-profile" target="_blank"><i data-feather="edit"></i></router-link></div> -->
      </div>
      <h6 class="mt-3 f-14">{{user.user.name}}</h6>
      <p>{{user.user.user_type == 1?'Admin':(user.user.user_type == 2?'Service Provider':'')}}</p>
    </div>
    <ul class="sidebar-menu">

      <li :class="this.$route.path == '/' ? 'active' : '' "><router-link class="sidebar-header" to="/"><i data-feather="home"></i><span>Dashboard </span></router-link></li> 
      <li :class="this.$route.path == '/students' ? 'active' : '' "><router-link class="sidebar-header" to="/students"><i data-feather="users"></i><span>Students </span></router-link></li> 
      <li :class="this.$route.path == '/certificate' ? 'active' : '' "><router-link class="sidebar-header" to="/certificate"><i data-feather="file"></i><span>Certificate </span></router-link></li> 
      <li :class="this.$route.path == '/agents' ? 'active' : '' "><router-link class="sidebar-header" to="/agents"><i data-feather="users"></i><span>Partner Agent </span></router-link></li> 
      <li v-if="user.user.user_type == 1"> 
        <router-link class="sidebar-header" to="/post"><i data-feather="send"></i><span>Post</span><i class="fa fa-angle-right pull-right"></i> 
        </router-link> 
        <ul class="sidebar-submenu"> 
          <li><router-link to="/post/create" :class="this.$route.path == '/post/create'?'active':''"><i class="fa fa-circle"></i>New Post</router-link></li> 
          <li><router-link to="/post" :class="this.$route.path == '/post'?'active':''"><i class="fa fa-circle"></i> Post List</router-link></li> 
        </ul>
      </li>
      <li v-if="user.user.user_type == 1"> 
        <router-link class="sidebar-header" to="/course-category"><i data-feather="list"></i><span>Course Category</span><i class="fa fa-angle-right pull-right"></i> 
        </router-link> 
        <ul class="sidebar-submenu"> 
          <li><router-link to="/course-category/create" :class="this.$route.path == '/course-category/create'?'active':''"><i class="fa fa-circle"></i>New Course Category</router-link></li> 
          <li><router-link to="/course-category" :class="this.$route.path == '/course-category'?'active':''"><i class="fa fa-circle"></i> Course Category List</router-link></li> 
        </ul>
      </li>
      <li v-if="user.user.user_type == 1"> 
        <router-link class="sidebar-header" to="/courses"><i data-feather="book"></i><span>Courses</span><i class="fa fa-angle-right pull-right"></i> 
        </router-link> 
        <ul class="sidebar-submenu"> 
          <li><router-link to="/courses/create" :class="this.$route.path == '/courses/create'?'active':''"><i class="fa fa-circle"></i>New Courses</router-link></li> 
          <li><router-link to="/courses" :class="this.$route.path == '/courses'?'active':''"><i class="fa fa-circle"></i> Courses List</router-link></li> 
        </ul>
      </li>
      <li v-if="user.user.user_type == 1"> 
        <router-link class="sidebar-header" to="/message-list"><i data-feather="mail"></i><span>Customer Message</span>
        </router-link> 
        <!-- <ul class="sidebar-submenu"> 
          <li><router-link to="/message-list" :class="this.$route.path == '/message-list'?'active':''"><i class="fa fa-circle"></i> Message List</router-link></li> 
          
        </ul> -->
      </li>
       <!-- <li v-if="user.user.user_type == 1"> 
        <router-link class="sidebar-header" to="/service-provider"><i data-feather="cloud"></i><span>Service Provider</span><i class="fa fa-angle-right pull-right"></i> 
        </router-link> 
        <ul class="sidebar-submenu"> 
          <li><router-link to="/service-provider/create" :class="this.$route.path == '/service-provider/create'?'active':''"><i class="fa fa-circle"></i>New service provider</router-link></li> 
          <li><router-link to="/service-provider" :class="this.$route.path == '/service-provider'?'active':''"><i class="fa fa-circle"></i> service provider List</router-link></li> 
          
          <li><router-link to="/provider-service/create" :class="this.$route.path == '/provider-service/create'?'active':''"><i class="fa fa-circle"></i>Assign Service</router-link></li> 
          <li><router-link to="/provider-service" :class="this.$route.path == '/provider-service'?'active':''"><i class="fa fa-circle"></i> Assign List</router-link></li> 
        </ul>
      </li>
       <li v-if="user.user.user_type == 1"> 
        <router-link class="sidebar-header" to="/customer"><i data-feather="cloud"></i><span>customer</span><i class="fa fa-angle-right pull-right"></i> 
        </router-link> 
        <ul class="sidebar-submenu"> 
          <li><router-link to="/customer/create" :class="this.$route.path == '/customer/create'?'active':''"><i class="fa fa-circle"></i>New customer</router-link></li> 
          <li><router-link to="/customer" :class="this.$route.path == '/customer'?'active':''"><i class="fa fa-circle"></i> customer List</router-link></li> 
        </ul>
      </li>
      
      <li v-if="user.user.user_type == 1"> 
        <router-link class="sidebar-header" to="/service"><i data-feather="cloud"></i><span>Service</span><i class="fa fa-angle-right pull-right"></i> 
        </router-link> 
        <ul class="sidebar-submenu"> 
          <li><router-link to="/service/create" :class="this.$route.path == '/service/create'?'active':''"><i class="fa fa-circle"></i>New Service</router-link></li> 
          <li><router-link to="/service" :class="this.$route.path == '/service'?'active':''"><i class="fa fa-circle"></i> Service List</router-link></li> 
        </ul>
      </li>

      <li v-if="user.user.user_type == 1"> 
        <router-link class="sidebar-header" to="/gallery"><i data-feather="cloud"></i><span>Gallery</span><i class="fa fa-angle-right pull-right"></i> 
        </router-link> 
        <ul class="sidebar-submenu"> 
          <li><router-link to="/gallery/create" :class="this.$route.path == '/gallery/create'?'active':''"><i class="fa fa-circle"></i>New Gallery</router-link></li> 
          <li><router-link to="/gallery" :class="this.$route.path == '/gallery'?'active':''"><i class="fa fa-circle"></i> Gallery List</router-link></li> 
        </ul>
      </li> -->
      

    </ul>
  </div>
</div>
<!-- Page Sidebar Ends-->
</template>
<script>
import { mapGetters } from 'vuex'
import path from '../../../src/global-config/mixin/path-solution'
export default {
  mixins:[path],
    data(){
        return{
         profile_pic:''
        }
    },

    
    created(){
       if(this.user != null){

            this.profile_pic = this.user.user.photo == null?'profile.png':this.user.user.photo

        }
    },

    computed:{
      ...mapGetters({
        user:'user'
      })
    }
}
</script>