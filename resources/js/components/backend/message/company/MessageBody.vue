<template>
    <div class="container customer-mt-10">
        <div class="row">
            <customer-message></customer-message>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h2>Message Body</h2>
                        <div class="message">

                            
                        </div>
                        <div class="input-group mb-3 mt-4">
                                <input type="text" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="button-addon2" class="form-control"> 
                                <button type="button" style="border-radius:0px;" id="button-addon2" class="btn btn-primary"><i class="fa fa-send"></i></button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import CustomerMessage from './CustomerMessage.vue'
export default {
    components:{
        CustomerMessage
    }
}
</script>

<style scoped>
.message{
    height: 300px;
}
</style>

