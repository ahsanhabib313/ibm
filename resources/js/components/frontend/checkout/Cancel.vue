<template>
<base-layout>
<div class="card">                
    <div class="card-body">
        <div class="customer-details">
            <h4 class="badge bg-danger"><i class="fa fa-times text-white"></i> Payment has been cancelled! Try again!</h4><hr>
        </div>
    </div>
</div>
</base-layout>
</template>
<script>
import BaseLayout from '../../frontend/layouts/BaseLayout.vue'
export default {
    components:{
        BaseLayout
    }
}
</script>