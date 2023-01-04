<template>
  <!-- case-gallery start -->
  <section
    class="feature-course pt-100 pb-70 pt-md-95 pb-md-80 pt-xs-95 pb-xs-80"
    v-if="courses.length > 0"
  >
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section-title text-center mb-50">
            <h5 class="bottom-line mb-25">Featured Courses</h5>
            <h2>Explore our Popular Courses</h2>
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
          <div class="z-gallery mb-30 border border">
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
                <router-link
                  class="f-right"
                  :to="
                    '/courses/' +
                    course.slug.replaceAll('_', '-', course.slug.toLowerCase())
                  "
                  ><img
                    style="width: 100%"
                    :src="image_url + '/uploads/course/' + course.thumbnail"
                    alt=""
                /></router-link>
              </div>
              <h4 class="sub-title mb-20">
                <router-link
                  :to="
                    '/courses/' +
                    course.slug.replaceAll('_', '-', course.slug.toLowerCase())
                  "
                  >{{ course.title.substring(0, 30) }}</router-link
                >

              </h4>
              <div class="course__meta">
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
      </div>
      <div class="row">
        <div
          class="col-lg-12 mt-20 text-center mb-20 wow fadeInUp2 animated"
          data-wow-delay=".3s"
        >
          <a href="/courses" class="theme_btn">All Courses</a>
        </div>
      </div>
    </div>
  </section>
  <!-- case-gallery end -->
</template>

<script>
import path from "../../../src/global-config/mixin/path-solution";
export default {
  mixins: [path],

  data() {
    return {
      courses: [],
      categories: [],
      selectedCourses: [],
      is_active: 0,
    };
  },

  created() {
    this.getCourse();
    this.getCourseCategory();
    this.getSelectedCourse();
  },

  watch: {
    "$route.params.slug"(newSlug, oldSlug) {
      this.getCourse();
    },
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
          this.course = res.data.data;

          console.log(res.data);
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
};
</script>
<style scoped>
.border {
  border: 1px solid #2c2c2c !important;
}
</style>