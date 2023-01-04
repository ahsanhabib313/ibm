<template> 
<!-- Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
       <div class="customer-photo text-center">
           <img style="width:150px; height:150px;" v-if="customerData.photo != null" :src="base_url+'/uploads/user/'+customerData.photo" alt="" class="rounded mb-4">
           <img style="width:150px; height:150px;" v-else :src="base_url+'/uploads/user/profile.png'" alt="" class="rounded mb-4">
       </div>
       <div class="user_item">
           <ul class="list-group">
               <li class="list-group-item">Name: {{customerData.name}}</li>
               <li class="list-group-item">Email: {{customerData.email}}</li>
               <li class="list-group-item">Phone: {{customerData.phone}}</li>
               <li class="list-group-item">Address: {{customerData.address}}</li>
           </ul>
       </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
    name:'ProfileModal',
    props:['customerData'],
   data(){
       return{
            base_url:window.location.origin
       }
   }
}
</script>