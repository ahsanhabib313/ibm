<template>
    <div class="container custom-mt-10">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Certificates </h2>
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr class="table-secondary">
                                    <th>Serial No.</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>State</th>
                                    <th>Course</th>
                                    <th>
                                        Certificate
                                    </th>
                                    <th>Course Status</th>
                                    <th>Certificate Status</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="certificate, index in certificates" :key="index">
                                    <td>{{index+1}}</td>
                                    <td> {{certificate.user.name}} </td>
                                    <td> {{certificate.user.phone}} </td>
                                    <td> {{certificate.user.country_state}} </td>
                                    <td> {{certificate.course_name}} </td>
                                    <td  class="preview_image"> 
                                        <i @click="openCertificate(certificate.id, index)" class="btn btn-xs btn-primary fa fa-upload" :class="{'upload_icon':certificate.certificate != null}"></i>
                                         <form @submit.prevent="saveCertificate(certificate.id)" id="upload" style="display:none;">
                                             
                                             <input type="file" @change="onChangeCertificate(certificate.id, index)" name="certificate" ref="openCertificate">
                                             <button type="submit" ref="upload_file"></button>
                                         </form>
                                        <img style="width:150px;" :src="certificate.certificate_view" alt="">
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-xs" :class="{
                                           
                                           'btn-danger':certificate.course_status == 1, 
                                           'btn-info':certificate.course_status == 2, 
                                           'btn-warning':certificate.course_status == 3, 
                                           'btn-success':certificate.course_status == 4, 
                                           'btn-secondary':certificate.course_status == 5

                                           }" @click="openCourseModal(certificate.id)">
                                           <i class="fa fa-pencil"></i>
                                            {{ certificate.course_status == 1?'Not Started':''}}
                                            {{ certificate.course_status == 2?'Started':''}}
                                            {{ certificate.course_status == 3?'Reviewing':''}}
                                            {{ certificate.course_status == 4?'Accept':''}}
                                            {{ certificate.course_status == 5?'Finished':''}} 
                                        </button>
                                    </td>
                                    <td> 
                                       <button type="button" class="btn btn-xs" :class="{

                                           'btn-secondary':certificate.certificate_status == 1, 
                                           'btn-primary':certificate.certificate_status == 2, 
                                           'btn-warning':certificate.certificate_status == 3, 
                                           'btn-info':certificate.certificate_status == 4, 
                                           'btn-success':certificate.certificate_status == 5

                                           }" @click="openCertificateModal(certificate.id)">
                                             <i class="fa fa-pencil"></i>

                                            {{ certificate.certificate_status == 1?'Not Process':''}}
                                            {{ certificate.certificate_status == 2?'Processing':''}}
                                            {{ certificate.certificate_status == 3?'Pending':''}}
                                            {{ certificate.certificate_status == 4?'Delivered':''}}
                                            {{ certificate.certificate_status == 5?'Accepted':''}}
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <!-- <tr><td colspan="3"></td><td class="text-right">Total certificate </td><td>{{total_certificate}}</td></tr> -->
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- Modal Start  -->

                <course-modal @sendingCourseEvent="listeningCourseEvent"></course-modal>
                <certificate-modal @sendingCertificateEvent="listeningCertificateEvent"></certificate-modal>

                <!-- Modal End  -->
            </div>
        </div>
    </div>
</template>

<script>
import path from '../../../src/global-config/mixin/path-solution'
import CertificateModal from '../modals/CertificateModal.vue'
import CourseModal from '../modals/CourseModal.vue'
export default {
  components: { CourseModal, CertificateModal },
    mixins:[path],
    data(){
        return{
            certificates:[],
            
            
        }
    },

    created(){
      this.getcertificate()  
    },

    methods:{

        listeningCertificateEvent(value){
            console.log('value', value);
            this.getcertificate()
        },

        listeningCourseEvent(value){
            console.log('value', value);
            this.getcertificate()
        },

        openCertificate(certificate_id, index){
            const certificate = this.$refs.openCertificate[index]
            certificate.click()
        },

        openCourseModal(certificate_id){

            $('.course_id').val(certificate_id)            
            $('#courseModal').modal('show')
            


        }, 

        openCertificateModal(certificate_id){

            $('.certificate_id').val(certificate_id)
            $('#certificateModal').modal('show')

        }, 


        onChangeCertificate(certificate_id, index){
            
            const upload_file = this.$refs.upload_file[index]
            upload_file.click()
        },



        saveCertificate(certificate_id){
            
            console.log('certificate_id', certificate_id);

            let formData = new FormData($('#upload')[0])

            formData.append('_method','PUT')

            axios.post(this.base_url+'/api/certificate/'+certificate_id, formData)
            .then(res=>{
                console.log(res);
                if(res.status === 200){
                    this.getcertificate()
                }
            })
            
        },

        courseStatusChange(){

        },

        certificateStatusChanging(){

        },

        getcertificate(){
            axios.get(this.base_url+'/api/certificate')
            .then(res=>{
                this.certificates = res.data.data
                console.log('certificate', res.data);
            })
        }
    }
    
}
</script>

<style scoped>

.preview_image{
    position: relative;
}

.preview_image:hover .upload_icon{
    display: block;
}
.upload_icon{
    /* display: none; */
}
.upload_icon{
    display: none;
    position: absolute;
    z-index: 9999;
    /* margin-top: 10%; */
    margin-left: 10%;
    /* width: 100px; */
    /* height: 100px; */
    text-align: center;
    font-size: 30px;
    padding: 0px 15px;
    top: 19%;
    left: 19%;
    /* right: 0px; */
}
</style>