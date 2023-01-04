<template>
<!-- Modal -->
    <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{modal_title}}</h5>
                <button type="button" class="close" data-dismiss="modal" @click="resetForm" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="assignForm" @submit.prevent="assignOrder()">
                <div class="modal-body">
                   <div class="row">
                    <div class="form-group col-md-12 text-center">
                        <input type="hidden" name="booking_id" id="booking_id">
                    </div>
                    <div class="form-group col-md-12">
                    <label for="">Select Status</label>
                  
                   <v-select :options="acceptOptions" :reduce="acceptOption => acceptOption.status_id" label="status_name" v-model="booking_status" placeholder="Select Status"></v-select>
                    <input type="hidden" name="booking_status" v-model="booking_status">
                    <input type="hidden" name="user_id" id="user_id">
                    
                    </div>
                    <div class="form-group col-md-6">
                    <label for="">Customer Name</label>
                    <input type="text" class="form-control" id="customer_name" readonly>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="">Request Service</label>
                    <input type="text" class="form-control" id="service_name" readonly>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="">Service Price</label>
                    <input type="text" name="due" class="form-control" id="service_price" readonly>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="">Payment Deduction</label>
                    <input type="text" name="deduction" class="form-control" id="commission" readonly>
                    </div>
                   </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="resetForm">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:['bookingData', 'serviceProviders', 'modal_title'],
    data(){
        return{
            base_url:window.location.origin,
            customer_name:'',
            service_name:'',
            service_price:'',
            commission:'',
            user_id:'',        
            booking_id:'', 
            booking_status:'',
            
            acceptOptions:[
                {status_id:1, status_name:'Accept'},
                {status_id:0, status_name:'Not Accept'},
            ]

        }
    },

    created(){
        console.log(this.booked);
            

        
    },

    methods:{

        getBooking(value){

            this.customer_name = this.bookingData.user.name
            this.service_name = this.bookingData.service.name
            this.service_price = this.bookingData.service.price
            this.commission = this.bookingData.service.commission
            this.booking_id = this.bookingData.id

        },

        assignOrder(){
            let form_data = new FormData($('.assignForm')[0]);

            console.log(form_data);

            axios.post(this.base_url+'/api/order', form_data)
            .then(res=>{
                console.log('res', res);

                if(res.status == 200){
                    $('#booking_modal'+this.booking_id).modal('hide');
                    window.location.href = this.base_url+'/admin/order'

                }
            })
            .catch(error => {
              if(error.response.status == 404){

                  this.errorMsg = error.response.data.message[0]

              } else if(error.response.status == 401){

                  this.errorMsg = error.response.data.message[0]

              } else if(error.response.status == 422) {

                   $.each(error.response.data.errors, function(item,index){

                        let input = jQuery(document).find('input[name="'+item+'"]')
                        let inputAfter = jQuery(document).find('input[name="'+item+'"] + span')

                        input.addClass('is-invalid') 
                        
                        inputAfter.remove() 
                        input.after('<span class="text-danger">'+error.response.data.errors[item]+'</span>')

                })

              } else {

              }
          })
        },

        resetForm(){
            this.customer_name = '',
            this.service_name = '',
            this.service_price = '',
            this.commission = '',
            this.user_id = ''
            this.booking_id = ''
        }
    }
}
</script>