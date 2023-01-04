<template>
<div>
    <pulseLoader v-if="is_transaction == false" class="text-center"></pulseLoader>
    <div class="alert alert-success" v-if="is_transaction"><i class="fa fa-check"></i> Congratulations! You payment has been successfully tranfered!</div>
</div>
</template>

<script>
import mixin from '../../../src/backend/mixins/mixin'
import path from '../../../src/global-config/mixin/path-solution'
export default {
    mixins:[mixin, path],
   data() {
       return{
           service:{},
           services:[],
           providers:[],
           provider:'',
           is_transaction:false
       }
   },

    mounted(){



    },

   created(){
     
     this.getOrder()

   },

   methods:{        


       getOrder(){
           axios.get(this.base_url+'/api/get-single-order/'+this.$route.params.order_id)
           .then(res=>{
               if(res.status == 200){

                   console.log('order data', res.data);
                    this.companyPaymentExecution(res.data)
                    
                    this.toastMessage('success', 'Order has been accepted')
               }
           })
       },

    companyPaymentExecution(order){
        let data = this.$route.query

        data.order_id = this.$route.params.order_id

        axios.post(this.base_url+'/api/execute-company-payment', data)
        .then(res=>{
            console.log(res);
            if(res.status == 200){
                this.toastMessage('success', res.data.message)
                this.acceptOrder(order)
            }
        })  
    },

      acceptOrder(order)
        {            

            axios.post(this.base_url+'/api/order-acception/', order)
            .then(res=>{
                console.log(res.status);
                
                if(res.status == 200){

                    this.toastMessage('success', 'Order has been accepted')
                   
                    this.createPayment(order)
                    // this.getOrder()

                }
               
                
            })
        },

        createPayment(order){

            axios.post(this.base_url+'/api/create-payment', order)
            .then(res=>{
                if(res.status == 200){

                    this.toastMessage('success', res.data.message)
                    this.is_transaction = true

                    setTimeout(()=>{
                    window.location.href = this.base_url+'/admin/service-provider-order'
                    }, 2000)

                } else {

                    this.toastMessage('info', res.data.message)

                }
            
            })

        },

   }
}
</script>