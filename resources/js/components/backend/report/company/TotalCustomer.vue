<template>
    <div class="container custom-mt-10">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Cutomer Report</h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Serial No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Cost</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="customer, index in customers" :key="index">
                                    <td>{{index+1}}</td>
                                    <td> {{customer.name}} </td>
                                    <td> {{customer.email}} </td>
                                    <td> {{customer.phone}} </td>
                                    <td> ${{customer.total_cost}} </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr><td colspan="3"></td><td class="text-right">Total Customer </td><td>{{total_customer}}</td></tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
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
            customers:[],
            total_customer:''
        }
    },

    created(){
      this.getCustomer()  
    },

    methods:{
        getCustomer(){
            axios.get(this.base_url+'/api/total-customer')
            .then(res=>{
                this.customers = res.data.customers
                this.total_customer = res.data.total_customer
            })
        }
    }
    
}
</script>