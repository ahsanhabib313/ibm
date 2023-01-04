import path_solution from './path-solution'
export default {
    mixins:[path_solution],
   data() {
       return{
        //    url:window.location.origin,
        //    base_url:window.location.origin,
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

        paypal.Buttons({

            style: {
                size: 'small',
                layout: 'vertical',
                color:  'gold',
                shape:  'rect',
                label:  'paypal'
            },
            createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({

                purchase_units: [{
                amount: {
                    value: '2'
                }
                }]

            });
            

            },
            onApprove: function(data, actions) {
                // This function captures the funds from the transaction.
                return actions.order.capture().then(function(details) {

                    // This function shows a transaction success message to your buyer.
                    // alert('Transaction completed by ' + details.payer.name.given_name);

                    console.log(details);

                });
            }
        }).render(this.$refs.paypal);
        //This function displays Smart Payment Buttons on your web page.  

       },

   }
}
