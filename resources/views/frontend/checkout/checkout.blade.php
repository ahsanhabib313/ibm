@extends('frontend.layouts.master')
@section('content')
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
                            <h6 class="my-0">{{ $single_package->name }}</h6>
                            <!-- <small class="text-muted">Brief description</small> -->
                        </div>
                        <span class="text-muted">{{ $single_package->price }}</span>
                    </li>                     
                 
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (BDT)</span>
                        <strong>{{  $single_package->price }} TK</strong>
                    </li>
                    <li class="list-group-item list-group-item">
                        <button class="btn btn-warning btn-md ml-4" style="float:right;" onclick="payNow()">Pay Now</button>
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
@endsection

@push('script')
<script>

    function payNow(){

        $('#sslczPayBtn').trigger('click');
        
    }


    var obj = {};
    obj.cus_id     = "{{ $user->id }}";
    obj.cus_name   = "{{ $user->name }}";
    obj.cus_phone  = "{{ $user->phone != ''?$user->phone:'nothing' }}";
    obj.cus_email  = "{{ $user->email }}";
    obj.package_id = "{{ $single_package->id }}";
    obj.cus_addr1  = "{{ $user->address != ''?$user->address:'nothing' }}";
    obj.amount     = "{{ $single_package->price }}";

    console.log('obj', obj);

    $('#sslczPayBtn').prop('postdata', obj);

    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);

</script>   
@endpush