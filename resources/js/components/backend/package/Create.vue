<template>
 
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Package</h5>  
        </div>
        <div class="card-body">
          <form class="needs-validation form" novalidate="" @submit.prevent="processData()">
            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label for="validationCustom02">Name</label>     
                <input class="form-control" type="text" name="name" v-model="inputData.name" placeholder="" required="" data-original-title="" title="">
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom02">Package Type</label>    
                <v-select :options="packageTypes" :reduce="packageType => packageType.package_type" label="name" v-model="inputData.package_type" placeholder="Select Package Type"></v-select> 
                <input  type="hidden" name="package_type" v-model="inputData.package_type">
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom02">Group</label>     
                <input class="form-control" type="text" name="group" v-model="inputData.group" placeholder="" required="" data-original-title="" title="">
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom02">Person</label>     
                <input class="form-control" type="text" name="number_of_person" v-model="inputData.number_of_person" placeholder="" required="" data-original-title="" title="">
              </div> 
            </div>
            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label for="validationCustom02">Price</label>     
                <input class="form-control" type="text" name="price" v-model="inputData.price" placeholder="" required="" data-original-title="" title="">
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom02">Start</label><br>
                <date-picker name="start_date" v-model="inputData.start_date" :value="inputData.start_date" valueType="format" format="DD-MM-Y"></date-picker>  
                <input type="hidden" name="start_date" v-model="inputData.start_date">
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom02">Expired</label><br>
                <date-picker name="end_date" v-model="inputData.end_date" :value="inputData.end_date" valueType="format" format="DD-MM-Y"></date-picker>  
                <input type="hidden" name="end_date" v-model="inputData.end_date">
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom02">Package Image</label> 
                <input class="form-control" type="file" name="package_image">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationCustom02">Description</label> 
                <textarea class="form-control" type="text" name="description" v-model="inputData.description" placeholder=""></textarea>
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
       packageTypes:[
         {package_type:1, name:'Picnic'},
         {package_type:2, name:'Family'},
       ],
       
     }
 },
 created(){
  this.backUrl = '/package'
  this.generalApi = 'package'
  this.isFile = true 

 },

 methods:{
   customFormatter(date) {
      return moment(date).format('MMMM Do YYYY, h:mm:ss a');
    }
 }
}
</script>