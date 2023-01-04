<template>
  <base-layout>
    <slider></slider>
    <our-courses></our-courses>
    <welcome></welcome>
    <!-- <testimonial></testimonial> -->
    <!-- <why-rpl></why-rpl> -->
    <div class="pt-200"></div>
    <!-- <great-deal></great-deal> -->
    <!-- <looking-for></looking-for> -->
    <!-- <why-choose-us></why-choose-us> -->
    <!-- <blog-part></blog-part> -->
    <search-certificate></search-certificate>
  </base-layout>
</template>

<script>
import { mapGetters } from "vuex";
import path from "../../../src/global-config/mixin/path-solution";
import BaseLayout from "../layouts/BaseLayout.vue";
import Slider from "../partials/Slider.vue";
import Course from "../partials/Course.vue";
import Welcome from "../partials/Welcome.vue";
import Category from "../partials/Category.vue";
import StartJourney from "../partials/StartJourney.vue";
import Feature from "../partials/Feature.vue";
import Testimonial from "../partials/Testimonial.vue";
import StudyPlace from "../partials/StudyPlace.vue";
import Team from "../partials/Team.vue";
import CtaSidebar from "../partials/CtaSidebar.vue";
import GreatDeal from "../partials/GreatDeal.vue";
import LookingFor from "../partials/LookingFor.vue";
import PopularCourse from "../partials/PopularCourse.vue";
import WhyChooseUs from "../partials/WhyChooseUs.vue";
import BlogPart from "../partials/BlogPart.vue";
import Subscription from "../partials/Subscription.vue";
import OurCourses from "../partials/OurCourses.vue";
import WhyRpl from "../partials/WhyRpl.vue";
import SearchCertificate from "../partials/SearchCertificate.vue";

export default {
  mixins: [path],

  data() {
    return {};
  },

  components: {
    BaseLayout,
    Slider,
    PopularCourse,
    Category,
    Welcome,
    StartJourney,
    Course,
    Testimonial,
    StudyPlace,
    Feature,
    Team,
    CtaSidebar,
    GreatDeal,
    LookingFor,
    WhyChooseUs,
    BlogPart,
    Subscription,
    OurCourses,
    WhyRpl,
    SearchCertificate,
  },

  computed: {
    ...mapGetters({
      user: "user",
    }),
  },

  created() {},

  methods: {},
};
</script>
