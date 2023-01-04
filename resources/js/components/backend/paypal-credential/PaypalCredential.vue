<template>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Paypal credential</h5>  
        </div>
        <div class="card-body">
          <form class="needs-validation form" novalidate="" @submit.prevent="processData()">
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Paypal Client ID</label>     
                <input class="form-control" type="text" name="client_id" v-model="inputData.client_id" placeholder="Client ID" required="" data-original-title="" title="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Paypal Secret ID</label>     
                <input class="form-control" type="text" name="secret_id" v-model="inputData.secret_id" placeholder="Secret ID" required="" data-original-title="" title="">
              </div> 
             
            </div>
            <button class="btn btn-sm btn-primary float-right" type="submit" data-original-title="" title="">Save Changes</button>
            <!-- <FormButton :isEdit="isEdit" :backUrl="backUrl"></FormButton> -->
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</template>
<script>
import mixin from '../../../src/backend/mixins/mixin'
import path from '../../../src/global-config/mixin/path-solution'
import {mapGetters} from 'vuex'
export default {
 mixins:[path, mixin],
 data(){
     return{
       vehicles:[],
       inputData:{},
       isEdit:false,
       
     }
 },

 computed:{
     ...mapGetters({
         user:'user'
     })
 },

 created(){
  this.backUrl = '/paypal-credential'
  this.generalApi = 'paypal-credential'
  this.isFile = true 

//   this.inputData = this.user.user

  this.getData()
 },

 methods:{

   getData(){      

       let api = this.url+'/api/'+this.generalApi
       axios.get(api)
       .then(res=>{
           console.log('res', res.data);
           this.inputData = res.data
       })
   },

   processData(){

       let formData = new FormData($('.form')[0])

       let api = this.url+'/api/'+this.generalApi

      //  formData.append('_method', 'PUT')

       axios.post(api, formData)
       .then(res=>{

           if(res.status == 200){
               this.toastMessage('success', 'Credential has been stored')
           }
       })

   },

   customFormatter(date) {
      return moment(date).format('MMMM Do YYYY, h:mm:ss a');
    }
 }
}
</script>