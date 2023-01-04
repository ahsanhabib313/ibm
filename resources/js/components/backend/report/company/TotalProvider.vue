<template>
    <div class="container custom-mt-10">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Provider Report</h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Serial No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Earn</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="provider, index in providers" :key="index">
                                    <td>{{index+1}}</td>
                                    <td> {{provider.name}} </td>
                                    <td> {{provider.email}} </td>
                                    <td> {{provider.phone}} </td>
                                    <td> ${{provider.total_earn}} </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr><td colspan="3"></td><td class="text-right">Total provider </td><td>{{total_provider}}</td></tr>
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
            providers:[],
            total_provider:''
        }
    },

    created(){
      this.getProvider()  
    },

    methods:{
        getProvider(){
            axios.get(this.base_url+'/api/total-provider')
            .then(res=>{
                this.providers = res.data.providers
                this.total_provider = res.data.total_provider
            })
        }
    }
    
}
</script>