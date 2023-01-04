<template>
<div class="col-md-2 mb-4">
    <ul class="list-group no-card-border">
        <li class="list-group-item modify-list-group-item" :class="{'list-group-active':all_service.slug.replaceAll('_', '-', all_service.slug.toLowerCase()) == $route.params.service_slug}" v-for="all_service, allIndex in services" :key="allIndex">
            <router-link :to="'/services/'+all_service.slug.replaceAll('_', '-', all_service.slug.toLowerCase())">{{all_service.name}}</router-link>
        </li>
    </ul>
</div>
</template>

<script>
import path from '../../../src/global-config/mixin/path-solution'
export default {
    mixins:[path],
    data(){
        return{
            services:[]
        }
    },
    
    created(){
        this.getService()
    },

    methods:{
        getService(){
           axios.get(this.base_url+'/api/get-service')
           .then(res=>{
               console.log('service', res.data);

               this.services = res.data.data
           })
       }, 
    }
}
</script>