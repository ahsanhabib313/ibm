<template>
<div class="modal fade nearestRequest" id="nearestRequest" tabindex="-1" aria-labelledby="nearestRequestLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nearestRequestLabel">Request all nearest provider</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">

            <div class="form-group custom-mb-4-half col-md-12 col-sm-12 col-xs-12">
                  <label for="">Service Name</label>
                  <input type="text" class="form-control" id="service_name" readonly>
                  <input type="hidden" id="service_id" name="service_id">
              </div>
            <div class="form-group custom-mb-4-half col-md-6 col-sm-6 col-xs-12">
                <label for="">Schedule Date</label>
                <date-picker  v-model="schedule_date" input-class="form-control no-radius" :value="schedule_date" valueType="format" format="DD-MM-Y"  placeholder="Schedule Date"></date-picker>  
                <input type="hidden" name="schedule_date" v-model="schedule_date">
            </div>
        
            <div class="form-group custom-mb-4-half col-md-6 col-sm-6 col-xs-12">
                <label for="">Schedule Time</label>
                <date-picker v-model="schedule_time" input-class="form-control no-radius" value-type="format" type="time" format="hh:mm a" placeholder="Schedule Time"></date-picker>  
                <input type="hidden" name="schedule_time" v-model="schedule_time">
            </div>    
        </div>     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
            schedule_date:'',
            schedule_time:'',
        }
    }
}
</script>