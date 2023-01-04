<template>
  <!--what-loking-for start-->
  <section class="what-looking-for pos-rel">
    <div class="what-blur-shape-one"></div>
    <div class="what-blur-shape-two"></div>
    <div
      class="
        what-look-bg
        gradient-bg
        pt-145
        pb-130
        pt-md-95
        pb-md-80
        pt-xs-95
        pb-xs-80
      "
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center mb-55">
              <h5 class="bottom-line mb-25">Students & Partner Agents</h5>
              <h2>What are you Looking For?</h2>
            </div>
          </div>
        </div>
        <div class="row mb-85">
          <div class="col-xl-6 col-lg-6 col-md-6">
            <div
              class="what-box text-center mb-35 wow fadeInUp2 animated"
              data-wow-delay=".3s"
            >
              <div class="what-box__icon mb-30">
                <img
                  :src="image_url + '/frontend/assets/img/icon/graduate.svg'"
                  alt=""
                />
              </div>
              <h3>Want to convert skills into recognition?</h3>
              <p class="text-center">
                If you are eligible to turn your qualification into a recognized
                one, then simply click the enroll button.
              </p>
              <router-link to="/signup" class="theme_btn border_btn active"
                >Enroll Now</router-link
              >
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6">
            <div
              class="what-box text-center mb-35 wow fadeInUp2 animated"
              data-wow-delay=".3s"
            >
              <div class="what-box__icon mb-30">
                <img
                  :src="
                    image_url + '/frontend/assets/img/icon/phone-operator.svg'
                  "
                  alt=""
                />
              </div>
              <h3>Looking for a collaboration with us?</h3>
              <p class="text-center">
                Make one step forward with the registration button to grow your
                business in many forms of education.
              </p>
              <router-link to="/signup" class="theme_btn border_btn">
                Register Now</router-link
              >
            </div>
          </div>
        </div>
        <div class="categoris-container">
          <div class="col-xl-12">
            <div class="section-title text-center mb-55">
              <h5 class="bottom-line mb-25">Browse Industries</h5>
              <h2>Explore Our Courses</h2>
            </div>
          </div>
          <div
            class="
              row
              row-cols-1
              row-cols-sm-2
              row-cols-md-3
              row-cols-lg-3
              row-cols-xl-5
              justify-content-center
            "
          >
            <div class="col">
              <div
                class="single-category text-center mb-30 wow fadeInUp2 animated"
                data-wow-delay=".1s"
              >
                <img
                  class="mb-30"
                  :src="
                    image_url + '/frontend/assets/img/category-icon/eng.png'
                  "
                  alt=""
                />
                <h4 class="sub-title mb-10"><a href="/courses">English</a></h4>
                <p>One Course</p>
              </div>
            </div>
            <div class="col">
              <div
                class="single-category text-center mb-30 wow fadeInUp2 animated"
                data-wow-delay=".4s"
              >
                <img
                  class="mb-30"
                  :src="
                    image_url +
                    '/frontend/assets/img/category-icon/business.png'
                  "
                  alt=""
                />
                <h4 class="sub-title mb-10"><a href="/courses">Business</a></h4>
                <p>Two Courses</p>
              </div>
            </div>
            <div class="col">
              <div
                class="single-category text-center mb-30 wow fadeInUp2 animated"
                data-wow-delay=".5s"
              >
                <img
                  class="mb-30"
                  :src="
                    image_url + '/frontend/assets/img/category-icon/trade.svg'
                  "
                  alt=""
                />
                <h4 class="sub-title mb-10"><a href="/courses">Trade</a></h4>
                <p>One Course</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div
              class="col-md-12 mt-20 text-center mb-20 wow fadeInUp2 animated"
              data-wow-delay=".6s"
            >
              <a href="/courses" class="theme_btn">All Courses</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--what-loking-for end-->
</template>

<script>
import path from "../../../src/global-config/mixin/path-solution";
export default {
  mixins: [path],
};
</script>