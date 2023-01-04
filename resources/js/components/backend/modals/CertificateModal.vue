<template>
    <!-- Modal Two  -->
        <div class="modal fade certificate" id="certificateModal" tabindex="-1" aria-labelledby="certificateLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form @submit.prevent="certificateStatusChanging()" id="certificateForm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="certificateLabel">Certificate Status</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <v-select :options="certificateStatuses" :reduce="certificate_status => certificate_status.certificate_status" label="name" v-model="statusForm.certificate_status" placeholder="Select certificate Status"></v-select>
                            <input type="hidden" name="certificate_status" v-model="statusForm.certificate_status">
                            <input type="hidden" class="certificate_id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Change Status</button>
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
            certificateStatuses:[
                {name:'Not Process', certificate_status:1},
                {name:'Processing', certificate_status:2},
                {name:'Pending', certificate_status:3},
                {name:'Delivered', certificate_status:4},
                {name:'Accepted', certificate_status:5},
            ],  
        }
    },

    created(){

    },

    methods:{
        click() {
            this.$emit("sendingCertificateEvent", 'it working from child');
        },

        certificateStatusChanging(){
            let certificate_id = $('.certificate_id').val() 
            let formData = new FormData($('#certificateForm')[0])           
            formData.append('_method', 'PUT')
            axios.post(this.base_url+'/api/certificate/'+certificate_id, formData)
            .then(res=>{
                console.log(res);
                if(res.status === 200){
                  $('#certificateModal').modal('hide')

                 this.click()
                  
                }
            })
        },    
    }
}
</script>