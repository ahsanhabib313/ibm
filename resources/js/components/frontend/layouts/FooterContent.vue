<template>
  <!--footer-area start-->
  <footer class="footer-area pt-70 pb-40">
    <div class="container">
      <div class="row mb-15">
        <div
          class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp2 animated"
          data-wow-delay=".1s"
        >
          <div class="footer__widget mb-30">
            <div class="footer-log mb-20">
              <a href="/" class="logo">
                <img
                  :src="image_url + '/frontend/assets/img/logo/logo.png'"
                  alt=""
                />
              </a>
            </div>
            <p class="p-justify">
              The Institute Of Business and Management (Victoria IBM) is a
              Registered Training Organisation that offers a vibrant, unique
              learning experience for students.
            </p>
            <p>CRICOS Code: 03785D RTO Code: 45516</p>
            <div class="social-media footer__social mt-30">
              <a href="https://www.facebook.com/ibmmelbourne " target="_blank"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <!--        <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a> -->
              <!-- <a href="#"><i class="fab fa-google-plus-g"></i></a> -->
            </div>
          </div>
        </div>
        <div
          class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp2 animated"
          data-wow-delay=".3s"
        >
          <div class="footer__widget mb-30 pl-40 pl-md-0 pl-xs-0">
            <h6 class="widget-title mb-35">Contact us</h6>
            <ul class="fot-list">
              <!-- <li><a href="#"><i class="fa fa-envelope"></i> ceo@ibm.vic.edu.au</a></li> -->
              <li>
                <a href="#"
                  ><i class="fa fa-envelope"></i>&nbsp; info@ibm.vic.edu.au</a
                >
              </li>
              <!-- <li><a href="#"><i class="fa fa-phone"></i> +406538251</a></li> -->
              <li>
                <a href="#"
                  ><i class="fa fa-phone"></i>&nbsp; +(03) 9478 3163</a
                >
              </li>
              <li>
                <a href="#"
                  ><i class="fa fa-map-marker-alt" aria-hidden="true"></i>&nbsp;
                  60 Belfast St BROADMEADOWS VIC 3047</a
                >
              </li>
            </ul>
          </div>
        </div>

        <div
          class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp2 animated"
          data-wow-delay=".5s"
        >
          <div class="footer__widget mb-25 pl-90 pl-md-0 pl-xs-0">
            <h6 class="widget-title mb-35">Quick Links</h6>
            <ul class="fot-list">
              <li><router-link to="/contact-us">Contact Us</router-link></li>
              <li><router-link to="/about-us">About Us</router-link></li>
              <li>
                <router-link to="/privacy-policy">Privacy Policy</router-link>
              </li>
              <!-- <li><router-link to="/courses">Courses</router-link></li> -->
              <li>
                <router-link to="/forms-policies">Forms & Policies</router-link>
              </li>
              <li>
                <router-link to="/how-to-apply">How To Apply</router-link>
              </li>
            </ul>
          </div>
        </div>
        <div
          class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp2 animated"
          data-wow-delay=".7s"
        >
          <div class="footer__widget mb-30 pl-lg-0 pl-md-0 pl-xs-0">
            <h6 class="widget-title mb-35">Courses</h6>
            <ul class="fot-list mb-30">
              <li v-for="(course, index) in courses" :key="index">
                <router-link
                  :to="
                    '/courses/' +
                    course.slug.replaceAll('_', '-', course.slug.toLowerCase())
                  "
                  >{{ course.title }}</router-link
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="copy-right-area border-bot pt-40">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="copyright text-center">
              <h5>
                Copyright@ 2022 <a href="#">IBM</a>. All Rights Reserved |
                Developed By
                <a target="_blank" href="https://quadque.tech/"
                  >Quadque Technologies Ltd.</a
                >
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--footer-area end-->
</template>
<script>
import path from "../../../src/global-config/mixin/path-solution";
export default {
  mixins: [path],

  data() {
    return {
      courses: [],
    };
  },

  created() {
    this.getCourse();
  },

  methods: {
    getCourse() {
      axios.get(this.base_url + "/api/get-course").then((res) => {
        this.courses = res.data.data;

        console.log(res.data.data);
      });
    },
  },
};
</script>

