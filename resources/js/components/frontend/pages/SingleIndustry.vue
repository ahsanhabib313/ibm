<template>
  <base-layout>
    <!-- <div class="my-5"></div> -->
    <!-- <div class="container"> -->
    <!-- <div class="row">
        <div class="col-md-6">
          <h3>Business Industry</h3>
          <div class="my-3"></div>
          <p class="p-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam
            aliquid voluptas pariatur, consectetur, illum atque quisquam numquam
            omnis a magni quo! Hic sunt tempora, inventore quis placeat
            blanditiis? Delectus, earum.
          </p>
          <br />
          <p class="p-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium
            enim illum modi repudiandae perspiciatis non, eveniet libero est
            harum labore ipsum dolor qui aperiam eligendi quas similique saepe a
            reprehenderit?
          </p>
        </div>
        <div class="col-md-6">
          <img
            src="/frontend/assets/img/industry/industry111.jpg"
            alt=""
            class="img-fluid"
          />
        </div>
      </div>
      <div class="my-5"></div> -->
    <!-- case-gallery start -->
    <section
      class="about-us-area pt-50 pb-120 pt-md-100 pb-md-70 pt-xs-100 pb-xs-70"
    >
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="section-title mb-50">
              <!-- <h5 class="bottom-line mb-25">Featured Courses</h5> -->
              <h1>{{ industryName }} Courses</h1>
            </div>
          </div>
        </div>
        <!-- <div class="row justify-content-center">
                    <div class="col-xl-12 text-center">
                        <div class="portfolio-menu mb-30">
                            <button class="gf_btn" @click="getSelectedCourse([], 0)" :class="{'active':is_active == undefined|| is_active == 0}" data-filter='*'>All</button>
                            <button class="gf_btn" :class="{'active':category.id == is_active}" v-for="category, index in categories" :key="index" :data-filter="'cat'+index" @click="getSelectedCourse(category.courses, category.id)">{{category.name}}</button>
                           
                        </div>
                    </div>
                </div> -->
        <div class="grid row">
          <div
            class="col-lg-4 col-md-6 grid-item cat1 cat2 cat3"
            v-for="(course, cIndex) in selectedCourses.length != 0
              ? selectedCourses
              : courses"
            :key="cIndex"
          >
            <div class="z-gallery mb-30 border ibm-course-height">
              <div class="z-gallery__thumb mb-20">
                <router-link
                  :to="
                    '/courses/' +
                    course.slug.replaceAll('_', '-', course.slug.toLowerCase())
                  "
                  ><img
                    class="img-fluid"
                    :src="image_url + '/uploads/course' + course.thumbnail"
                    alt=""
                /></router-link>
                <!-- <div class="feedback-tag">4.8(256)</div>
                                <div class="heart-icon"><i class="fas fa-heart"></i></div> -->
              </div>
              <div class="z-gallery__content">
                <div class="course__tag mb-15">
                  <!-- <span>Science</span>
                                    <span>Lab</span> -->
                  <a
                    class="f-right"
                    :href="
                      '/courses/' +
                      course.slug.replaceAll(
                        '_',
                        '-',
                        course.slug.toLowerCase()
                      )
                    "
                    ><img
                      style="width: 100%"
                      :src="image_url + '/uploads/course/' + course.thumbnail"
                      alt=""
                  /></a>
                </div>

                <div class="title-area w-100" style="height: 300px">
                  <h4 class="sub-title mb-20">
                    <a
                      :href="
                        '/courses/' +
                        course.slug.replaceAll(
                          '_',
                          '-',
                          course.slug.toLowerCase()
                        )
                      "
                      >{{ course.title.substring(0, 50) }}</a
                    >
                  </h4>
                </div>
                <div
                  class="course__meta"
                  v-show="course.slug != 'elicos_general_english'"
                >
                  <span
                    ><img
                      class="icon bg-warning"
                      :src="image_url + '/frontend/assets/img/icon/catalog.svg'"
                      alt="course-meta"
                    />
                    {{ course.core_unit }} Core Unit</span
                  >
                  <span
                    ><img
                      class="icon bg-warning"
                      :src="image_url + '/frontend/assets/img/icon/catalog.svg'"
                      alt="course-meta"
                    />
                    {{ course.elective_unit }} Elective Unit</span
                  >
                  <span
                    ><img
                      class="icon bg-warning"
                      :src="image_url + '/frontend/assets/img/icon/catalog.svg'"
                      alt="course-meta"
                    />
                    {{ course.total_unit }} Total Units</span
                  >
                  <!-- <span>$260</span> -->
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-12 mt-20 text-center mb-20 wow fadeInUp2 animated"
            data-wow-delay=".3s"
          >
            <!-- <a href="/courses" class="theme_btn">All Courses</a> -->
          </div>
        </div>
        <div class="mt-3"></div>
      </div>
    </section>
    <!-- case-gallery end -->
    <!-- <div class="row">
        <h3 class="py-3 text-center">Courses We offer</h3>
        <div class="my-3"></div>
        <div class="col-md-4 mt-2">
          <a href="#">
            <div class="card">
              <div class="card-body p-0">
                <img
                  src="/frontend/assets/img/industry/industry111.jpg"
                  alt=""
                  class="img-fluid"
                />
                <div class="p-3">
                  <p class="course-title my-3">Lorem ipsum dolor sit amet</p>
                  <p class="p-justify">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Culpa nisi autem dolorum aut vitae accusantium, sit modi,
                    debitis eveniet tempora maiores hic consequatur voluptate
                    necessitatibus? In laboriosam sint porro possimus.
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 mt-2">
          <a href="#">
            <div class="card">
              <div class="card-body p-0">
                <img
                  src="/frontend/assets/img/industry/industry111.jpg"
                  alt=""
                  class="img-fluid"
                />
                <div class="p-3">
                  <p class="course-title my-3">Lorem ipsum dolor sit amet</p>
                  <p class="p-justify">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Culpa nisi autem dolorum aut vitae accusantium, sit modi,
                    debitis eveniet tempora maiores hic consequatur voluptate
                    necessitatibus? In laboriosam sint porro possimus.
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 mt-2">
          <a href="#">
            <div class="card">
              <div class="card-body p-0">
                <img
                  src="/frontend/assets/img/industry/industry111.jpg"
                  alt=""
                  class="img-fluid"
                />
                <div class="p-3">
                  <p class="course-title my-3">Lorem ipsum dolor sit amet</p>
                  <p class="p-justify">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Culpa nisi autem dolorum aut vitae accusantium, sit modi,
                    debitis eveniet tempora maiores hic consequatur voluptate
                    necessitatibus? In laboriosam sint porro possimus.
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div> -->
    <!-- </div> -->
  </base-layout>
