<template>
  <base-layout>
    <section class="about-us-area pt-50 pt-md-100 pt-xs-100">
      <div class="container">
        <div class="align-items-center">
          <div class="about-wrapper">
            <div class="section-title section-title-4">
              <div class="row">
                <div class="col-md-12 mb-50">
                  <h5 class="bottom-line mb-25">About Us</h5>
                  <h2 class="mb-20">IBM Institute Of Business Management</h2>
                </div>
              </div>
              <div class="row mb-30">
                <div class="col-md-8">
                  <div>
                    <img
                      style="width: 100%; height: 350px"
                      :src="
                        image_url +
                        '/frontend/assets/img/about/5155707_2717003.jpeg'
                      "
                    />
                  </div>
                </div>
                <div class="col-md-4">
                  <p class="mb-20 p-justify">
                    The institute of Business and Management (Victoria) is a
                    Registered Training Organisation (RTO Number: 45516 | CRICOS
                    Number: 03785D) that offers a vibrant, unique learning
                    experience for students. The institute of Business and
                    Management (Victoria)’s delivery location is situated in the
                    Broadmeadows (Victoria) with access to public transport,
                    food courts, retail and shopping outlets.
                  </p>
                </div>
              </div>
              <div class="row my-50">
                <div class="col-md-12">
                  <p class="p-justify mb-20">
                    The institute of Business and Management (Victoria) is to
                    provide an advantage to the students, the community and the
                    market with high quality human capital to meet the demands
                    of the 21st century skill needs in Australia and worldwide.
                    The institute of Business and Management (Victoria) will
                    work in partnership with students and the community to
                    provide a balanced educational program which equips each
                    student for future studies, employment and life. We believe
                    in excellence in teaching, leadership and teamwork and an
                    appreciation of Vocational Education and Training.
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <img
                    :src="
                      image_url + '/frontend/assets/img/about/8270975_5469.jpg'
                    "
                    style="width: 100%; height: 450px"
                  />
                </div>
              </div>
              <div class="row my-50">
                <div class="col-md-12">
                  <p class="p-justify mb-20 mt-20">
                    We encourage our students to grow into confident and
                    compassionate personnel by fostering their independence,
                    self-discipline, integrity and social responsibility. The
                    institute of Business and Management (Victoria) is committed
                    to providing our students with all facilities, quality
                    learning opportunities to enhance their studies, access to
                    industry professionals and current industry practices. In
                    addition to providing high quality education, we also
                    provide student support services and opportunities to
                    enhance their further study in Australia.
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p class="p-justify mb-20 mt-50">
                    The institute of Business and Management (Victoria) campus
                    is green,spacious, modern and equipped with excellent
                    facilities and has trainer to student ratio that enable
                    individual participation in learning. We provide a range of
                    face-to-face support for all students. Students are provided
                    with a caring supportive environment by our multilingual
                    staff. Student can also access professional support and
                    advice to assist them or help them overcome problems.
                  </p>
                </div>
                <div class="col-md-6">
                  <img
                    :src="
                      image_url +
                      '/frontend/assets/img/about/26712423412335.jpg'
                    "
                    style="width: 100%; height: 350px"
                  />
                </div>
              </div>

              <div class="row my-50">
                <div class="col-md-12">
                  <p class="p-justify mb-20">
                    The institute of Business and Management (Victoria) is
                    committed to providing and promoting non-discriminatory,
                    inclusive practices and processes to provide equal
                    opportunities for all students to achieve their learning
                    outcomes. We strive to ensure that decision-making processes
                    reflect a commitment to access and equity and treat all
                    students or prospective students fairly and equally.
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <img
                    :src="
                      image_url +
                      '/frontend/assets/img/about/19250334_6103970.jpg'
                    "
                    style="width: 100%; height: 500px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </base-layout>
</template>

<script>
import path from "../../../../../src/global-config/mixin/path-solution";
import BaseLayout from "../../../layouts/BaseLayout.vue";
import StartJourney from "../../../partials/StartJourney.vue";
import Testimonial from "../../../partials/Testimonial.vue";
export default {
  mixins: [path],
  components: {
    BaseLayout,
    Testimonial,
    StartJourney,
  },
};
</script>
<style>
p {
  line-height: 30px;
}
</style>