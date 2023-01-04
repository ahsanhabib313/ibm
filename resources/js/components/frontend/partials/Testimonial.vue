<template>
  <!--what-loking-for start-->
  <section class="what-looking-for pos-rel mt-4">
    <div class="what-look-bg pt-145 pb-130 pt-md-95 pb-md-80 pt-xs-95 pb-xs-80">
      <div class="container">
        <div class="categoris-container">
          <div class="col-xl-12">
            <div class="section-title text-center mb-55">
              <!-- <h5 class="bottom-line mb-25">Browse Industries</h5> -->
              <h2>
                <b
                  ><u><i>SUCCESS STORIES</i></u></b
                >
              </h2>

              <p class="my-2">What our students say about us</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card p-0 border-theme">
                <iframe width="100%" height="250" src="https://www.youtube.com/embed/6R9zMjE0kws" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="bg-theme p-2">
                <p>IBM Testimonial with Felana Irintsoa Ramakavelo</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card p-0 border-theme">
               <iframe width="100%" height="250" src="https://www.youtube.com/embed/PMW8VY6gpC4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="bg-theme p-2">
                <p>IBM Testimonial with Felana Irintsoa Ramakavelo</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card p-0 border-theme">
                <iframe width="100%" height="250" src="https://www.youtube.com/embed/R1pl21uZ63c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="bg-theme p-2">
                <p>IBM Testimonial with Felana Irintsoa Ramakavelo</p>
              </div>
            </div>
          </div>
          <!-- <a href="/courses" class="theme_btn w-100 text-center my-3"
            >All Courses</a
          > -->
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
  methods: {
    getCourse() {
      axios.get(this.base_url + "/api/get-course").then((res) => {
        this.courses = res.data.data;
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
.single-category {
  background: none !important;
}
.border-theme {
  border: 2px solid #f1592a !important;
  border-radius: 2px !important;
}
.bg-theme {
  margin: 10px auto !important;
  border-radius: 40px !important;
  text-align: center !important;
  background-color: #131A36 !important;
}
.bg-theme p {
  color: #fff !important;
}
</style>