</template>
<script>
import BaseLayout from "../../frontend/layouts/BaseLayout.vue";
import IndustryCourse from "../partials/IndustryCourse.vue";
import path from "../../../src/global-config/mixin/path-solution";
export default {
  mixins: [path],
  components: { BaseLayout, IndustryCourse },

  data() {
    return {
      courses: [],
      categories: [],
      selectedCourses: [],
      is_active: 0,
      industryName: "",
    };
  },

  watch: {
    "$route.params.slug"(newSlug, oldSlug) {
      this.getCourse();

      if (
        this.$route.name == "SingleCourse" ||
        this.$route.name == "SingleBlog" ||
        this.$route.name == "SingleIndustry"
      ) {
        var text = newSlug;
        var result = text.replace(/([A-Z])/g, " $1");
        var finalResult = result.replaceAll("-", " ");
        return (this.industryName = finalResult.replace(
          /(?:^|\s)\S/g,
          function (a) {
            return a.toUpperCase();
          }
        ));
      }
    },
  },

  created() {
    this.getCourse();
    this.getCourseCategory();
    this.getSelectedCourse();
  },

  mounted() {
    if (
      this.$route.name == "SingleCourse" ||
      this.$route.name == "SingleBlog" ||
      this.$route.name == "SingleIndustry"
    ) {
      var text = this.$route.params.slug.replaceAll(
        "-",
        "_",
        this.$route.params.slug.toLowerCase()
      );
      var result = text.replace(/([A-Z])/g, " $1");
      var finalResult = result.replaceAll("-", " ");
      return (this.industryName = finalResult.replace(
        /(?:^|\s)\S/g,
        function (a) {
          return a.toUpperCase();
        }
      ));
    }
  },

  methods: {
    getCourse() {
      console.log("this.$route.params.slug", this.$route.params.slug);
      let slug = this.$route.params.slug.replaceAll(
        "-",
        "_",
        this.$route.params.slug.toLowerCase()
      );
      axios
        .get(this.base_url + "/api/get-industry-courses/" + slug)
        .then((res) => {
          this.courses = res.data.data;

          console.log("industry", res.data);
        });
    },

    getCourseCategory() {
      axios.get(this.base_url + "/api/get-course-category").then((res) => {
        this.categories = res.data.data;
      });
    },

    getSelectedCourse(course, index) {
      this.is_active = index;

      if (index == undefined && course.length == 0) {
        // this.selectedCourses = this.courses
        // this.getCourse()
      } else {
        this.selectedCourses = course;
      }
    },
  },

  // data(){
  //   return{
  //     courses:[]
  //   }
  // },

  //  watch: {
  //         '$route.params.slug'(newSlug, oldSlug) {

  //         this.getSingleCourse();

  //         }
  //     },

  //   created(){

  //   },

  // methods:{
  //    getSingleCourse() {
  //             let slug = this.$route.params.slug.replaceAll('-', '_', this.$route.params.slug.toLowerCase())
  //             axios.get(this.base_url + '/api/get-industry-courses/' + slug)
  //                 .then(res => {
  //                     this.course = res.data.data

  //                 })
  //         }
  // }
};
</script>
<style scoped>
.course-title {
  font-size: 1.2rem !important;
  font-weight: 600 !important;
  color: #f1592a !important;
}
</style>