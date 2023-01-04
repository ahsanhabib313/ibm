<template>
<div>
 <!-- Page Sidebar Start-->
<div class="page-sidebar">
  <div class="main-header-left d-none d-lg-block">
    <div class="logo-wrapper"><router-link to="#" style="font-weight: 600;color:#fff;"><img style="width:100px;" :src="url+'/assets/images/city-logo.png'" alt=""> resort</router-link></div>
  </div>
  <div class="sidebar custom-scrollbar">
    <!-- <div class="sidebar-user text-center">
      <div><img class="img-60 rounded-circle" :src="url+'/assets/images/user/1.jpg'" alt="#">
        <div class="profile-edit"><router-link to="edit-profile" target="_blank"><i data-feather="edit"></i></router-link></div>
      </div>
      <h6 class="mt-3 f-14">ELANA</h6>
      <p>General Manager.</p>
    </div> -->
    <ul class="sidebar-menu">

      <li :class="this.$route.path == '/' ? 'active' : '' "><router-link class="sidebar-header" to="/"><i data-feather="home"></i><span>Dashboard </span></router-link></li>      
      <li> 
        <router-link class="sidebar-header" to="/package"><i data-feather="cloud"></i><span>Package</span><i class="fa fa-angle-right pull-right"></i> 
        </router-link> 
        <ul class="sidebar-submenu"> 
          <li><router-link to="/package/create" :class="this.$route.path == '/package/create'?'active':''"><i class="fa fa-circle"></i>New Package</router-link></li> 
          <li><router-link to="/package" :class="this.$route.path == '/package'?'active':''"><i class="fa fa-circle"></i> Package List</router-link></li> 
        </ul>
      </li>
      <li> 
        <router-link class="sidebar-header" to="/service"><i data-feather="cloud"></i><span>Service</span><i class="fa fa-angle-right pull-right"></i> 
        </router-link> 
        <ul class="sidebar-submenu"> 
          <li><router-link to="/service/create" :class="this.$route.path == '/service/create'?'active':''"><i class="fa fa-circle"></i>New Service</router-link></li> 
          <li><router-link to="/service" :class="this.$route.path == '/service'?'active':''"><i class="fa fa-circle"></i> Service List</router-link></li> 
        </ul>
      </li>
    </ul>
  </div>
</div>
<!-- Page Sidebar Ends-->   

<!-- Right sidebar Start-->
<div class="right-sidebar" id="right_side_bar">
  <div>
    <div class="container p-0">
      <div class="modal-header p-l-20 p-r-20">
        <div class="col-sm-8 p-0">
          <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
        </div>
        <div class="col-sm-4 text-right p-0"><i class="mr-2" data-feather="settings"></i></div>
      </div>
    </div>
    <div class="friend-list-search mt-0">
      <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
    </div>
    <div class="p-l-30 p-r-30">
      <div class="chat-box">
        <div class="people-list friend-list">
          <ul class="list">
            <li class="clearfix"><img class="rounded-circle user-image" :src="url+'/assets/images/user/1.jpg'" alt="">
              <div class="status-circle online"></div>
              <div class="about">
                <div class="name">Vincent Porter</div>
                <div class="status"> Online</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" :src="url+'/assets/images/user/2.png'" alt="">
              <div class="status-circle away"></div>
              <div class="about">
                <div class="name">Ain Chavez</div>
                <div class="status"> 28 minutes ago</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" :src="url+'/assets/images/user/8.jpg'" alt="">
              <div class="status-circle online"></div>
              <div class="about">
                <div class="name">Kori Thomas</div>
                <div class="status"> Online</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" :src="url+'/assets/images/user/4.jpg'" alt="">
              <div class="status-circle online"></div>
              <div class="about">
                <div class="name">Erica Hughes</div>
                <div class="status"> Online</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" :src="url+'/assets/images/user/5.jpg'" alt="">
              <div class="status-circle offline"></div>
              <div class="about">
                <div class="name">Ginger Johnston</div>
                <div class="status"> 2 minutes ago</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" :src="url+'/assets/images/user/6.jpg'" alt="">
              <div class="status-circle away"></div>
              <div class="about">
                <div class="name">Prasanth Anand</div>
                <div class="status"> 2 hour ago</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" :src="url+'/assets/images/user/7.jpg'" alt="">
              <div class="status-circle online"></div>
              <div class="about">
                <div class="name">Hileri Jecno</div>
                <div class="status"> Online</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Right sidebar Ends-->
</div>    

</template>
<script>
export default {
    data(){
        return{
          url:window.location.origin
        }
    }
}
</script>