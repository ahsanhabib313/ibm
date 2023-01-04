<template>
 
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Assign Service to Provider</h5>  
        </div>
        <div class="card-body">
          <form class="needs-validation form" novalidate="" @submit.prevent="processData()">
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Provider</label> 
                <v-select :options="providers" :reduce="provider => provider.id" label="name" v-model="inputData.user_id" placeholder="Select Package"></v-select>    
                <input class="form-control" type="hidden" name="user_id" v-model="inputData.user_id" placeholder="" required="" data-original-title="" title="">
              </div>
              <div class="col-md-8 mb-3">
                <label for="validationCustom02">Service</label>   
                <v-select :options="services" :reduce="service => service.id" label="name" v-model="inputData.service_id" placeholder="Select Service" multiple></v-select>      
                <input class="form-control" type="hidden" name="service_id[]" v-model="inputData.service_id" placeholder="" required="" data-original-title="" title="">
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
       services:[],
       providers:[]
     }
 },
 created(){
  this.backUrl = '/provider-service'
  this.generalApi = 'provider-service'
  this.isForm = true 
  this.getData()

 },

 methods:{
   getData(){
     axios.get(this.url+'/api/'+this.generalApi)
     .then(res =>{
       this.services = res.data.services
       this.providers = res.data.providers
     })
   }
 }
}
</script>