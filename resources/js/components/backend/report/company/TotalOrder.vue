<template>
    <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5>Order Report</h5> 

                    <form  class="form" @submit.prevent="getOrder()">
                       <div class="row">
                           <div class="col-md-3">
                               <div class="form-group">
                                <label for=""></label>
                                <v-select :options="serviceProviders" :reduce="provider => provider.id" label="name" v-model="searchData.provider_id" placeholder="Select service provider"></v-select>
                               </div>
                           </div>
                           <div class="col-md-3">
                               <div class="form-group">
                                <label for=""></label>
                                <v-select :options="filterOptions" :reduce="filterOption => filterOption.filter_slug" v-model="searchData.filter_slug" label="filter_name" placeholder="Select filter"></v-select>
                               </div>
                           </div>
                           <div class="col-md-3">
                            <div class="form-group">
                                <label for=""></label>
                                <date-picker v-model="searchData.date_range" placeholder="Select Date Range" range></date-picker>
                            </div>
                        
                           </div>
                           <div class="col-md-3">
                               
                                <button type="submit" class="btn btn-sm btn-primary mt-4"><i class="fa fa-search"></i></button>
                               
                           </div>
                       </div>
                    </form>

                </div>
            </div>
            <div class="card" v-if="is_load_data">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Serial No.</th>
                                <th>Service Provider Name</th>
                                <th>Paid</th>
                                <th>Earn</th>
                                <th>Customer Payment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="order, index in orders" :key="index">
                                <td> {{index+1}} </td>
                                <td> {{order.booking.user.name}} </td>
                                <td> ${{order.deduction}} </td>
                                <td> ${{order.amount - order.deduction}} </td>
                                <td> ${{order.amount}} </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                            <td></td>
                            <td class="text-right">Total</td>
                            <td> ${{total_paid}} </td>
                            <td> ${{total_earn}} </td>
                            <td> ${{total_amount}} </td>
                            </tr>
                            <tr><td colspan="3"></td><td class="text-right">Total Order</td><td> {{total_order}} </td></tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
</template>
<script>
import path from '../../../../src/global-config/mixin/path-solution'
export default {
    mixins:[path],
    data(){
        return{
            time3:null,
            filterOptions:[
                {filter_name:'Today', filter_slug:'today'},
                {filter_name:'Last Day', filter_slug:'last_day'},
                {filter_name:'Last Week', filter_slug:'last_week'},
                {filter_name:'Last Month', filter_slug:'last_month'},
            ],

            services:[],
            serviceProviders:[],
            searchData:{},
            orders:[],
            total_order:'',
            total_amount:'',
            total_paid:'',
            total_earn:'',
            is_load_data:false
        }
    },

    created(){
        this.getServiceProvider()
    },

    methods:{
        getServiceProvider(){
            axios.get(this.base_url+'/api/get-service-provider')
            .then(res=>{
                this.serviceProviders = res.data
            })
        },

        getOrder(){
            axios.post(this.base_url+'/api/total-order', this.searchData)
            .then(res=>{
                if(res.status == 200){
                    this.orders       = res.data.orders
                    this.total_order  = res.data.total_order
                    this.total_amount = res.data.total_amount
                    this.total_paid   = res.data.total_paid
                    this.total_earn   = res.data.total_amount - res.data.total_paid
                    console.log('report data', res.data.data);

                    this.is_load_data = true
                }
                
            })
        }
    }
}
</script>