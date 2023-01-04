<template>
  <!--what-loking-for start-->
  <section class="what-looking-for pos-rel">
    <div class="what-look-bg pt-80 pb-100 pt-md-50 pb-md-60 pt-xs-20 pb-xs-50">
      <div class="container">
        <div class="categoris-container">
          <div class="col-xl-12">
            <div class="section-title text-center mb-55">
              <!-- <h5 class="bottom-line mb-25">Browse Industries</h5> -->
              <h2>
                <b
                  ><u><i>Explore Our Courses</i></u></b
                >
              </h2>
            </div>
          </div>

          <div class="row d-flex justify-content-center">
            <div class="col-xs-6 col-sm-6 col-md-3 my-2">
              <a href="/industry/business">
                <div class="card text-center p-4">
                  <div class="card-body">
                    <img
                      class="trade-image"
                      :src="
                        image_url + '/frontend/assets/img/courses/business.jpg'
                      "
                      alt=""
                    />

                    <h6 class="sub-title mb-10">
                      <a href="/industry/business">Business</a>
                    </h6>
                    <!-- <p>One Course</p> -->
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 my-2">
              <a href="/industry/trade">
                <div class="card text-center p-4">
                  <div class="card-body">
                    <img
                      class="trade-image"
                      :src="
                        image_url + '/frontend/assets/img/courses/trade.svg'
                      "
                      alt=""
                    />

                    <h6 class="sub-title mb-10">
                      <a href="/industry/trade">Trade</a>
                    </h6>
                    <!-- <p>One Course</p> -->
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 my-2">
              <a href="/industry/english">
                <div class="card text-center p-4">
                  <div class="card-body">
                    <img
                      class="trade-image"
                      :src="
                        image_url + '/frontend/assets/img/courses/english.svg'
                      "
                      alt=""
                    />

                    <h6 class="sub-title mb-10">
                      <a href="/industry/english">English</a>
                    </h6>
                    <!-- <p>One Course</p> -->
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 my-2">
              <a href="/industry/hospitality">
                <div class="card text-center p-4">
                  <div class="card-body">
                    <img
                      class="trade-image"
                      :src="
                        image_url +
                        '/frontend/assets/img/courses/hospitality.jpg'
                      "
                      alt=""
                    />

                    <h6 class="sub-title mb-10">
                      <a href="/industry/hospitality">Hospitality</a>
                    </h6>
                    <!-- <p>One Course</p> -->
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-12 d-flex justify-content-center mt-4">
              <a href="/courses" class="btn btn-lg theme-bg text-white"
                >All Courses</a
              >
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
.sub-title {
  font-size: 1rem !important;
}
.card {
  border: none !important;
  border: 1px solid rgba(0, 0, 0, 0) !important;
  transition: all 0.3s ease-in-out !important;
}
.card:hover {
  border: 1px solid rgba(0, 0, 0, 0.125) !important;
}
@media screen and (max-width: 2560px) {
  .card {
    height: auto;
  }
  .card-body {
    display: inline-block;
    position: relative;
    width: 100%;
    vertical-align: middle;
    overflow: hidden;
  }
  .trade-image {
    max-width: 344px !important;
    width: 100% !important;
    /*  width: 344px !important; */
    height: auto;
    margin-bottom: 30px;
  }
}
@media screen and (max-width: 1399px) {
  .card {
    width: 100%;
    height: auto;
  }
  .card-body {
    display: inline-block;
    position: relative;
    width: 100%;
    vertical-align: middle;
    overflow: hidden;
  }
  .trade-image {
    max-width: 262px !important;
    width: 100% !important;
    /* width: 262px !important; */
    height: auto;
    margin-bottom: 30px;
  }
}
@media screen and (max-width: 1199px) {
  .card {
    height: auto;
  }
  .card-body {
    display: inline-block;
    position: relative;
    width: 100%;
    vertical-align: middle;
    overflow: hidden;
  }
  .trade-image {
    max-width: 210px !important;
    /*  width: 210px !important; */
    width: 100% !important;
    height: auto;
    margin-bottom: 30px;
  }
}
@media screen and (max-width: 991px) {
  .card {
    height: auto;
  }
  .card-body {
    display: inline-block;
    position: relative;
    width: 100%;
    vertical-align: middle;
    overflow: hidden;
  }
  .trade-image {
    max-width: 152px !important;
    /*   width: 145px !important; */
    width: 100% !important;
    height: auto;
    margin-bottom: 30px;
  }
}
@media screen and (max-width: 767px) {
  .card {
    height: auto;
  }
  .card-body {
    display: inline-block;
    position: relative;
    width: 100%;
    vertical-align: middle;
    overflow: hidden;
  }
  .trade-image {
    max-width: 185px !important;
    width: 100% !important;
    /*  width: 180px !important; */
    height: auto;
    margin-bottom: 30px;
  }
}
@media screen and (max-width: 575px) {
  .card {
    height: auto;
  }
  .card-body {
    display: inline-block;
    position: relative;
    width: 100%;
    vertical-align: middle;
    overflow: hidden;
  }
  .trade-image {
    max-width: 270px !important;
    width: 100% !important;
    /*   width: 262px !important; */
    height: auto;
    margin-bottom: 30px;
  }
}
@media screen and (max-width: 399px) {
  .card {
    height: auto;
  }
  .card-body {
    display: inline-block;
    position: relative;
    width: 100%;
    vertical-align: middle;
    overflow: hidden;
  }
  .trade-image {
    max-width: 250px !important;
    width: 100% !important;
    /*  width: 240px !important; */
    height: auto;
    margin-bottom: 30px;
  }
}
@media screen and (max-width: 344px) {
  .card {
    height: auto;
  }
  .card-body {
    display: inline-block;
    position: relative;
    width: 100%;
    vertical-align: middle;
    overflow: hidden;
  }
  .trade-image {
    max-width: 180px !important;
    width: 100% !important;
    /*   width: 180px !important; */
    height: auto;
    margin-bottom: 30px;
  }
}
@media screen and (max-width: 299px) {
  .card {
    height: auto;
  }
  .card-body {
    display: inline-block;
    position: relative;
    width: 100%;
    vertical-align: middle;
    overflow: hidden;
  }
  .trade-image {
    max-width: 150px !important;
    width: 100% !important;
    /*  width: 150px !important; */
    height: auto;
    margin-bottom: 30px;
  }
}
@media screen and (max-width: 255px) {
  .card {
    height: auto;
  }
  .card-body {
    display: inline-block;
    position: relative;
    width: 100%;
    vertical-align: middle;
    overflow: hidden;
  }
  .trade-image {
    max-width: 100px !important;
    width: 100% !important;
    /*    width: 100px !important; */
    height: auto;
    margin-bottom: 30px;
  }
}
</style>
