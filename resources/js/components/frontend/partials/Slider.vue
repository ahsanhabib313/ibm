<template>
  <!--slider-area start-->
  <section class="slider-area pb-xs-35">
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="3"
          aria-label="Slide 4"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="4"
          aria-label="Slide 5"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="5"
          aria-label="Slide 6"
        ></button>
      </div>
      <div class="carousel-inner">
        <div
          class="carousel-item text-center active ibm-courosel-item"
          :style="slider_one"
        >
          <div
            class="
              d-flex
              flex-column
              h-100
              align-items-center
              justify-content-center
            "
          >
            <h1
              class="text-white fw-bolder wow fadeInUp2 animated"
              data-wow-delay=".01s"
            >
              EXPLORE COURSES!
            </h1>
            <div class="sub-text mt-3 mb-3 pt-2 pb-2">
              <p
                class="text-white fw-bolder fs-5 wow fadeInUp2 animated"
                data-wow-delay=".01s"
              >
                Elicos General English (0101439)
              </p>
              <p
                class="
                  text-white
                  fw-bolder
                  mt-1
                  mb-1
                  pt-1
                  pb-1
                  fs-5
                  wow
                  fadeInUp2
                  animated
                "
                data-wow-delay=".01s"
              >
                Advanced Diploma of Business (0100452)
              </p>
              <p
                class="text-white fw-bolder fs-5 wow fadeInUp2 animated"
                data-wow-delay=".01s"
              >
                Diploma of Business Administration (0100453)
              </p>
            </div>
            <div>
              <router-link
                to="/how-to-apply"
                class="
                  btn btn-lg
                  fs-5
                  theme-bg
                  text-white
                  mt-4
                  wow
                  fadeInUp2
                  animated
                "
                data-wow-delay=".2s"
                >Learn More</router-link
              >
            </div>
          </div>
        </div>
        <div
          class="carousel-item text-center ibm-courosel-item"
          :style="slider_two"
        >
          <div
            class="
              d-flex
              flex-column
              h-100
              align-items-center
              justify-content-center
            "
          >
            <h1
              class="text-white fw-bolder wow fadeInUp2 animated"
              data-wow-delay=".01s"
            >
              Build your career in Carpentry
            </h1>

            <p
              class="
                text-white
                mt-3
                mb-3
                pt-2
                pb-2
                fw-bolder
                fs-5
                wow
                fadeInUp2
                animated
              "
              data-wow-delay=".01s"
            >
              We offer more advance and detailed <br />
              courses in carpentry.
            </p>
            <div>
              <router-link
                to="/courses/certificate-iii-in-carpentry"
                class="btn fs-5 theme-bg text-white wow fadeInUp2 animated"
                data-wow-delay=".2s"
                >Learn More</router-link
              >
            </div>
          </div>
        </div>
        <div
          class="carousel-item text-center ibm-courosel-item"
          :style="slider_three"
        >
          <div
            class="
              d-flex
              flex-column
              h-100
              align-items-center
              justify-content-center
            "
          >
            <h1
              class="text-white fw-bolder wow fadeInUp2 animated"
              data-wow-delay=".01s"
            >
              Get qualified in English
            </h1>
            <p
              class="
                text-white
                mt-3
                mb-3
                pt-2
                pb-2
                fw-bolder
                fs-5
                wow
                fadeInUp2
                animated
              "
              data-wow-delay=".01s"
            >
              Find your best English courses at IBM
            </p>
            <div>
              <router-link
                to="/courses/elicos-general-english"
                class="btn fs-5 theme-bg text-white wow fadeInUp2 animated"
                data-wow-delay=".2s"
                >Learn More</router-link
              >
            </div>
          </div>
        </div>
        <div
          class="carousel-item text-center ibm-courosel-item"
          :style="slider_four"
        >
          <div
            class="
              d-flex
              flex-column
              h-100
              align-items-center
              justify-content-center
            "
          >
            <h1
              class="text-white fw-bolder wow fadeInUp2 animated"
              data-wow-delay=".01s"
            >
              Study Business with IBM
            </h1>
            <p
              class="
                text-white
                mt-3
                mb-3
                pt-2
                pb-2
                fw-bolder
                fs-5
                wow
                fadeInUp2
                animated
              "
              data-wow-delay=".01s"
            >
              Increase your business <br />
              knowledge & build your career
            </p>
            <div>
              <router-link
                to="/industry/business"
                class="btn fs-5 theme-bg text-white wow fadeInUp2 animated"
                data-wow-delay=".2s"
                >Learn More</router-link
              >
            </div>
          </div>
        </div>
        <div
          class="carousel-item text-center ibm-courosel-item"
          :style="slider_five"
        >
          <div
            class="
              d-flex
              flex-column
              h-100
              align-items-center
              justify-content-center
            "
          >
            <h1
              class="text-white fw-bolder wow fadeInUp2 animated"
              data-wow-delay=".01s"
            >
              Sharp your Trade Concept
            </h1>
            <p
              class="
                text-white
                mt-3
                mb-3
                pt-2
                pb-2
                fw-bolder
                fs-5
                wow
                fadeInUp2
                animated
              "
              data-wow-delay=".01s"
            >
              Our program includes the most <br />
              advanced trade courses for you.
            </p>
            <div>
              <router-link
                to="/industry/trade"
                class="btn fs-5 theme-bg text-white wow fadeInUp2 animated"
                data-wow-delay=".2s"
                >Learn More</router-link
              >
            </div>
          </div>
        </div>
        <div
          class="carousel-item text-center ibm-courosel-item"
          :style="slider_six"
        >
          <div
            class="
              d-flex
              flex-column
              h-100
              align-items-center
              justify-content-center
            "
          >
            <h1
              class="text-white fw-bolder wow fadeInUp2 animated"
              data-wow-delay=".01s"
            >
              STUDY AND FUN AT IBM
            </h1>
            <p
              class="
                text-white
                mt-3
                mb-3
                pt-2
                pb-2
                fw-bolder
                fs-5
                wow
                fadeInUp2
                animated
              "
              data-wow-delay=".01s"
            >
              Increase your business <br />
              knowledge & build your career
            </p>
            <div>
              <router-link
                to="/student-supports"
                class="btn fs-5 theme-bg text-white wow fadeInUp2 animated"
                data-wow-delay=".2s"
                >Learn More</router-link
              >
            </div>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!--slider-area end-->
</template>

<script>
import path from "../../../src/global-config/mixin/path-solution";
export default {
  mixins: [path],
  data() {
    return {
      slider_one:
        "background-image:url('https://ibm.vic.edu.au/public/frontend/assets/img/slider/IBM-Slider_01.png') !important;",
      slider_two:
        "background-image:url('https://ibm.vic.edu.au/public/frontend/assets/img/slider/IBM-Slider_02.png') !important;",
      slider_three:
        "background-image:url('https://ibm.vic.edu.au/public/frontend/assets/img/slider/IBM-Slider_03.png') !important;",
      slider_four:
        "background-image:url('https://ibm.vic.edu.au/public/frontend/assets/img/slider/IBM-Slider_04.png') !important;",
      slider_five:
        "background-image:url('https://ibm.vic.edu.au/public/frontend/assets/img/slider/IBM-Slider_05.png') !important;",
      slider_six:
        "background-image:url('https://ibm.vic.edu.au/public/frontend/assets/img/slider/IBM-Slider_06.png') !important;",
    };
  },
};
</script>

<style scoped>
.ibm-courosel-item {
  height: 550px;
  min-height: 350px;

  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.ibm-h1-title {
  vertical-align: middle;
}
</style>
