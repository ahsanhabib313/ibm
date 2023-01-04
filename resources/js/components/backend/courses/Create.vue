<template>
 
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Course</h5>  
        </div>
        <div class="card-body">
          <form class="needs-validation form" novalidate="" @submit.prevent="processData()">
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Title</label>     
                <input class="form-control" type="text" name="title" v-model="inputData.title" placeholder="e.g Diploma of Business BSB50120" required="" data-original-title="" title="">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Course Code</label>     
                <input class="form-control" type="text" name="course_code" v-model="inputData.course_code" placeholder="e.g BSB50120" required="" data-original-title="" title="">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">CRICOS Code</label>     
                <input class="form-control" type="text" name="cricos_code" v-model="inputData.cricos_code" placeholder="e.g 105493A" required="" data-original-title="" title="">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Duration</label>     
                <input class="form-control" type="text" name="duration" v-model="inputData.duration" placeholder="e.g. 54" required="" data-original-title="" title="">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Course Category</label> 
                <v-select :options="categories" :reduce="category => category.id" label="name" v-model="inputData.course_category_id" placeholder="Select Course Category"></v-select>    
                <input class="form-control" type="hidden" name="course_category_id" v-model="inputData.course_category_id">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Core Unit</label>     
                <input class="form-control" type="number" name="core_unit" v-model="inputData.core_unit" placeholder="e.g. 5">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Elective Unit</label>     
                <input class="form-control" type="number" name="elective_unit" v-model="inputData.elective_unit" placeholder="e.g. 7">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Feature Image</label>     
                <input class="form-control" type="file" name="thumbnail">
              </div>
           
              <div class="col-md-8 mb-3">
                <label for="validationCustom02">Content</label>
                <vue-editor style="min-height:100px;"  v-model="inputData.content" placeholder="Write content ..."></vue-editor>
                <textarea style="display:none;" class="form-control" name="content" v-model="inputData.content" placeholder=""></textarea>
              </div>
              <div class="col-md-6 mb-3 card">
                <div class="card-body" v-html="inputData.content"></div>
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
       categories:[]
     }
 },
 created(){
  this.backUrl = '/courses'
  this.generalApi = 'courses'
  this.isFile = true 
  this.getData()
 },

 methods:{
   getData(){
     axios.get(this.base_url+'/api/'+this.generalApi)
     .then(res=>{
       this.categories = res.data.categories

       console.log('category', res.data);
     })
   }
 }
}
</script>