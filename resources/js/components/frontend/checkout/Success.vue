<template>
<base-layout>
<div>                
    
    <pulseLoader v-if="is_transaction == false" class="text-center"></pulseLoader>
    <div v-if="is_transaction" class="alert alert-success"><i class="fa fa-check"></i> Congratulations! Your payment has been transferred successfully!</div>       
    
</div>
</base-layout>
</template>
<script>
import BaseLayout from '../../frontend/layouts/BaseLayout.vue'

import path from '../../../src/global-config/mixin/path-solution'
export default {
    mixins:[path],
    components:{
        BaseLayout
    },

    data()  {
      return{
          is_transaction:false
      }
  },

  created(){
      this.paymentExecute()
  },

  methods:{
    paymentExecute(){
        let data = this.$route.query

        data.order_id = this.$route.params.order_id


        axios.post(this.base_url+'/api/execute-service-provider-payment', data)
        .then(res=>{
            if(res.status == 200){
                this.is_transaction = true
                setTimeout(()=>{
                    window.location.href = this.base_url+'/customer-order'
                }, 2000)
            }
        })  
    }
  }
}
</script>
