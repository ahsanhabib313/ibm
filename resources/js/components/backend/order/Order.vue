<template>
    <div class="card">
        <div class="card-body">
            <h2 class="mb-4">Manage Order</h2>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Provider</th>
                        <th>Order Acception</th>
                        <th>Due</th>
                        <th>Deductable</th>
                        <th>Transaction ID</th>
                        <th>Amount</th>
                        <th>Total Amount</th>
                        <th>Service Status</th>
                        <th>Payment Confirmation</th>
                        <th>Paid Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="order, index in orders" :key="index">
                        <td>{{ order.customer_name }} </td>
                        <td>{{ order.assign_to }} </td>
                        <td>
                        <span
                        :class="{
                        'badge bg-danger':order.status==0, 
                        'badge bg-success':order.status==1,
                        }"
                        >
                        {{
                        order.status==0?
                        'Not Accept':(order.status==1?
                        'Accepted':'')
                        }}
                        </span> 
                        </td>
                        <td>{{ order.due }} </td>
                        <td>{{ order.deduction }} </td>
                        <td>{{ order.transaction_id }} </td>
                        <td>{{ order.amount }} </td>
                        <td>{{ order.total_amount }} </td>
                        
                        <td><span :class="{
                        'badge bg-warning':order.status==0, 
                        'badge bg-primary':order.status==1, 
                        'badge bg-success':order.status==2, 
                        }" 
                        >
                        {{
                        order.status==0?
                        'Pending':(order.status==1 ?
                        'Progressing':(order.status==2?
                        'Completed':''))
                        }}
                        </span> </td>
                        <td>
                           
                            <button v-if="order.payment_type == 1 && order.is_company_payment == 0" class="btn btn-xs btn-warning" @click="acceptCashPayment(order)">Accept Cash Payment</button>
                            <button v-if="order.is_company_payment == 1" class="btn btn-xs btn-success">Payment Confirmed</button>
                            <p v-if="order.payment_type == 1 && order.is_company_payment == 0">Note: If you accept cash payment from service provider on this order then click to accept payment.</p>
                        </td>
                        <td>
                        <span :class="{
                        'badge bg-warning':order.is_company_payment==0, 
                        'badge bg-success':order.is_company_payment==1, 
                        }" 
                        >
                        {{
                        order.is_company_payment==0?
                        'Unpaid':(order.is_company_payment==1?
                        'Paid':'')
                        }}
                        </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            base_url:window.location.origin,
            orders:[],
            
        }
    },

    created(){
        this.getOrder()
    },

    methods:{
        getOrder(){
            axios.get(this.base_url+'/api/order')
            .then(res=>{
                this.orders = res.data.data

                console.log('res.data', res.data.data);
            })
        },

        acceptCashPayment(order){
            axios.post(this.base_url+'/api/cash-payment-from-provider', {order_id:order.id})
            .then(res=>{
                if(res.status == 200){
                    this.toastMessage('success', res.data.message)
                    this.getOrder()
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