<template>
<!-- Team section start -->
<section class="team section-padding">
    <div class="container">
        <div class="row  mb-100">
            <div class="col-lg-8 col-xl-8">
                <div class="section-heading text-center text-lg-start">
                    <h2 class="font-lg">Top Rated Instructors</h2>
                    <p>Discover Your Perfect Program In Our Courses.</p>
                </div>
            </div>

             <div class="col-xl-4 col-lg-4">
                <div class="text-center text-lg-end">
                    <a href="#" class="btn btn-main-outline rounded">All Instructors <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item team-item-4 mb-70 mb-xl-0">
                    <div class="team-img">
                        <img :src="image_url+'/frontend/assets/images/team/team-4.jpg'" alt="" class="img-fluid">

                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4>Harish Ham</h4>
                            <p>SEO Expert</p>
                        </div>

                        <div class="course-meta">
                            <span class="duration"><i class="far fa-user-alt"></i>20 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>2 Course</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item team-item-4 mb-70 mb-xl-0">
                    <div class="team-img">
                        <img :src="image_url+'/frontend/assets/images/team/team-1.jpg'" alt="" class="img-fluid">
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4>Harish Ham</h4>
                            <p>CEO, Developer</p>
                        </div>
                        <div class="course-meta">
                            <span class="duration"><i class="far fa-user-alt"></i>20 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>2 Course</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item team-item-4 mb-70 mb-xl-0">
                    <div class="team-img">
                        <img :src="image_url+'/frontend/assets/images/team/team-2.jpg'" alt="" class="img-fluid">

                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4>Harish Ham</h4>
                            <p>Web eveloper</p>
                        </div>
                        <div class="course-meta">
                            <span class="duration"><i class="far fa-user-alt"></i>20 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>2 Course</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item team-item-4">
                    <div class="team-img">
                        <img :src="image_url+'/frontend/assets/images/team/team-3.jpg'" alt="" class="img-fluid">

                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4>Harish Ham</h4>
                            <p>Marketer</p>
                        </div>

                        <div class="course-meta">
                            <span class="duration"><i class="far fa-user-alt"></i>20 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>2 Course</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team section End -->
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