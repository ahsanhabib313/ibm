<template>
<div class="modal fade message-modal" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
         <form class="form" @submit.prevent="sendMessage()">
      <div class="modal-header">
        <h5 class="modal-title" id="messageModalLabel">Send Message</h5>
        <pulseLoader v-if="is_sent" class="text-center"></pulseLoader>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="provider-details col-md-3 text-center">
                <img class="mb-2" style="width:90px; height:90px;" id="provider_photo" alt="">
                <h6 class="mt-3" id="provider_name"></h6>
            </div>
                <div class="form-group custom-mb-4-half col-md-9 col-sm-9 col-xs-9">
                 
                  <input type="hidden" id="provider_id" name="provider_id">
                  <input type="hidden" id="customer_id" name="customer_id">
                  <input type="hidden" id="provider_email" name="provider_email">
                <!-- <div class="local-time">{{moment().format('LTS')}}</div> -->
                  <textarea name="message_body" class="form-control" id="" rows="4"></textarea>
                  <input type="file" class="form-control mt-2 mb-2" name="message_file">
            </div>
           
               
        </div>     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
      </form>
    </div>
  </div>
</div>
</template>

<script>
import path from '../../../src/global-config/mixin/path-solution'
import toast from '../../../src/global-config/mixin/message'
export default {
  mixins:[path, toast],
    data(){
        return{
           
           is_sent:false
        }
    },

    methods:{
        sendMessage(){
            this.is_sent = true
            let messageData = new FormData($('.form')[0])
            axios.post(this.base_url+'/api/send-message', messageData)
            .then(res=>{
                if(res.status == 200){
                    this.toastMessage('success', 'Your message has been sent')
                    $('.form').trigger("reset");
                    this.is_sent = false
                    $('.message-modal').modal('hide')
                    
                }
            })
        }
    }
}
</script>