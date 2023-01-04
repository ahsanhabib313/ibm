<template>
<base-layout>
 <!--contact-form-area start-->
    <section class="contact-form-area pt-150 pl-20 pr-20  pt-md-100 pt-xs-100 pb-md-70 pb-xs-70">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 card">
                <div class="contact-form-wrapper text-center card-body">
                    <h2 class="mb-30">Login</h2>
                        <p class="mb-20">
                        Don't have an account yet? <router-link to="/signup" class="text-decoration-underline">Sign Up for Free</router-link>
                    </p>
                    <form  @submit.prevent="login" class="row gx-3 comments-form contact-form">
                        <div class="col-lg-12 mb-30">
                            <input type="text" name="email" v-model="email" placeholder="Email">
                        </div>
                        <div class="col-lg-12 mb-30">
                            <input type="password" name="password" v-model="password" placeholder="******">
                        </div>
                            <div class="col-lg-12 mb-30">
                        <button type="submit" class="theme_btn message_btn mt-20">Login</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact-form-area end-->
</base-layout> 
</template>

<script>

import path from '../../../src/global-config/mixin/path-solution'
import BaseLayout from '../layouts/BaseLayout.vue'
export default {
  components: { BaseLayout },
mixins:[path],
  data(){
    return{
      
      email:'',
      password:''
    }
  },
  methods:{
      login(){
          this.$store
          .dispatch('login', {
              email: this.email,
              password: this.password
          }).then(res => {
            //   this.$router.push({name:"Home"})

            // console.log(res);
            
          }).catch(error => {
            console.log('error.response', error);
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
                        input.after('<span class="text-danger">'+error.response.data.errors[item]+'</span>')

                })

              } else {

              }
          })
      }
  }
}
</script>

