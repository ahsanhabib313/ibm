<template>
<base-layout>
<div class="card">                
    <div class="card-body">
        <div class="customer-details">
            <h4>My Order List</h4><hr>
            
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>Serial no.</th> 
                <th>Service Name</th> 
                <th>Service Provider Name</th> 
                <th>Service Value</th>
                <th>Pay Now</th>
                <th>Payment Status</th>
                <th>Invoices</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="order, index in orders" :key="index" class=" p-12">
                    <td>#</td>
                    <td>{{order.booking.service.name}}</td>
                    <td>{{order.provider_name}}</td>
                    <td>${{ order.amount }}</td>
                    <td>
                    <button type="button" v-if="order.status == 0" class="btn btn-sm btn-danger">Pending</button>
                    <a v-if="order.status == 1 && order.payment_creation.payment_status == 1" :href="order.payment_creation.checkout_url" class="btn btn-sm btn-warning">Pay Now</a>
                    <button type="button" v-if="order.payment_creation.payment_status == 2" class="btn btn-sm btn-secondary" disabled>Transaction Completed</button>
                    </td>
                    <td><span :class="{'btn btn-sm btn-warning':order.payment_status == 0, 'btn btn-sm btn-success':order.payment_status == 1}">{{ order.payment_status == 0?'Unpaid':'Paid' }}</span></td>
                    <td><router-link to="invoice" class="btn btn-sm btn-success custom-a-style">#Invoice <i class="fa fa-eye"></i></router-link></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</base-layout>
</template>

<script>
import {mapGetters} from 'vuex'
import BaseLayout from '../layouts/BaseLayout.vue'
import path from '../../../src/global-config/mixin/path-solution'
export default {
    mixins:[path],
    data(){
        return{
            orders:[]
        }
    },

    computed:{
        ...mapGetters({
            user:'user'
        })
    },
    
    components: { BaseLayout },

    created(){
     console.log('order', this.orders);   
    },

    mounted(){
      this.getMyOrder()  
    },

    methods:{
        getMyOrder(){
            axios.get(this.base_url+'/api/customer-order')
            .then(res => {

                this.orders = res.data.data

            })
        },

        // payNow(data){
        //     axios.post(this.base_url+'/api/execute-paypal', data)
        //     .then(res=>{
        //         console.log(res);
        //     })
        // }
    }
}
</script>

<style lang="css" scoped>
.table td, .table th {
    padding: 0.2em !important;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
    font-size: 13px !important;
   
}
</style>