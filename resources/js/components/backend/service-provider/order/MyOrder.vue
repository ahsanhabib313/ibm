<template>
<div>
    
    <profile-modal :customerData="customerData"></profile-modal>
    <!-- <single-payment></single-payment> -->
    <div class="card">
        <div class="card-body">
            <h2 class="mb-4">Manage Order</h2>
            
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Schedule Date</th>
                        <th>Schedule Time</th>
                        <th>Due</th>
                        <th>Deductable</th>
                        <th>Transaction ID</th>
                        <th>Amount</th>
                        <th>Total Amount</th>
                        <th>Acception</th>
                        <th>Service</th>
                        <th>Customer Payment</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="order, index in orders" :key="index">
                        <td> <router-link to="#" @click.native="showProfile(order.booking_user)">{{order.customer_name}}</router-link> </td>
                        <td> {{ order.schedule_date }} </td>
                        <td> {{ order.schedule_time }} </td>
                        <td>{{ order.due }} </td>
                        <td>{{ order.deduction }} </td>
                        <td>{{ order.transaction_id }} </td>
                        <td>{{ order.amount }} </td>
                        <td>{{ order.total_amount }} </td>
                        <td>

                          <div :id="'paypal'+index"></div>

                        <button v-if="order.status==0 && order.is_company_payment == 0" class="btn btn-xs btn-primary m-5" @click="cashPayment(order)">Cash Payment & Accept </button>
                        <button v-if="order.status==1 && order.is_company_payment == 0" class="btn btn-xs btn-warning m-5" data-bs-toggle="tooltip" data-bs-placement="top" title="Waiting for company acception">Waiting </button>
                        <a v-if="order.status == 0" :href="order.payment_creation.checkout_url" class="btn btn-xs btn-primary m-5">PayPal Payment & accept</a>    
                        
                        <button v-if="order.status == 1 && order.is_company_payment == 1" class="btn btn-xs m-5" 
                        :class="{
                        'badge badge-danger':order.status == 0,   
                        'badge badge-success':order.status == 1 || order.status == 2,
                        }"
                        disabled> <i v-if="order.status == 0" class="fa fa-pencil"></i>
                        {{
                        order.status==0?
                        'Unaccept':(order.status==1?
                        'Accepted':'Accepted')
                        }} 
                        </button> 
                       
                        </td>
                        <td><button class="btn btn-xs" @click="completedOrder(order.id)" :disabled="order.status == 0?true:false" :class="{
                        'badge badge-warning':order.status==0, 
                        'badge badge-primary':order.status==1, 
                        'badge badge-success':order.status==2, 
                        }" 
                        > <i v-if="order.status == 1" class="fa fa-pencil"></i>
                        {{
                        order.status==0?
                        'Pending':(order.status==1?
                        'Progressing':(order.status==2?
                        'Completed':''))
                        }}
                        </button> </td>
                        <td>
                        <button class="btn btn-xs" :class="{
                        'badge badge-warning':order.payment_status==0, 
                        'badge badge-success':order.payment_status==1, 
                        }" 
                        >
                        {{
                        order.payment_status==0?
                        'Unconfirm':(order.payment_status==1?
                        'Confirmed':'')
                        }}
                        </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
</template>

<script>

import mixin from '../../../../src/backend/mixins/mixin'
import ProfileModal from '../../partials/ProfileModal.vue'
import SinglePayment from '../../../global-component/paypal/SinglePayment.vue'
import path from '../../../../src/global-config/mixin/path-solution'
export default {
  components: { ProfileModal, SinglePayment },
    mixins:[mixin, path],
    data(){
        return{
            orders:[],
            customerData:{},
            orderData:{}
        }
    },

    created(){
        this.getOrder()
    },

    methods:{
        getOrder(){
            axios.get(this.base_url+'/api/service-provider-order')
            .then(res=>{
                this.orders = res.data.data
            })
        },

        cashPayment(order){
            axios.post(this.base_url+'/api/cash-payment-to-company', {order_id:order.id})
            .then(res=>{
                if(res.status == 200){
                    this.toastMessage('success', res.data.message)
                    this.getOrder()
                }
            })
        },

        showProfile(item){

            console.log(item);
            this.customerData = item
            $('#profileModal').modal('show');
        },

        // openPaymentModal(order){
        //     console.log('order', order);
        //     $('.payment_modal').attr('id', 'paymentModal'+order.id)
        //     this.orderData = order
        //     $('.service_charge').text(order.amount)
        //     $('.payable').text(order.deduction)
        //     let earn = order.amount - order.deduction
        //     $('.earn').text(earn)

        //     let data = {
        //         order_id:order.id,
        //         amount:order.amount,
        //         customer_id:order.booking_user.id,
        //         service_id:order.booking.service_id

        //     }

        //     $('.data_set').val(JSON.stringify(data))
        //     $('.modal-title').text(order.booking.service.name)
        //     $('#paymentModal'+order.id).modal('show')
        // },

        completedOrder(order_id)
        {
       
            let form = new FormData();
            form.append('_method','PUT')
            form.append('order_status', 2)
            form.append('id', order_id)

            axios.post(this.base_url+'/api/service-provider-order/'+order_id, form)
            .then(res=>{
                console.log(res.data);
                if(res.status == 200){
                    this.getOrder()
                    this.toastMessage('success', 'Order has been completed')
                }
            })
        }
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