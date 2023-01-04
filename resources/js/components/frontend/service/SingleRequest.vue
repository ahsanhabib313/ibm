<template>
  <div class="modal fade single-modal" id="" tabindex="-1" aria-labelledby="singleAppointmentLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content no-card-radius">
      <div class="modal-header no-border">
        <h5 class="modal-title text-primary" id="singleAppointmentLabel">Request to {{ provider.name }}</h5>
        <pulseLoader v-if="is_sping" class="text-center"></pulseLoader>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="single_form" @submit.prevent="getAppointment()">
        <div class="modal-body">
          <div class="row">
            <input type="hidden" class="service_id" name="service_id">
            <input type="hidden" class="provider_id" name="provider_id">
            <input type="hidden" class="user_id" name="user_id">
            <input type="hidden" class="price" name="price">
            <input type="hidden" class="due" name="due">
            <input type="hidden" class="amount" name="amount">
            <input type="hidden" class="deduction" name="deduction">
            <input type="hidden" class="total_amount" name="total_amount">

              <div class="form-group col-lg-6 col-md-6 col-sm-6 custom-mb-4-half">
                    <label for="" class="text-warning">Schedule Date</label>
                    <date-picker  v-model="schedule_date" input-class="form-control no-radius" :value="schedule_date" valueType="format" format="DD-MM-Y"  placeholder="Schedule Date"></date-picker>  
                    <input type="hidden" name="schedule_date" v-model="schedule_date">
                </div>
            
                <div class="form-group col-lg-6 col-md-6 col-sm-6 custom-mb-4-half">
                    <label for="" class="text-warning">Schedule Time</label>
                    <date-picker v-model="schedule_time" input-class="form-control no-radius" value-type="format" type="time" format="hh:mm a" placeholder="Schedule Time"></date-picker>  
                    <input type="hidden" name="schedule_time" v-model="schedule_time">
                </div>
                
              <div class="custom-mb-4-half col-md-12 col-sm-12 mt-1">
                <table class="table table-sm">
                  <tbody>
                    <tr>
                      <th class=""> <small class="text-secondary">Service Name</small></th>
                      <td class="text-left">: <span class="text-primary service_name"></span></td>
                    </tr>
                    <tr>
                      <th class=""><small class="text-secondary">Provider Name</small></th>
                      <td class="text-left"> : <span class="text-primary provider_name"></span></td>
                    </tr>
                    <tr>
                      <th class=""> <small class="text-secondary">Service Value</small></th>
                      <td class="text-left">: <i class="fa fa-dollar text-primary"></i><span class="text-primary service_amount"></span></td>
                    </tr>
                  </tbody>
                 
                </table>
               
              </div>    
          </div>     
        </div>
        <div class="modal-footer no-border">
          <button v-if="is_sping == false" type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Cancel</button>
          <button v-if="is_sping == false" type="submit" class="btn btn-sm btn-primary"><i class="fa-regular fa-calendar"></i> Get Appointment</button>
          <button v-if="is_sping" type="submit" class="btn btn-sm btn-primary"><i class="fas fa-spinner fa-spin"></i> Appointment Booking...</button>

        </div>
      </form>
    </div>
  </div>
</div>
</template>

<script>
import path from '../../../src/global-config/mixin/path-solution'
import mixin from '../../../src/frontend/mixins/mixin'

export default {
  mixins:[path, mixin],
  props:['provider', 'service'],
    data(){
        return{
            schedule_date:'',
            schedule_time:'',
            is_sping:false, 
        }
    },

    methods:{
      getAppointment(){
        this.is_sping = true 
        let data = new FormData($('.single_form')[0])
       axios.post(this.base_url+'/api/single-appointment', data)
       .then(res=>{
         console.log(res.data);
         if(res.status == 200){
           this.is_sping = false 
           $('.single-modal').modal('hide')
           this.toastMessage('success', 'Your appointment has been created!')
           setTimeout(()=>{
                window.location.href = this.base_url+'/customer-order'
            }, 500)
         }
       })
      },
      
    }
}
</script>