<template>
 
        <div class="container-fluid mb-4 mt-4">
            <div class="row">
            <div class="col-md-9 offset-md-2">
                <div class="card mb-5 pb-4">
                    <div class="card-body">
                        <h3 class="mb-4">Find Service</h3>
                        <form action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group mb-3 p-20 border-0 h-75">
                                    <input type="text" @keydown="findData()" v-model="find_service" class="form-control" placeholder="Find Service" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search custom-text-color"></i></button>
                                    </div>    
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>
                 <div class="row mb-3" v-for="service, index in services" :key="index">
                    <div class="col-md-12" v-if="service.user != null">
                        <div class="service">
                            <div class="service-list mb-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <ul class="list-group">
                                                    <li style="font-size:20px;" class="list-group-item d-flex justify-content-between align-items-center custom-text-color">
                                                        {{ service.name }}
                                                        <span style="font-size:20px;" class="badge badge-primary badge-pill custom-text-color">৳{{ service.price }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-provider">
                                <div class="row">
                                    <div class="col-md-4" v-for="user, uIndex in service.user" :key="uIndex">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img class="p-2" style="width:100px; height:100px;" :src="url+'/uploads/user/'+user.photo" alt="">
                                                    </div>
                                                    <div class="col-md-8 text-right">
                                                        <div class="provider-info">
                                                            <h6>Name: {{user.name}} <i class="fa fa-circle text-success"></i></h6>
                                                            <p><small>Lavel: <span class="custom-text-color">Standard</span></small></p>
                                                            <p><small>Sell Service: <span class="custom-text-color">23434</span></small></p>
                                                            <p><small>Mobile: <span class="custom-text-color">{{ user.phone }}</span></small></p>
                                                            <!-- <p><small>Ratings: <span class="custom-text-color">*****</span> </small></p> -->
                                                        </div>

                                                        <div class="row mt-3">
                                                            <div class="col-md-6"><button class="provider-btn btn btn-sm custom-btn" style="font-size:12px;">Message</button></div>
                                                            <div class="col-md-6"><button class="provider-btn btn btn-sm custom-btn" style="font-size:12px;">Booking</button></div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
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
import path from '../../../src/global-config/mixin/path-solution'
export default {
  mixins:[path],
    data(){
        return{
            find_service:'',

            services:[],

        }
    },

    methods:{
        findData(){
            console.log(this.find_service);

            axios.get(this.api_url+'/api/find-service/'+this.find_service)
            .then(res=>{
                this.services = res.data.services
            })
        }
    }
}
</script>

<style scoped>
    .provider-btn{
        width: 80px;
       
    }

    .provider-info p{
        line-height: 0.5;
    }
</style>