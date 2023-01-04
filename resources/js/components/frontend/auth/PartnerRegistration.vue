<template>
   <base-layout>
   <section class="woocommerce single page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-xl-5">
                
                <div class="signup-form">
                    <div class="form-header">
                        <h2 class="font-weight-bold mb-3">Sign Up</h2>
                        <p class="woocommerce-register">
                            Already have an account? <router-link to="/signin" class="text-decoration-underline">Log in</router-link>
                        </p>
                    </div>

                    <form id="form" @submit.prevent="signUp()" class="woocommerce-form woocommerce-form-register register">

                        <div class="row">
                            <div class="col-xl-12">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>User Type&nbsp;<span class="required">*</span></label>
                                    <button type="button" ref="student_button" @click="userTypeSelection(1)" class="btn btn-lg btn-default border border-primary">Student</button>
                                    <button type="button" ref="agent_button" @click="userTypeSelection(2)" class="btn btn-lg btn-default border border-primary">Partnert Agent</button>
                                    <!-- <v-select :options="userTypes" :reduce="userType => userType.user_type" label="name" v-model="user_type" placeholder="Select user type"></v-select>
                                    <input type="hidden" name="user_type" v-model="user_type"> -->

                                    <input type="radio" style="display:none;" name="user_type" value="1" ref="user_type_student">
                                    <input type="radio" style="display:none;" name="user_type" value="2" ref="user_type_agent">
                                    
                                </p>
                            </div>
                            <div class="col-xl-12">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>Name&nbsp;<span class="required">*</span></label>
                                    <input type="text" class="form-control" name="name"  placeholder="Name">
                                </p>
                            </div>
                            <div class="col-xl-12">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>Email&nbsp;<span class="required">*</span></label>
                                    <input type="email" class="form-control" name="email" value="" placeholder="Your Email">
                                </p>
                            </div>
                            <div class="col-xl-12">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>Phone&nbsp;<span class="required">*</span></label>
                                    <input type="number" class="form-control" name="phone" value="" placeholder="Your Phone">
                                </p>
                            </div>

                            <div class="col-xl-12">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>Password&nbsp;<span class="required">*</span></label>
                                    <input type="password" class="form-control" name="password" value="" placeholder="Password">
                                </p>
                            </div>
                            <!-- <div class="col-xl-12">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>Re-Enter Password&nbsp;<span class="required">*</span></label>
                                    <input type="password" class="form-control" name="re-password" value="" placeholder="Re-Enter Password">
                                </p>
                            </div> -->

                            <!-- <div class="col-xl-12">
                                <div class="d-flex align-items-center justify-content-between py-2">
                                    <p class="form-row">
                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__policy">
                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="policy" type="checkbox" id="policy" value="forever"> <span>Accept the Terms and Privacy Policy</span>
                                        </label>
                                    </p>
            
                                    <p class="woocommerce-LostPassword lost_password">
                                        <a href="#">Forgot password?</a>
                                    </p>
                               </div>
                            </div> -->
                        </div>
                      
                        <p class="woocommerce-FormRow form-row">
                            <button type="submit" class="woocommerce-button button" name="register" value="Register">Register</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--shop register end--></base-layout>
</template>

<script>
import path_solution from '../../../src/global-config/mixin/path-solution'
import HomeVue from '../home/Home.vue';
import {mapGetters} from 'vuex'
import BaseLayout from '../layouts/BaseLayout.vue';
    export default {
        mixins:[path_solution],
         components: { BaseLayout },
        data() {
            return {
                message:'',
                services:[],
                service_id:'',
                is_label:true,
                is_service_provider:false,
                is_registration:true,
                schedule_date:null,
                schedule_time:null,
                address:'',
                latitude:'',
                logitude:'',
                radius:'',
                is_spin:false,
                is_active_btn:false,
                user_type:'',
                userTypes:[
                    {user_type:1, name:"Student"},
                    {user_type:2, name:"Partner Agent"}
                ]
            }
        },
        created() {
            if(this.$route.meta.auth == true){
                return HomeVue;
            }

            this.getService()

            if(this.$route.name == 'Home'){
                this.is_label = false
            }
        },

        computed:{
            ...mapGetters({
                user:'user'
            })
        },

        mounted(){
            this.getLatLong()
        },

        methods: {

            userTypeSelection(user_type){

                if(user_type == 1){

                    const student = this.$refs.user_type_student
                    student.click()

                    const student_button = this.$refs.student_button
                    const agent_button = this.$refs.agent_button

                    student_button.classList.remove('btn-default')
                    student_button.classList.add('btn-primary')
                    agent_button.classList.remove('btn-primary')
                    agent_button.classList.add('btn-default')

                }

                if(user_type == 2){

                     const agent = this.$refs.user_type_agent
                    agent.click()

                     const student_button = this.$refs.student_button
                    const agent_button = this.$refs.agent_button

                    agent_button.classList.remove('btn-default')
                    agent_button.classList.add('btn-primary')
                    student_button.classList.remove('btn-primary')
                    student_button.classList.add('btn-default')

                }
            },

           signUp(){
               this.is_spin = true
               let form = $('#form')[0];
               let formData = new FormData(form)

               formData.append('latitude', this.latitude)
               formData.append('longitude', this.longitude)

               axios.post(this.api_url+'/api/signup', formData)
               .then(res => {
                   this.message = res.data.message
                  if(res.data.status == true){
                      
                      setTimeout(()=>{
                          window.location.href = window.location.origin+'/signin'
                      }, 1000)
                  }
               })
                .catch(error =>{
                
                if(error.response.status == 422){
                    this.error = error.response.data.errors

                    $.each(error.response.data.errors, function(item,index){
                        let input = jQuery(document).find('input[name="'+item+'"]')
                        let inputAfter = jQuery(document).find('input[name="'+item+'"] + span')

                        input.addClass('is-invalid')
                        
                        inputAfter.remove() 
                        input.after('<span class="text-danger">'+error.response.data.errors[item]+'</span>')

                        // Array element 
                        let inputArr = jQuery(document).find('input[name="'+item+'[]"]')
                        let inputAfterArr = jQuery(document).find('input[name="'+item+'[]"] + span')

                        inputArr.addClass('is-invalid')
                        
                        inputAfterArr.remove() 
                        inputArr.after('<span class="text-danger">'+error.response.data.errors[item]+'</span>')

                    })
                    
                    
                    
                }
            })
           },

           getLatLong() {

           navigator.geolocation.getCurrentPosition(
                position => {
                    console.log('latitude', position.coords.latitude);
                    console.log('longitude', position.coords.longitude);
                    this.latitude = position.coords.latitude
                    this.longitude = position.coords.longitude
                    

                    console.log('adddress', this.adddress);
                },
                error => {
                    console.log(error.message);
                },
            )
       },

            getService(){
            axios.get(this.api_url+'/api/get-service')
            .then(res=>{
                this.services = res.data.data

                console.log('response', res);
            })
        },

        isSignup(){
            this.is_registration = false
        },

        userOption(option){
            if(option == 'provider'){

                this.is_service_provider = true
            }

            if(option == 'customer'){
                this.is_service_provider = false
            }
        },

        getAddressData: function (addressData, placeResultData, id) {
                this.address = addressData;
        }

        }
    }

</script>
