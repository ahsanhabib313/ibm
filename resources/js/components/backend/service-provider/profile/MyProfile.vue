<template>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Service Provider</h5>  
        </div>
        <div class="card-body">
          <form class="needs-validation form" novalidate="" @submit.prevent="processData()">
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Name</label>     
                <input class="form-control" type="text" name="name" v-model="inputData.name" placeholder="e.g. Jone Doe" required="" data-original-title="" title="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Email</label>     
                <input class="form-control" type="text" name="email" v-model="inputData.email" placeholder="e.g. jone@gmail.com" required="" data-original-title="" title="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Phone</label>     
                <input class="form-control" type="text" name="phone" v-model="inputData.phone" placeholder="e.g. 15852826482" required="" data-original-title="" title="">
              </div> 
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Password</label>     
                <input class="form-control" type="password" name="password"  placeholder="*****" required="" data-original-title="" title="">
              </div> 
               <div class="col-md-6 mb-3">
                <label for="validationCustom02">Photo</label> 
                <input class="form-control" type="file" name="photo" placeholder="">
                
              </div>
               <div class="col-md-6 mb-3">
                <label for="validationCustom02">W-9 Form</label> 
                <a class="mb-4" :href="url+'/assets/file/w-9/fw9.pdf'" download>Click to download W-9 Form</a>
                <input class="form-control" type="file" name="w_9_form" placeholder="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">About</label> 
                <textarea class="form-control" type="text" name="description" v-model="inputData.description" placeholder="Write about you..."></textarea>
              </div>
            </div>
            <!-- <button class="btn btn-primary" type="submit" data-original-title="" title="">Submit form</button> -->
            <FormButton :isEdit="isEdit" :backUrl="backUrl"></FormButton>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</template>
<script>
import mixin from '../../../../src/backend/mixins/mixin'
import {mapGetters} from 'vuex'
export default {
 mixins:[mixin],
 data(){
     return{
       vehicles:[],
       
     }
 },

 computed:{
     ...mapGetters({
         user:'user'
     })
 },

 created(){
  this.backUrl = '/my-profile'
  this.generalApi = 'my-profile'
  this.isFile = true 

//   this.inputData = this.user.user

  this.getProfile()

 },

 methods:{

   getProfile(){

       

       let api = this.url+'/api/'+this.generalApi
       axios.get(api)
       .then(res=>{
           console.log('res', res.data.data);
           this.inputData = res.data.data
       })
   },

   processData(){

       let formData = new FormData($('.form')[0])

       let api = this.url+'/api/'+this.generalApi+'/'+this.user.user.id

       formData.append('_method', 'PUT')

       axios.post(api, formData)
       .then(res=>{

           if(res.status == 200){
               this.toastMessage('success', 'Profile has been updated')
           }
       })

   },

   customFormatter(date) {
      return moment(date).format('MMMM Do YYYY, h:mm:ss a');
    }
 }
}
</script>