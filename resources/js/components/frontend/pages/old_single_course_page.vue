<template>
      <section class="course-details-area pt-150 pb-120 pt-md-100 pb-md-70 pt-xs-100 pb-xs-70">
          <div class="container">
                  <div class="row">
                      <div class="col-xxl-8 col-xl-7">
                          <div class="courses-details-wrapper mb-30">
                              <h2 class="courses-title mb-30">{{course.title}}</h2>
                              <!-- <h5>Photography Specialist By Jason Momoa</h5> -->
                              <!-- <div class="course-details-img mb-30" style="background-image: url(frontend/assets/img/course/details/01.jpg);">
                                <div class="video-wrapper">
                                    <a href="https://www.youtube.com/watch?v=7omGYwdcS04" class="popup-video"><i class="fas fa-play"></i></a>
                                    </div>
                                </div> -->
                                <div class="course-thumbnail mb-30">
                                    <img :src="image_url+'/uploads/course/'+course.thumbnail" alt="" class="img-fluid w-100">
                                </div>
                                <p v-html="course.content"></p>
                                <!-- <div class="courses-tag-btn">
                                    <a href="#">Add to wishlist</a>
                                    <a href="#">Share</a>
                                    <a href="#">Gift this course</a>
                                </div> -->
                          </div>
                      </div>
                      <div class="col-xxl-4 col-xl-5">
                         <div class="courses-ingredients">
                              <h3 class="corses-title mb-30">Course Includes</h3>
                              <!-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolore.</p> -->
                              <ul class="courses-item mt-25">
                                  <li><img :src="image_url+'/frontend/assets/img/icon/book.svg'" alt="">{{course.core_unit}} Core Units</li>
                                  <li><img :src="image_url+'/frontend/assets/img/icon/book.svg'" alt=""> {{course.elective_unit}} Elective Unit</li>
                                  <li><img :src="image_url+'/frontend/assets/img/icon/book.svg'" alt=""> {{course.total_unit}} Total Units</li>
                              </ul>
                          </div>
                      </div>
                  </div>
                 
              </div>
      </section>
</template>