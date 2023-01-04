<template>
  <header>
    <top-bar v-if="!$isMobile()"></top-bar>
    <nav class="navbar second-navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img
            v-if="!$isMobile()"
            :src="image_url + '/frontend/assets/img/logo/logo.png'"
            alt=""
          />
          <img
            style="width: 40%"
            v-if="$isMobile()"
            :src="image_url + '/frontend/assets/img/logo/logo.png'"
            alt=""
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <!-- <span class="navbar-toggler-icon"></span> -->
          <i class="far fa-bars"></i>
        </button>

        <!-- <div class="hamburger-menu d-md-inline-block d-lg-none text-right">
                    <a href="javascript:void(0);">
                        <i class="far fa-bars"></i>
                    </a>
                </div> -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
          <!-- <li class="nav-item"><a class="nav-link" href="/">HOME</a></li> -->
          <!-- <li class="nav-item"><a class="nav-link" href="#">ABOUT US</a></li> -->
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              HOME
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <router-link class="dropdown-item" to="/"
                  >• Home Page</router-link
                >
              </li>
              <li>
                <router-link class="dropdown-item" to="/about-us"
                  >• About Us</router-link
                >
              </li>
              <!-- <li><router-link class="dropdown-item" to="/our-approach-strategy">•	Our Approach & Strategy</router-link></li> -->
              <li>
                <router-link class="dropdown-item" to="/why-choose-ibm"
                  >• Why Choose IBM</router-link
                >
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item"><a class="nav-link" href="#">THE INSTITUTE</a></li> -->
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              INFORMATION
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <router-link class="dropdown-item" to="/live-in-australia"
                  >• Live In Australia</router-link
                >
              </li>
              <li>
                <router-link class="dropdown-item" to="/our-campus"
                  >• Our Campus</router-link
                >
              </li>
              <li>
                <router-link class="dropdown-item" to="/aqf">• AQF</router-link>
              </li>
              <li>
                <router-link class="dropdown-item" to="/useful-links"
                  >• Useful Links</router-link
                >
              </li>
              <li>
                <router-link class="dropdown-item" to="/news"
                  >• News</router-link
                >
              </li>
              <!-- <li><router-link class="dropdown-item" to="/our-teaching-method">•	Our Teaching Method</router-link></li>
                                <li><router-link class="dropdown-item" to="/qualification-structure">•	Qualification Structure</router-link></li> -->
              <!-- <li><router-link class="dropdown-item" to="/accreditation">•	Accreditation</router-link></li> -->
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              STUDENTS
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <router-link class="dropdown-item" to="/student-service"
                  >• Student Service</router-link
                >
              </li>
              <li>
                <router-link
                  class="dropdown-item"
                  to="/orientation-and-introduction"
                  >• Orientation and Introduction
                </router-link>
              </li>
              <!-- <li><router-link class="dropdown-item" to="/qualification-structure">•	Qualification Structure</router-link></li> -->
              <!-- <li><router-link class="dropdown-item" to="/accreditation">•	Accreditation</router-link></li> -->
            </ul>
          </li>
          <!-- <li class="nav-item"><a class="nav-link" href="#">ASPIRING STUDENTS</a></li> -->
          <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                FUTURE CANDIDATES
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><router-link class="dropdown-item" to="/enthusiasm-and-orientation">•	Enthusiasm & Orientation</router-link></li>
                                <li><router-link class="dropdown-item" to="/welcome-to-australia">•	Welcome To Australia</router-link></li>
                                <li><router-link class="dropdown-item" to="/residency-and-comfortability">•	Residency & Comfortability</router-link></li>
                                <li><router-link class="dropdown-item" to="/diction-victoria-polytechnic">•	Diction Victoria Polytechnic</router-link></li>
                            </ul>
                        </li> -->
          <!-- <li class="nav-item"><a class="nav-link" href="#">RUNNING STUDENTS</a></li> -->
          <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                CURRENT CANDIDATES
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><router-link class="dropdown-item" to="/student-supports">•	Student Supports</router-link></li>
                                <li><router-link class="dropdown-item" to="/visa-exigency">•	VISA Exigency</router-link></li>
                                <li><router-link class="dropdown-item" to="/agreement">•	Agreement</router-link></li>
                                <li><router-link class="dropdown-item" to="/important-links">•	Important Links</router-link></li>
                            </ul>
                        </li> -->
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              AGENT ZONE
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <router-link class="dropdown-item" to="/agent-application"
                  >• Agent application</router-link
                >
              </li>
              <li>
                <router-link class="dropdown-item" to="/agent-list"
                  >• Agent List</router-link
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/contact-us">CONTACT</router-link>
          </li>
        </div>
      </div>
    </nav>
    <top-bar v-if="$isMobile()"></top-bar>
    <nav class="navbar third-navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <!-- <img :src="'https://www.danford.edu.au/wp-content/themes/danford/img/slogan-header.png'" alt=""> -->
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#thirdNavigation"
          aria-controls="thirdNavigation"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <!-- <span class="navbar-toggler-icon"></span> -->
          <i class="far fa-bars"></i>
        </button>
        <!-- <div class="hamburger-menu d-md-inline-block d-lg-none text-right">
                    <a href="javascript:void(0);">
                        <i class="far fa-bars"></i>
                    </a>
                </div> -->
        <div class="collapse navbar-collapse" id="thirdNavigation">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
          <!-- <li class="nav-item"><a class="nav-link" href="#">PROGRAMS</a></li> -->
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              COURSES
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <router-link class="dropdown-item" to="/industry/english"
                  >• English Courses</router-link
                >
              </li>
              <li>
                <router-link class="dropdown-item" to="/industry/business"
                  >• Business Courses</router-link
                >
              </li>
              <li>
                <router-link class="dropdown-item" to="/industry/trade"
                  >• Trade Courses</router-link
                >
              </li>
              <li>
                <router-link class="dropdown-item" to="/industry/hospitality"
                  >• Hospitality Courses</router-link
                >
              </li>

              <!-- <li><router-link class="dropdown-item" to="/industry/carpentry">•	Carpentry Courses</router-link></li> -->
            </ul>
          </li>
          <!-- <li class="nav-item"><a class="nav-link" href="#">MATERIALS</a></li> -->
          <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                FORMS AND POLICIES
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><router-link class="dropdown-item" to="/form-policy">•	Forms & Policies</router-link></li>
                                <li><router-link class="dropdown-item" to="/marketing-methods">•	Marketing Methods</router-link></li>
                                <li><router-link class="dropdown-item" to="/gallery">•	IBM Gallery</router-link></li>
                                <li><router-link class="dropdown-item" to="/videos">•	Videos</router-link></li>
                            </ul>
                        </li> -->
          <li class="nav-item">
            <router-link class="nav-link" to="/form-policy">
              Forms & Policy</router-link
            >
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/how-to-apply">
              HOW TO APPLY</router-link
            >
          </li>
          <!-- <li class="nav-item"><a class="nav-link" href="#">APPLY TIME</a></li> -->
          <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                HOW TO APPLY
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><router-link class="dropdown-item" to="/how-to-apply">•	How To Apply</router-link></li>
                                <li><router-link class="dropdown-item" to="/entrance-demand">•	Entrance Demand</router-link></li>
                                <li><router-link class="dropdown-item" to="/credit-details">•	Credit Details</router-link></li>
                                <li><router-link class="dropdown-item" to="/admission-cost">•	Admission & Cost</router-link></li>
                                <li><router-link class="dropdown-item" to="/apply-form">•	Student Enroll</router-link></li>
                            </ul>
                        </li> -->
          <li class="nav-item">
            <router-link class="nav-link" to="/covid-free"
              >COVID FREE</router-link
            >
          </li>
        </div>
      </div>
    </nav>
  </header>
</template>
<script>
import { mapGetters } from "vuex";
import path from "../../../src/global-config/mixin/path-solution";
import TopBar from "../layouts/TopBar.vue";
export default {
  components: {
    TopBar,
  },

  mixins: [path],

  data() {
    return {
      categories: [],
      courses: [],
    };
  },

  computed: {
    ...mapGetters({
      user: "user",
    }),
  },

  created() {
    this.getCourseCategory();
    this.getCourse();
  },

  methods: {
    getCourseCategory() {
      axios.get(this.base_url + "/api/get-course-category").then((res) => {
        this.categories = res.data.data;
      });
    },

    getCourse() {
      axios.get(this.base_url + "/api/get-course").then((res) => {
        this.courses = res.data.data;
      });
    },

    signOut() {
      this.$store.dispatch("signOut");
    },
  },
};
</script>

