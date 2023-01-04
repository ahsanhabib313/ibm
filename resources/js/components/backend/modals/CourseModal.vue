<template>
     <!-- Modal One -->
    <div class="modal fade course" id="courseModal" tabindex="-1" aria-labelledby="courseLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <form @submit.prevent="courseStatusChange()" id="courseForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="courseLabel">Course Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <v-select :options="courseStatuses" :reduce="course_status => course_status.course_status" label="name" v-model="statusForm.course_status" placeholder="Select Course Status"></v-select>
                        <input type="hidden" name="course_status" v-model="statusForm.course_status">
                        <input type="hidden" class="course_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Change status</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</template>

<script>
import path from '../../../src/global-config/mixin/path-solution'
export default {
    mixins:[path],
    data(){
        return{
            statusForm:{},
            courseStatuses:[
                {name:'Not Started', course_status:1},
                {name:'Started', course_status:2},
                {name:'Reviewing', course_status:3},
                {name:'Accept', course_status:4},
                {name:'Finished', course_status:5},
            ],
            
        }
    },

    created(){

    },

    methods:{
         click() {
            this.$emit("sendingCourseEvent", 'it working from child');
        },

        courseStatusChange(){
            console.log('course modal works');
            let certificate_id = $('.course_id').val() 
            let formData = new FormData($('#courseForm')[0])               
            formData.append('_method', 'PUT')
            axios.post(this.base_url+'/api/certificate/'+certificate_id, formData)
            .then(res=>{
                console.log(res);
                if(res.status === 200){
                  $('#courseModal').modal('hide')
                 this.click()
                }
            })
        },
    }
}
</script>