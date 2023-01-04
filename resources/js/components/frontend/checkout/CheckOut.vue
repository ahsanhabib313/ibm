<template>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4 offset-md-4">
               
                    <!-- <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill">3</span>
                    </h4> -->
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">{{ package_name }}</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                            </div>
                            <span class="text-muted">{{ package_price }}</span>
                        </li>                     
                     
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (BDT)</span>
                            <strong>{{  package_price }} TK</strong>
                        </li>
                        <li class="list-group-item list-group-item">
                            <button class="btn btn-warning btn-md ml-4" style="float:right;" @click="payNow">Pay Now</button>
                            <button style="display:none;" class="btn btn-primary btn-sm btn-block" :ref="'paybtn'" id="sslczPayBtn"
                                token="if you have any token validation"
                                postdata="your javascript arrays or objects which requires in backend"
                                order="If you already have the transaction generated for current order"
                                :endpoint="url+'/pay-via-ajax'"> Pay Now
                            </button>
                        </li>
                    </ul>
                
               
            </div>
        </div>
    </div>
</template>

<script>

    import {mapGetters} from 'vuex'
    import payment from '../../../src/frontend/mixins/payment'
    export default {
        mixins:[payment],

        computed:{
            ...mapGetters({
                user:'user'
            })
        },

        mounted() {

            var pk = window.localStorage.getItem('resortPackage');
            var pkObj = JSON.parse(pk)
            console.log('resortPackage', pkObj);

            var obj        = {};
            obj.cus_id     = this.user.user.id
            obj.cus_name   = this.user.user.name;
            obj.cus_phone  = this.user.user.phone == null?'01749xxxxx':this.user.user.phone;
            obj.cus_email  = this.user.user.email;
            obj.package_id = pkObj.id
            obj.cus_addr1  = this.user.user.address == null?'Address not found':this.user.user.address;
            obj.amount     = Number(pkObj.price);

            console.log('obj', obj);

            $('#sslczPayBtn').prop('postdata', obj);

            (function (window, document) {
                var loader = function () {
                    var script = document.createElement("script"),
                        tag = document.getElementsByTagName("script")[0];
                    // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
                    script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36)
                        .substring(7); // USE THIS FOR SANDBOX
                    tag.parentNode.insertBefore(script, tag);
                };

                window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent(
                    "onload", loader);
            })(window, document);

            
        
        },

       
    }

</script>
