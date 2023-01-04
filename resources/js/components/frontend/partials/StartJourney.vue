<template>
<!-- Work Process Section Start -->
<section class="work-process section-padding">
    <div class="container">
        <div class="row mb-40">
            <div class="col-xl-8">
                <div class="section-heading ">
                    <h2 class="font-lg">Start your journey With us</h2>
                    <!-- <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam</p> -->
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-xl-7 pe-xl-5 col-lg-12">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="step-item ">
                            <div class="step-number bg-1">01</div>
                            <div class="step-text">
                                <h5>Signup with all info</h5>
                                <p>Do signup on this website with your original information.</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="step-item">
                            <div class="step-number bg-2">02</div>
                            <div class="step-text">
                                <h5>Take your Admission</h5>
                                <p>Choose the course you want to learn.</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-xl-6 col-lg-6 col-md-6 ">
                        <div class="step-item">
                            <div class="step-number bg-3">03</div>
                            <div class="step-text">
                                <h5>Learn from online </h5>
                                <p>Start learning with your course teacher</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="step-item">
                            <div class="step-number bg-1">04</div>
                            <div class="step-text">
                                <h5>Get certificate</h5>
                                <p>Congratulations! Take your certificate after completing your course.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5">
                    <img :src="image_url+'/frontend/assets/images/bg/7.Right side static image.png'" alt="" class="img-fluid">
                <!-- <div class="video-section mt-3 mt-xl-0">
                    <div class="video-content">
                        <a href="#" class="video-icon video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- Work Process Section End -->
</template>

<script>
import path from '../../../src/global-config/mixin/path-solution'
export default {
    mixins:[path],
    created(){
        

    },

    methods:{
    
    }
}
</script>