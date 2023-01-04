<template>
 
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Post</h5>  
        </div>
        <div class="card-body">
          <form class="needs-validation form" novalidate="" @submit.prevent="processData()">
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Title</label>     
                <input class="form-control" type="text" name="title" v-model="inputData.title" placeholder="e.g Demolation Hauling" required="" data-original-title="" title="">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Feature Image</label>     
                <input class="form-control" type="file" name="feature_image">
              </div>
           
              <div class="col-md-12 mb-3">
                <label for="validationCustom02">Content</label> 
                <vue-editor style="min-height:100px;"  v-model="inputData.content" placeholder="Write content ..."></vue-editor>
                <textarea style="display:none;" class="form-control" name="content" v-model="inputData.content" placeholder=""></textarea>
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
  this.backUrl = '/post'
  this.generalApi = 'post'
  this.isFile = true 


 },

 methods:{
   
 }
}
</script>