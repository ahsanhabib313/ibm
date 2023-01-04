<template>

<div class="modal fade payment_modal" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pay Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <input type="hidden" class="data_set">
       <ul class="custom-price-table">
         <li><span>Service Charge</span><span class="float-right"><i class="fa fa-dollar"></i> <span class="service_charge"></span></span></li>
         <li><span>Company Fee</span><span class="float-right"><i class="fa fa-dollar"></i><span class="payable"></span></span></li><hr>
         <li><span>You will earn</span><span class="float-right"><i class="fa fa-dollar"></i><span class="earn"></span></span></li>
       </ul>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        <div ref="paypal"></div>
      </div>
    </div>
  </div>
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
       }
   },

     watch: {
        '$route.params.service_slug'(newSlug, oldSlug) {

            this.getSingleService();

        }
    },

    mounted(){
        
        const script = document.createElement('script');

        script.src = "https://www.paypal.com/sdk/js?client-id=AXoAzbGUKbXZc4fOwp8VwE8bhio15LASVI1nescZEwZ56mBrjOQuM0cAuKe5_xTk1slA943PUMsI8CMa&components=buttons";

        script.addEventListener("load", this.setLoaded);
        // script.attr('data-namespace', 'paypal_sdk')
        document.body.appendChild(script)

    },

   created(){
     

   },

   methods:{        

       setLoaded(){
         let _this = this
        paypal.Buttons({

            style: {
                size: 'large',
                layout: 'horizontal',
                color:  'gold',
                shape:  'rect',
                label:  'paypal'
            },
            createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({

                purchase_units: [{
                  amount: {
                      value: $('.payable').text()
                  }
                }]

            });
            

            },
            onApprove: function(data, actions) {
                // This function captures the funds from the transaction.
                return actions.order.capture().then(function(details) {

                    // This function shows a transaction success message to your buyer.
                    // alert('Transaction completed by ' + details.payer.name.given_name);
                  if(details.status == 'COMPLETED'){
                    // this.acceptOrder();
                    // this.createPayment();
                    let order = $('.data_set').val()
                    let jsonData = JSON.parse(order)

                    _this.acceptOrder(jsonData)

                    console.log('order data', order);
                  }
                    console.log('details', details);

                });
            }
        }).render(this.$refs.paypal);
        //This function displays Smart Payment Buttons on your web page.  

       },

      acceptOrder(order)
        {
            
            // console.log('order', order);
            
            let order_id = order.order_id
            let form = new FormData();
            form.append('_method','PUT')
            form.append('status', 1)
            form.append('id', order_id)

            axios.post(this.base_url+'/api/service-provider-order/'+order_id, form)
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
                if(res.data.status == 200){

                    this.toastMessage('success', res.data.message)
                    console.log('paypal token', res.data);

                } else {

                    this.toastMessage('info', res.data.message)

                }
            
            })

        },

   }
}
</script>

<style scoped>
.custom-price-table{}
.modal-body ul.custom-price-table li{
    margin: 6px;
    padding: 2px 28px;
    font-size: 16px;
    color: cornflowerblue;
}
</style>