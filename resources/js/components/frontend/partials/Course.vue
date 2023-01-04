<template>
    
<!--  Course style 1 -->

<section class="course-wrapper section-padding ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-heading mb-70 text-center">
                    <h2 class="font-lg">Popular Courses</h2>
                    <p>Discover Your Perfect Program In Our Courses.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-lg-center">
            <div class="col-xl-4 col-lg-4 col-md-6" v-for="course, index in courses" :key="index">
                <div class="course-grid bg-shadow tooltip-style">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img :src="image_url+'/uploads/course/'+course.thumbnail" alt="" class="img-fluid">
                            <!-- <div class="course-price">$300</div> -->
                        </div>
                    </div>
    
                    <div class="course-content">
                        <!-- <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div> -->

                        <h3 class="course-title mb-20"> <router-link :to="'/courses/'+course.slug.replaceAll('_', '-', course.slug.toLowerCase())">{{course.title}} </router-link> </h3>

                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            <span class="duration"><i class="far fa-book me-2"></i>{{course.core_unit}} Core Units</span>
                            <span class="students"><i class="far fa-book me-2"></i>{{course.elective_unit}} Elective Units</span>
                            <span class="lessons"><i class="far fa-book me-2"></i>{{course.total_unit}} Units</span>
                        </div>
                    </div>
    
                    <div class="course-hover-content">
                        <!-- <div class="price">$300</div> -->
                        <h3 class="course-title mb-20 mt-30"> <router-link :to="'/courses/'+course.slug.replaceAll('_', '-', course.slug.toLowerCase())">{{course.title}} </router-link> </h3>
                        <div class="course-meta d-flex align-items-center mb-20">
                            <div class="author me-4">
                                <!-- <img :src="image_url+'/frontend/assets/images/course/course-2.jpg'" alt="" class="img-fluid"> -->
                                <!-- <a href="#">Josephin</a> -->
                            <span class="lesson"> <i class="far fa-book"></i> {{course.total_unit}} Units</span>
                            </div>
                        </div>
                        <p class="mb-20" v-html="course.content.substring(0,100)"></p>
                        <router-link to="/signup" class="btn btn-grey btn-sm rounded">Join Now <i class="fal fa-angle-right"></i></router-link>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->
        </div>
    </div>
</section>

<!--  Course style 1 End -->
</template>

<script>
import path from '../../../src/global-config/mixin/path-solution'
export default {
    mixins:[path],

    data(){
        return{
            courses:[]
        }
    },

    created(){
        this.getCourse()
    },

    methods:{
        getCourse(){
            axios.get(this.base_url+'/api/get-course')
            .then(res=>{
                this.courses = res.data.data
            })
        }
    }
}
</script>