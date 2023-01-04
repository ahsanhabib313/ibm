<template>
<base-layout>
 <!--shop category start-->
  <section class="contact-us-area pt-150 pb-120 pt-md-100 pt-xs-100 pb-md-70 pb-xs-70">
        <div class="container">
            <div class="row">
                
                <div class="col-md-5 col-xl-5">
                    <div class="card">
                    <div class="card-body">
                        <h2>Edit Profile</h2>
                            <form  @submit.prevent="updateProfile()" id="profileForm">
                                    <img v-if="user != null" :src="image_url+'/uploads/user/'+certificate.user.photo" class="rounded profile-photo" alt="">
                                <div class="form-group">
                                    <label for="">Photo</label>
                                    <input type="file" name="photo" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" v-model="certificate.user.name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" v-model="certificate.user.email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" v-model="certificate.user.phone" class="form-control">
                                </div>
                                <!-- <div class="form-group mb-4">
                                    <label for="">Password</label>
                                    <input type="password" name="password" v-model="certificate.user.password" class="form-control">
                                </div> -->

                                <div class="form-group">
                                    <button type="submit" class="theme_btn free_btn mt-20">Update Profile</button>
                                </div>
                            
                            </form>
                    </div>
                </div>
                </div>
                <div class="col-md-7 col-xl-7">
                    <div class="woocommerce-form-coupon-toggle">
                        <div class="woocommerce-info">
                            Have you enrolled any course? <a href="#" class="showcoupon">Check your certificate status below</a>
                        </div>
                    </div>
                     <div class="card">
                    <div class="card-body">
                        <!-- <h2>Certificate </h2> -->
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <!-- <th>Serial No.</th> -->
                                    <!-- <th>Name</th>
                                    <th>Phone</th>
                                    <th>State</th> -->
                                    <th>Course</th>
                                    <th>
                                        Certificate
                                    </th>
                                    <th>Course Status</th>
                                    <th>Certificate Status</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- <td>{{index+1}}</td>
                                    <td> {{certificate.user.name}} </td>
                                    <td> {{certificate.user.phone}} </td>
                                    <td> {{certificate.user.country_state}} </td> -->
                                    <td> {{certificate.course_name}} </td>
                                    <td  class="preview_image"> 
                                        <!-- <i @click="openCertificate(certificate.id, index)" class="btn btn-xs btn-primary fa fa-upload" :class="{'upload_icon':certificate.certificate != null}"></i> -->
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
                                           <!-- <i class="fa fa-pencil"></i> -->
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
                                             <!-- <i class="fa fa-pencil"></i> -->

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
                </div>
            </div>
        </div>
    </section>
</base-layout>  
</template>

<script>
import BaseLayout from '../layouts/BaseLayout.vue'
import {mapGetters} from 'vuex'
import path from '../../../src/global-config/mixin/path-solution'
export default {
  mixins:[path],
    components:{
        BaseLayout
    },

    computed:{
        ...mapGetters({
            user:'user'
        })
    },
    data(){
        return{
            userModel:{},
            certificate:{},
        }
    },

    created(){
        this.userModel = this.user.user 
        this.getcertificate()
    },

    methods:{
        getcertificate(){
            axios.get(this.base_url+'/api/get-student-certificate')
            .then(res=>{
                this.certificate = res.data.data
                console.log('certificate', res.data);
            })
        },

        updateProfile(){
            let formData = new FormData($('#profileForm')[0])
            formData.append('user_id', this.user.user.id)

            axios.post(this.base_url+'/api/profile-update/', formData)
            .then(res=>{
                console.log(res);
                if(res.status === 200){
                    this.getcertificate()
                }
            })
        }
    }
}
</script>