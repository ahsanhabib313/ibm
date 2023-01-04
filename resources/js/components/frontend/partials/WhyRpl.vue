<template>
  <!-- Work Process Section Start -->
  <section class="section-padding">
    <div class="container pb-200">
      <div class="row py-5">
        <div class="col-md-4">
          <h3>Why RPL?</h3>
          <p class="mt-2">
            If you are already enough experienced in your job field then The Recognition of Prior Learning (RPL) process can help you to acquire a formal qualification that matches your knowledge and skills, and thereby contribute to improving employability, mobility, lifelong learning, social inclusion, and self-esteem within a week.
          </p>
        </div>

        <div class="col-md-8 rpl-reason-cards">
          <VueSlickCarousel v-bind="slick_settings">
            <div class="reason-card-wrapper">
              <div class="card">
                <div class="card-body">
                  <div class="icon-box blue-box">
                    <img
                      :src="image_url + '/frontend/assets/img/slick/skills.png'"
                      alt="puzzle icon"
                    />
                  </div>

                  <h4>Enlarge your Recognised skills</h4>
                  <p class="mt-2">
                    Achieve recognition certificate through undertaking relevant short courses and RPL.
                  </p>
                </div>
              </div>
            </div>
            <div class="reason-card-wrapper">
              <div class="card">
                <div class="card-body">
                  <div class="icon-box red-box">
                    <img
                      :src="image_url + '/frontend/assets/img/slick/timetable.png'"
                      alt="puzzle icon"
                    />
                  </div>

                  <h4>Less Time and Cost Effective</h4>
                  <p class="mt-2">
                    Get a qualified certificate for a low price in just 07 days. Get your certificate within your budget.
                  </p>
                </div>
              </div>
            </div>
            <div class="reason-card-wrapper">
              <div class="card">
                <div class="card-body">
                  <div class="icon-box green-box">
                    <img
                      :src="
                        image_url + '/frontend/assets/img/slick/acknowledgement.png'
                      "
                      alt="puzzle icon"
                    />
                  </div>

                  <h4>Acknowledges Learning Value</h4>
                  <p class="mt-2">
                   Earn qualification for the acknowledgment value of learning outside under a formal setting.
                  </p>
                </div>
              </div>
            </div>
            <!-- <div class="reason-card-wrapper">
              <div class="card">
                <div class="card-body">
                  <div class="icon-box green-box">
                    <img
                      :src="
                        image_url + '/frontend/assets/img/slick/available.png'
                      "
                      alt="puzzle icon"
                    />
                  </div>

                  <h4>You're Qualified!</h4>
                  <p class="mt-2">
                    Get a qualified certificate for a low price in just 07 days.
                    Get your certificate within your budget.
                  </p>
                </div>
              </div>
            </div> -->
          </VueSlickCarousel>
        </div>
      </div>
    </div>
  </section>
  <!-- Work Process Section End -->
</template>

<script>
import path from "../../../src/global-config/mixin/path-solution";
import VueSlickCarousel from "vue-slick-carousel";
import "vue-slick-carousel/dist/vue-slick-carousel.css";
import "vue-slick-carousel/dist/vue-slick-carousel-theme.css";

export default {
  mixins: [path],
  components: {
    VueSlickCarousel,
  },
  data() {
    return {
      slick_settings: {
        arrows: false,
        focusOnSelect: true,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 2,
        touchThreshold: 5,
        autoplay:true,
        dots:true,
      },
    };
  },
  created() {},

  methods: {},
};
</script>

<style scoped>
.icon-box {
  display: inline-block;
  border-radius: 50%;
  padding: 12px;
}

.rpl-reason-cards .card {
  background: #fef6f7;
}

.reason-card-wrapper {
  padding-right: 5px;
}

.reason-card-wrapper .card {
  height: 315px;
}

.blue-box {
  background: #14b0df;
}

.green-box {
  background: #4ce34c;
}

.red-box {
  background: #f0592b;
}
</style>
