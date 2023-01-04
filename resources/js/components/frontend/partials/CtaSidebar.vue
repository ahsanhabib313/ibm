<template>
<!-- CTA Sidebar start -->
<section class="cta-5 mb--120 bg-gray mt-20">
    <div class="container cta-container-padding">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="cta-inner4">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-4 col-lg-5">
                           <div class="cta-img mb-4 mb-lg-0">
                               <img :src="image_url+'/frontend/assets/images/about/img_9.png'" alt="" class="img-fluid">
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="cta-content ps-lg-4">
                                <span class="subheading mb-10">Not sure where to start?</span>
                                <h2 class="mb-20"> Want to know Special Offers & Updates of new courses?</h2>
                                <a href="#" class="btn btn-main rounded"> Join NOw</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Sidebar end -->
</template>

<script>
import path from '../../../src/global-config/mixin/path-solution'
export default {
    mixins:[path]
}
</script>