<template>
 
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Service</h5>  
        </div>
        <div class="card-body">
          <form class="needs-validation form" novalidate="" @submit.prevent="processData()">
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Service Name</label>     
                <input class="form-control" type="text" name="name" v-model="inputData.name" placeholder="e.g Demolation Hauling" required="" data-original-title="" title="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Price</label>     
                <input class="form-control" type="text" name="price" v-model="inputData.price" placeholder="e.g 500" required="" data-original-title="" title="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Commission</label>     
                <input class="form-control" type="text" name="commission" v-model="inputData.commission" placeholder="e.g 50" required="" data-original-title="" title="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Commission Percentage</label>     
                <input class="form-control" type="text" name="commission_percentage" v-model="inputData.commission_percentage" placeholder="e.g 5" required="" data-original-title="" title="">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Desktop Icon</label>     
                <input class="form-control" type="file" name="desktop_icon">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Mobile Icon</label>     
                <input class="form-control" type="file" name="mobile_icon">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Image</label>     
                <input class="form-control" type="file" name="image">
              </div>
           
              <div class="col-md-12 mb-3">
                <label for="validationCustom02">Description</label> 
                <vue-editor style="min-height:100px;"  v-model="inputData.details" placeholder="Write description ..."></vue-editor>
                <textarea style="display:none;" class="form-control" name="details" v-model="inputData.details" placeholder=""></textarea>
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
       
     }
 },
 created(){
  this.backUrl = '/service'
  this.generalApi = 'service'
  this.isFile = true 


 },

 methods:{
   
 }
}
</script>