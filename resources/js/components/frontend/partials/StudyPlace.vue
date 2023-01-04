<template>
  <!-- Work Process Section Start -->
  <section class="section-padding">
    <div class="container">
      <div class="row py-5">
        <div class="col-md-4">
          <h3>Why RPL?</h3>
          <p class="mt-2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum rem,
            consequatur aliquam minus velit suscipit rerum? Quos, repellat
            architecto. Autem, facilis. Voluptatibus, ipsam? Officia, quod!
            Pariatur animi consequatur consectetur accusantium.
          </p>
        </div>

        <div class="col-md-8 rpl-reason-cards">
          <VueSlickCarousel v-bind="slick_settings">
            <div class="reason-card-wrapper">
              <div class="card">
                <div class="card-body">
                  <div class="icon-box blue-box">
                    <img
                      :src="image_url + '/frontend/assets/img/slick/lightbulb.png'"
                      alt="puzzle icon"
                    />
                  </div>

                  <h4>Initial Consultation</h4>
                  <p class="mt-2">
                    Earn qualification for the acknowledgment value of learning
                    outside under a formal setting.
                  </p>
                </div>
              </div>
            </div>
            <div class="reason-card-wrapper">
              <div class="card">
                <div class="card-body">
                  <div class="icon-box red-box">
                    <img
                      :src="image_url + '/frontend/assets/img/slick/skills.png'"
                      alt="puzzle icon"
                    />
                  </div>

                  <h4>Free Skills Review</h4>
                  <p class="mt-2">
                    Achieve recognition certificate through undertaking relevant
                    short courses and RPL.
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
                        image_url + '/frontend/assets/img/slick/time-is-money.png'
                      "
                      alt="puzzle icon"
                    />
                  </div>

                  <h4>Formal Skill Assessment</h4>
                  <p class="mt-2">
                    Get a qualified certificate for a low price in just 07 days.
                    Get your certificate within your budget.
                  </p>
                </div>
              </div>
            </div>
            <div class="reason-card-wrapper">
              <div class="card">
                <div class="card-body">
                  <div class="icon-box yellow-box">
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
            </div>
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

.yellow-box {
  background: #f9cf00;
}
</style>
