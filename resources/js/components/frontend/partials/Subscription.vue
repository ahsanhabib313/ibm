<template>
  <!-- subscribe-area start -->
  <section
    class="subscribe-area border-bot pb-50 pt-md-90 pt-xs-90"
    :class="{
      'ibm-pt': this.$route.name == 'SingleIndustry',
      'pt-0': this.$route.name != 'SingleIndustry',
    }"
  >
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <div class="subscribe-wrapper text-center mb-30">
            <h2>Make a click and get updated with our latest news.</h2>
              <div class="alert alert-success alert-dismissible fade show" role="alert" v-show="success" >
                {{this.message}}
              
              </div>
              <div class="alert alert-warning alert-dismissible fade show" role="alert" v-show="fail" >
                {{this.message}}
             
              </div>
           
            <div class="subscribe-form-box pos-rel">
              <form class="subscribe-form">
                <input type="email" placeholder="Write Your E-mail" />
              </form>
              <button class="sub_btn" @click="subscription">Subscribe Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- subscribe-area end -->
</template>

<script>
import axios from 'axios';
import path from "../../../src/global-config/mixin/path-solution";
export default {
  mixins: [path],
  data(){
    return{
      success: false,
      fail: false,
       message:''

    }
  },
  methods:{
    subscription(){

      let email = $('.subscribe-form').find('input').val();

      let input_data = {
        email: email
      }
     
      axios.post('student/subscription',input_data)
            .then(response=>{
              let res_data = response.data;
              let status = res_data.status;
              let message = res_data.message;

              if(status == 'true'){
                 this.fail = false;
                 this.success = true;
              }else{
                this.fail = true;
                 this.success = false;
              }

              this.message = message;

            })
            .catch(error=>{
               console.log(error)
            })
    }
  }
};
</script>

<style scoped>
.ibm-pt {
  padding-top: 365px !important;
}
</style>
