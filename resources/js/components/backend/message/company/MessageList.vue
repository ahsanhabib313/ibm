<template>
    <div class="container customer-mt-10">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                         <table class="table table-bordered">
                            <thead>
                                <tr class="table-secondary">
                                    <th>Serial No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>Document</th>
                                    <th>Download Doc</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="message, index in messages" :key="index">
                                    <td> {{index + 1}} </td>
                                    <td>{{message.name}}</td>
                                    <td>{{message.email}}</td>
                                    <td>{{message.phone}}</td>
                                    <td>{{message.message}}</td>
                                    <td>
                                        <p v-html="message.document"></p>
                                    </td>
                                    <td><a :href="message.download_file" download>Download File <i class="fa fa-download"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
        }
    },

    computed:{
        ...mapGetters({
            user:'user'
        })
    },

    created(){

        this.getMessage()

    },

    methods:{
        getMessage(){
            axios.get(this.base_url+'/api/customer-message')
            .then(res=>{
                this.messages = res.data 
                console.log('res.data', res.data );
            })
        },
    }
    
}
</script>