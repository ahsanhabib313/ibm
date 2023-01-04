<template>
    <div class="container custom-mt-10">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Agent List</h2>
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr class="table-secondary">
                                    <th>Serial No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>State</th>
                                    <th>Address</th>
                                    <th>Agent Type</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="agent, index in agents" :key="index">
                                    <td>{{index+1}}</td>
                                    <td> {{agent.name}} </td>
                                    <td> {{agent.email}} </td>
                                    <td> {{agent.phone}} </td>
                                    <td> {{agent.country_state}} </td>
                                    <td> {{agent.address}} </td>
                                    <td> {{agent.agent_type}} </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <!-- <tr><td colspan="3"></td><td class="text-right">Total agent </td><td>{{total_agent}}</td></tr> -->
                            </tfoot>
                        </table>
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
            agents:[],
            total_agent:''
        }
    },

    created(){
      this.getagent()  
    },

    methods:{
        getagent(){
            axios.get(this.base_url+'/api/agents')
            .then(res=>{
                this.agents = res.data.data
                console.log('agent', res.data);
            })
        }
    }
    
}
</script>