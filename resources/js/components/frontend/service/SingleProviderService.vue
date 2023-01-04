<template>
    <div class="container-fluid  mt-4 mb-4" style="margin-top:10%; margin-bottom:5%;">
        <div class="row">
            <single-request :provider="provider"></single-request>
            <service-sidebar></service-sidebar>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h3>{{service.name}} </h3>
                        <div><img style="width:30px; height:30px;" :src="url+'/uploads/user/'+profile_pic" alt="">  <span>{{provider.name}}</span></div>
                        <div class="mt-2" >
                            <img  style="width:100%; height:460px;" :src="url+'/uploads/service/'+service.single_page_image" alt="">
                        </div>
                        <div class="mt-3">
                            <h5>About This Service</h5>
                            <div class="mt-3 text-muted" v-html="service.single_page_details"></div>
                        </div>
                        <div class="reviews mt-4">

                            <div class="ratings mt-4 mb-4">
                               <div class="row">
                                   <div class="col-md-5">
                                    <div class="mt-2"><span class="text-warning">5 Star</span><span class="text-muted">(3)</span></div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mt-2"><span class="text-warning">4 Star</span><span class="text-muted">(0)</span></div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mt-2"><span class="text-warning">3 Star</span><span class="text-muted">(0)</span></div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mt-2"><span class="text-warning">2 Star</span><span class="text-muted">(0)</span></div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mt-2"><span class="text-warning">1 Star</span><span class="text-muted">(0)</span></div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                   </div>
                               </div>
                            </div>
                           
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img style="width:30px; height:30px;" :src="url+'/uploads/user/'+profile_pic" class="rounded-circle" alt="Sample Image">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6>Jhon Carter <small class="text-muted"><i>Posted on January 10, 2021</i></small></h6>
                                    <p>Excellent feature! I love it. One day I'm definitely going to put this Bootstrap component into use and I'll let you know once I do.</p>
                                    
                                    <!-- Nested media object -->
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0">
                                            <img style="width:30px; height:30px;" :src="url+'/uploads/user/'+profile_pic" class="rounded-circle" alt="Sample Image">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6>Clark Kent <small class="text-muted"><i>Posted on January 12, 2021</i></small></h6>
                                            <p>Thanks, you found this component useful. Don't forget to check out other Bootstrap components as well. They're also very useful.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-lg btn-primary custom-btn" @click="getAppointment(provider)"><i class="fa-regular fa-calendar"></i> Get Appointment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

import path from '../../../src/global-config/mixin/path-solution'
import ServiceSidebar from './ServiceSidebar.vue'
import SingleRequest from './SingleRequest.vue'
export default {
  components: { ServiceSidebar, SingleRequest },
    mixins:[path],

        data(){
        return{
            service:{},
            provider:{},
            profile_pic:''
        }
    },
    watch: {
        '$route.params.service_slug'(newSlug, oldSlug) {

            this.getService();

        },

        '$route.params.user_id'(newUser, oldUser){

            this.getProvider()

        }
    },

    created(){
        this.getService()
        this.getProvider()

        if(this.provider != null){

            this.profile_pic = this.provider.photo == null?'profile.png':this.provider.photo

        }
    },

    methods:{
       getService(){
          
            axios.get(this.base_url+'/api/services/'+this.$route.params.service_slug)
            .then(res=>{

                this.service = res.data.data

            })
           
       },
        
        getProvider(){
            axios.get(this.base_url+'/api/single-user/'+this.$route.params.user_id)
            .then(res=>{
                this.provider = res.data.data
            })

        },

        getAppointment(provider){
           $('.single-modal').attr('id', 'singleAppointment'+provider.id)
           console.log('provider', provider);

           this.provider = provider
            $('.service_name').text(this.service.name)
            $('.provider_name').text(provider.name)
            $('.service_amount').text(this.service.price)
            $('.service_id').val(this.service.id)
            $('.user_id').val(provider.id)
            $('.provider_id').val(provider.id)
            $('.price').val(this.service.price)
            $('.due').val(this.service.price)
            $('.amount').val(this.service.price)
            $('.deduction').val(this.service.commission)
            $('.total_amount').val(this.service.price)

           $('#singleAppointment'+provider.id).modal('show')

       },
    }
}
</script>