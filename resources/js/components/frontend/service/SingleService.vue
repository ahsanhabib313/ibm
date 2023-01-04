<template>
    <div class="container-fluid mt-4 mb-4" style="margin-top:10%; margin-bottom:5%;">
        <div class="row">

           <request-nearest></request-nearest>
           <single-request :provider="provider" :service="service"></single-request>
           <message-modal></message-modal>
            <service-sidebar></service-sidebar>
            <div class="col-md-10">
               <div class="row">
                <div class="col-md-5 mb-4">
                    <div class="card no-card-border">
                        <div class="card-body">
                        <h4 class="mb-3"><span class="text-default">{{service.name}}</span> <span class="float-end text-warning"> ${{service.price}} </span></h4>
                            <img  style="width:100%; height:360px;" :src="url+'/uploads/service/'+service.single_page_image" alt="">
                            <button type="button" class="custom-btn text-right mt-4" @click="requestAllNearest()">Request All Nearest Provider</button>
                            <h5 class="text-muted mt-4 mb-4">About This Service</h5>
                            <div class="mt-4" v-html="service.single_page_details"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">

                    <div class="custom-div"><span class="text-white">Nearest service provider</span></div>
                    <!-- <div class="input-group input-group-sm mb-3 mt-4">
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    <span class="input-group-text text-white bg-primary" id="inputGroup-sizing-sm">Search</span>
                    </div>     -->
                    <div class="row">
                        <div class="col-md-4 no-margin-padding mb-2 mt-2" v-for="provider, pIndex in providers" :key="pIndex">
                            <div class="card no-card-border custom-cursor-pointer">
                                <div class="card-body">
                                     <div class="custom-img text-center">
                                        <img v-if="provider.photo == null" @click="gotToSingleUser(provider.name, provider.id, service.slug)" class="rounded w-50" :src="url+'/uploads/user/profile.png'" alt="">
                                        <img v-if="provider.photo != null" @click="gotToSingleUser(provider.name, provider.id, service.slug)" class="rounded w-50" :src="provider.view_photo" alt="">
                                    </div>
                                    <div class="details mb-2 mt-2">
                                        <div class="">
                                            <p> <router-link class="no-text-decoration" :to="'/provider/'+provider.id+'/'+service.slug.replaceAll('_', '-', service.slug.toLowerCase())">{{provider.name}}</router-link> <i class="fa-solid fa-circle" :class="{'text-success':provider.is_online==1, 'text-secondary':provider.is_online==0}" style="font-size:12px;"></i></p>
                                            <p class="">Sold (<span class="text-primary">3</span>)</p>
                                            <p>Ratings (<span class="text-warning">5 Star</span>)</p>
                                            <p class="">
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                            </p>
                                        </div>
                                    
                                    </div>
                                    <!-- <button class="btn btn-sm btn-primary no-border no-border-radius"><small>Get Appointment</small></button> -->

                                    <!-- <button v-if="user != null" class="btn btn-sm btn-default text-primary" @click="showMessageModal(provider, service)"><i class="fa-regular fa-message"></i></button> -->
                                     <!-- <router-link v-else to="/signin" class="btn btn-sm btn-primary"><i class="fa-regular fa-message"></i></router-link> -->
                                    <a class="btn btn-sm btn-default text-primary float-start" :href="'tel:01749340902'"><i class="fa fa-phone"></i></a>
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <button v-if="user != null" class="btn btn-sm btn-primary" @click="getAppointment(provider)"> <i class="fa-regular fa-calendar"></i> <small> Get Appointment</small></button>
                                    <router-link v-else to="/signin" class="btn btn-sm btn-primary"><i class="fa-regular fa-calendar"></i> Get Appointment</router-link>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
               </div>
            </div>
        </div>
    </div>
</template>

<script>
import RequestNearest from '../../../components/frontend/service/RequestNearest.vue'
import SingleRequest from '../../../components/frontend/service/SingleRequest.vue'
import path from '../../../src/global-config/mixin/path-solution'
import {mapGetters} from 'vuex'
import ServiceSidebar from './ServiceSidebar.vue'
import MessageModal from '../message/MessageModal.vue'
export default {
    mixins:[path],
    components:{
        RequestNearest,
        SingleRequest,
        ServiceSidebar,
        MessageModal
    },

    computed:{
        ...mapGetters({
            user:'user'
        })
    },


   data() {
       return{
        //    url:window.location.origin,
        //    base_url:window.location.origin,
           service:{},
           providers:[],
           provider:''
       }
   },

    watch: {
        '$route.params.service_slug'(newSlug, oldSlug) {

            this.getSingleService();

        }
    },

    mounted(){

        
        this.getSingleService()
        // this.getCustomer()

    },

   created(){
      
        //  console.log('MIX_BASE_URL', process.env.MIX_BASE_URL);

        console.log('BASE URL', this.base_url);
       
   },

   methods:{

       gotToSingleUser(provider_name, user_id, service_slug){

           let slug = service_slug.replaceAll('_', '-', service_slug.toLowerCase())
           let name = provider_name.replaceAll(' ', '-', provider_name).toLowerCase()

           window.location.href = this.base_url+'/provider/'+user_id+'/'+slug
       },

       showMessageModal(provider, service){
           $('.message-modal').attr('id', 'messageModal'+provider.id)

           
            $('#provider_id').val(provider.id);
            $('#customer_id').val(this.user.user.id);
            $('#provider_email').val(provider.email);
            

            let photo = ''

            if(provider.photo != null){

                photo = provider.view_photo

            } else {

                 photo = this.url+'/uploads/user/profile.png'

            }

            

            $('#provider_photo').attr('src', photo)
            $('#provider_name').text(provider.name)

           $('#messageModal'+provider.id).modal('show')

       },

       payment(){
           axios.get(this.base_url+'/api/payment')
           .then(res=>{
               console.log('response', res);
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

       requestAllNearest(){

        $('#service_name').val(this.service.name)
        $('#service_id').val(this.service.id)
        $('#nearestRequest').modal('show')

       },

       getSingleService(){
          
               axios.get(this.base_url+'/api/services/'+this.$route.params.service_slug)
                .then(res=>{

                    this.service = res.data.data
                     this.providers = res.data.data.user

                })
           
       },

    //    getCustomer(){
    //        axios.get(this.base_url+'/api/nearest-service-provider')
    //        .then(res=>{

               

    //             console.log('customer',  res.data.data);
    //        })
    //    }
   }
}
</script>