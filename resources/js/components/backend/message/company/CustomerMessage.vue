<template>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <input type="search" class="form-control" placeholder="Search user ...">
                <ul class="group-item mt-4" v-for="customer, index in customers" :key="index">
                    <li class="group-item-list" :class="{'active_user':customer.id == $route.params.id}"><router-link :to="'/customer-message/'+customer.id"> 
                        <img v-if="customer.photo != null" style="width:30px;height:30px;" :src="url+'/uploads/user/'+customer.photo" alt="">
                        <img v-if="customer.photo == null" style="width:30px;height:30px;" :src="url+'/uploads/user/profile.png'" alt="">

                        {{customer.name}} <i :class="{'fa fa-circle text-success':customer.is_online == 1}"></i> </router-link></li>
                </ul> 
            </div>
        </div>
    </div>       
</template>
<script>
import path from '../../../../src/global-config/mixin/path-solution'
import {mapGetters} from 'vuex'
export default {
    mixins:[path],
    data(){
        return{
            messages:[],
            customers:[],

        }
    },

    computed:{
        ...mapGetters({
            user:'user'
        })
    },

    created(){
        
        this.getCustomerUser()
    },

    methods:{
        getCustomerUser(){
            axios.get(this.base_url+'/api/get-customer-user')
            .then(res=>{

                this.customers = [res.data[0]];

                console.log(res.data[0]);


            })
        }
    }
    
}
</script>

<style scoped>
.active_user{
    background: #CBF;
    padding: 5px;
    border-radius: 2px;
}
</style>