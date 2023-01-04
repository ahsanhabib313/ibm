<template>
<div class="container-fluid p-0">
  <!-- login page with video background start-->
  <div class="auth-bg-video">
    <video id="bgvid" :poster="image_url+'/backend/assets/images/other-images/coming-soon-bg.jpg'" playsinline="" autoplay="" muted="" loop="">
      <source :src="image_url+'/backend/assets/video/auth-bg.mp4'" type="video/mp4">
    </video>
    <div class="authentication-box">
      <div class="text-center"><img  style="width:200px; height:70px;" :src="image_url+'/backend/assets/images/logo/logo.png'" alt=""></div>
      <div class="card mt-4">
        <div class="card-body">
          <div class="text-center">
            <h4>LOGIN</h4>
            <h6>For Admin Access</h6>
          </div>
           <form class="theme-form" @submit.prevent="signIn">
                <div class="form-group">
                  <label class="col-form-label pt-0">Email</label>
                  <input class="form-control" type="text" name="email" v-model="email" required="">
                </div>
                <div class="form-group">
                  <label class="col-form-label">Password</label>
                  <input class="form-control" type="password" name="password" v-model="password" required="">
                </div>
                <div class="checkbox p-0">
                  <input id="checkbox1" type="checkbox">
                  <label for="checkbox1">Remember me</label>
                </div>
                <div class="form-group form-row mt-3 mb-0">
                  <button class="btn btn-primary btn-block" type="submit">Sign In</button>
                </div>
              </form>
        </div>
      </div>
    </div>
  </div>
  <!-- login page with video background end-->
</div>
</template>
<script>
import path from '../../../src/global-config/mixin/path-solution'
export default {
  mixins:[path],
  data(){
    return{
      email:'',
      password:''
    }
  },
  methods:{
      signIn(){
          this.$store
          .dispatch('signIn', {
              email: this.email,
              password: this.password
          }).then(() => {
            //   this.$router.push({name:"Home"})
            
          }).catch(error => {
              if(error.response.status == 404){

                  this.errorMsg = error.response.data.message[0]

              } else if(error.response.status == 401){

                  this.errorMsg = error.response.data.message[0]

              } else if(error.response.status == 422) {

                   $.each(error.response.data.errors, function(item,index){

                        let input = jQuery(document).find('input[name="'+item+'"]')
                        let inputAfter = jQuery(document).find('input[name="'+item+'"] + span')

                        input.addClass('is-invalid') 
                        
                        inputAfter.remove() 
                        // input.after('<span class="text-danger">'+error.response.data.errors[item]+'</span>')

                })

              } else {

              }
          })
      }
  }
}
</script>