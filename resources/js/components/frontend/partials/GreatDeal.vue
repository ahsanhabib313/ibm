<template>
           <!--great-deal-area start-->
       <section class="great-deal-area pb-90  pb-md-40 pt-xs-50 pb-xs-40" :class="{'pt-50 pt-md-100':this.$route.name == 'Home'}">
           <div class="container">
               <div class="row justify-content-lg-center justify-content-start">
                   <div class="col-xl-3 col-lg-8">
                       <div class="deal-box mb-30 text-center text-xl-start">
                           <h2 class="mb-20"><b class="theme-color">Why RPL?</b></h2>
                           <p class="p-justify">If you are already enough experienced in your job field then The Recognition of Prior Learning (RPL) process can help you to acquire a formal qualification that matches your knowledge and skills, and thereby contribute to improving employability, mobility, lifelong learning, social inclusion, and self-esteem within a week.</p>
                       </div>
                   </div>
                   <div class="col-xl-8">
                       <div class="deal-active owl-carousel mb-30">
                            <div class="single-item">
                                <div class="single-box mb-30">
                                    <div class="single-box__icon mb-25">
                                        <img :src="image_url+'/frontend/assets/img/icon/puzzle.svg'" alt="">
                                    </div>
                                    <h4 class="sub-title mb-20">Enlarge your Recognised skills</h4>
                                    <p class="p-justify">Achieve recognition certificate through undertaking relevant short courses and RPL. </p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="single-box s-box2 mb-30">
                                    <div class="single-box__icon mb-25">
                                        <img :src="image_url+'/frontend/assets/img/icon/lifetime.svg'" alt="">
                                    </div>
                                    <h4 class="sub-title mb-20">Less Time and Cost Effective</h4>
                                    <p class="p-justify">Get a qualified certificate for a low price in just 07 days. Get your certificate within your budget. </p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="single-box s-box3 mb-30">
                                    <div class="single-box__icon mb-25">
                                        <img :src="image_url+'/frontend/assets/img/icon/notepad.svg'" alt="">
                                    </div>
                                    <h4 class="sub-title mb-20">Acknowledges Learning Value </h4>
                                    <p class="p-justify">Earn qualification for the acknowledgment value of learning outside under a formal setting.  </p>
                                </div>
                            </div>
                            <!-- <div class="single-item">
                                <div class="single-box mb-30">
                                    <div class="single-box__icon mb-25">
                                        <img :src="image_url+'/frontend/assets/img/icon/graduate.svg'" alt="">
                                    </div>
                                    <h4 class="sub-title mb-20">Learn New Skills from Experts</h4>
                                    <p>New skills to learn can be useful, fun, and are often great at making a “well-rounded” person</p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="single-box s-box2 mb-30">
                                    <div class="single-box__icon mb-25">
                                        <img :src="image_url+'/frontend/assets/img/icon/manager.svg'" alt="">
                                    </div>
                                    <h4 class="sub-title mb-20">We have Expert Trainers</h4>
                                    <p>We examine how expert trainers develop subject teaching knowledge, and others.</p>
                                </div>
                            </div> -->
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!--great-deal-area end-->
</template>

<script>
import path from '../../../src/global-config/mixin/path-solution'
export default {
    mixins:[path],
    mounted(){
        // $('.owl-carousel').owlCarousel();
    }
    
    
}
</script>