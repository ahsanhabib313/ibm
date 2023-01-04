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
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Name</label>     
                <input class="form-control" type="text" name="name" v-model="inputData.name" placeholder="e.g. Jone Doe" required="" data-original-title="" title="">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Email</label>     
                <input class="form-control" type="text" name="email" v-model="inputData.email" placeholder="e.g. jone@gmail.com" required="" data-original-title="" title="">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Phone</label>     
                <input class="form-control" type="text" name="phone" v-model="inputData.phone" placeholder="e.g. 15852826482" required="" data-original-title="" title="">
              </div> 
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Password</label>     
                <input class="form-control" type="password" name="password" v-model="inputData.password" placeholder="*****" required="" data-original-title="" title="">
              </div> 
               <div class="col-md-4 mb-3">
                <label for="validationCustom02">Photo</label> 
                <input class="form-control" type="file" name="photo" placeholder="">
              </div>
               <div class="col-md-4 mb-3">
                <label for="validationCustom02">W-9 Form</label> 
                <a class="mb-4" :href="url+'/assets/file/w-9/fw9.pdf'" download>Click to download W-9 Form</a>
                <input class="form-control" type="file" name="w_9_form" placeholder="">
              </div>
              <!-- <div class="col-md-3 mb-3">
                <label for="validationCustom02">NID</label>     
                <input class="form-control" type="text" name="nid" v-model="inputData.nid" placeholder="" required="" data-original-title="" title="">
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom02">Date of Birth</label><br>
                <date-picker name="dob" v-model="inputData.dob" :value="inputData.dob" valueType="format" format="DD-MM-Y"></date-picker>  
                <input type="hidden" name="dob" v-model="inputData.dob">          
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom02">Joing Date</label><br>
                <date-picker name="joining_date" v-model="inputData.joining_date" :value="inputData.dob" valueType="format" format="DD-MM-Y"></date-picker>
                <input type="hidden" name="joining_date" v-model="inputData.joining_date">
              </div> -->
            </div>
            <div class="form-row">
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
import mixin from '../../../src/backend/mixins/mixin'
export default {
 mixins:[mixin],
 data(){
     return{
       vehicles:[],
       
     }
 },
 created(){
  this.backUrl = '/service-provider'
  this.generalApi = 'service-provider'
  this.isFile = true 

 },

 methods:{
   customFormatter(date) {
      return moment(date).format('MMMM Do YYYY, h:mm:ss a');
    }
 }
}
</script>