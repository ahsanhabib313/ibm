<template>
            <!-- why-chose-section-wrapper start -->
        <div class="why-chose-section-wrapper gradient-bg mr-100 ml-100">
            <!-- why-chose-us start -->
            <section class="why-chose-us">
                <div class="why-chose-us-bg pt-150 pb-175 pt-md-95 pb-md-90 pt-xs-95 pb-xs-90">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-7">
                                <div class="chose-img-wrapper mb-50 pos-rel">
                                    <div class="coures-member">
                                        <h5>Total Students</h5>
                                        <img class="choses chose_01" :src="image_url+'/frontend/assets/img/chose/01.png'" alt="Chose-img">
                                        <img class="choses chose_02" :src="image_url+'/frontend/assets/img/chose/02.png'" alt="Chose-img">
                                        <img class="choses chose_03" :src="image_url+'/frontend/assets/img/chose/03.png'" alt="Chose-img">
                                        <img class="choses chose_04" :src="image_url+'/frontend/assets/img/chose/04.png'" alt="Chose-img">
                                        <span>1k+</span>
                                    </div>
                                    <div class="feature tag_01"><span><img :src="image_url+'/frontend/assets/img/icon/shield-check.svg'" alt=""></span> Government Authorized</div>
                                    <div class="feature tag_02"><span><img :src="image_url+'/frontend/assets/img/icon/catalog.svg'" alt=""></span> 4 Courses</div>
                                    <div class="feature tag_03"><span><i class="fal fa-check"></i></span> Quality Learning</div>
                                    <div class="video-wrapper">
                                        <a href="https://www.youtube.com/watch?v=7omGYwdcS04" class="popup-video"><i class="fas fa-play"></i></a>
                                    </div>
                                    <div class="img-bg pos-rel">
                                        <img class="chose_05 pl-70 pl-lg-0 pl-md-0 pl-xs-0" :src="image_url+'/frontend/assets/img/chose/05.png'" alt="Chose-img">
                                    </div>
                                    <img class="chose chose_06" :src="image_url+'/frontend/assets/img/shape/dot-box3.svg'" alt="Chose-img">
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5">
                                <div class="chose-wrapper pl-25 pl-lg-0 pl-md-0 pl-xs-0">
                                    <div class="section-title mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                                        <h5 class="bottom-line mb-25">Explore IBM</h5>
                                        <h2 class="mb-25">Why IBM?</h2>
                                        <p class="p-justify">IBM enables Australian people to progress to professional education or training programs while they are already experienced and want to grow a sharp career line. IBM provides a quick pathway to the higher professional qualification or equivalent degree under some conditions. If you've been thinking about going for a long career, this can make the process much easier for any student through Courses for Overseas Students (CRICOS). </p>
                                    </div>
                                    <ul class="text-list mb-40 wow fadeInUp2 animated" data-wow-delay='.2s'>
                                        <li>Various professional courses under one place.</li>
                                        <li>Facilities of RPL qualifications in just one week.</li>
                                        <li>Qualified trainers and instructors for each sector.</li>
                                        <li>Opportunities for foreign students with special courses.</li>
                                    </ul>
                                    <router-link to="/about-us" class="theme_btn wow fadeInUp2 animated" data-wow-delay='.3s'>More Details</router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- why-chose-us end -->
        </div>
        <!-- why-chose-section-wrapper start -->
</template>

<script>
import path from '../../../src/global-config/mixin/path-solution'
export default {
    mixins:[path]
    
}
</script>