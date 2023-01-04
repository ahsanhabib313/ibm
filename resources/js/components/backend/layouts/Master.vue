<template>
 <div class="page-wrapper">
   <main-header v-if="is_sidebar" :signOut="signOut"></main-header>
  <div class="page-body-wrapper">
    <left-sidebar v-if="is_sidebar"></left-sidebar>
    <right-sidebar v-if="is_sidebar"></right-sidebar>
    <!-- <sidebar></sidebar> -->
    
    <div class="page-body">
    <!-- breadcrumb  Start -->
    <div class="container-fluid" v-if="is_sidebar">
      <div class="page-header">
        <div class="row">
          <breadcrumb :breadcrumb_title="breadcrumb_title" :next_one="next_one" :next_two="next_two"></breadcrumb>
          <!-- Bookmark Start-->
          <!-- <div class="col">
            <div class="bookmark pull-right">
              <ul>
                <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Calendar"><i data-feather="calendar"></i></a></li>
                <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Mail"><i data-feather="mail"></i></a></li>
                <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                  <form class="form-inline search-form">
                    <div class="form-group form-control-search">
                      <input type="text" placeholder="Search..">
                    </div>
                  </form>
                </li>
              </ul>
            </div>
          </div> -->
          <!-- Bookmark Ends-->
        </div>
      </div>
    </div>                    
    <!-- End Breadcrumb -->
      <router-view key="this.$router.fullPath"></router-view>
    </div>
    <footer></footer>
  </div>
 </div>  
</template>
<script>
export default {

data() { 
     return { 
       is_sidebar:false,
       breadcrumb_title:'',
       next_one:'',
       next_two:'',
     }
   },

   created(){
     if(this.$route.name != 'SignIn'){
       this.is_sidebar = true 
     }
   },

   methods:{
     signOut(){
      this.$store.dispatch('signOut')
    }
   }
   
}
</script>