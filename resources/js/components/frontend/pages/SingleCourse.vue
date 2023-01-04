<template>
  <base-layout>
    <!--course-details-area start-->
    <diploma-of-business-administration
      :course="course"
      v-if="this.$route.params.slug == 'diploma-of-business'"
    ></diploma-of-business-administration>
    <advanced-diploma-of-business
      :course="course"
      v-if="this.$route.params.slug == 'advanced-diploma-of-business'"
    ></advanced-diploma-of-business>
    <general-english
      :course="course"
      v-if="this.$route.params.slug == 'elicos-general-english'"
    ></general-english>
    <carpentry
      :course="course"
      v-if="this.$route.params.slug == 'certificate-iii-in-carpentry'"
    ></carpentry>
    <management
      :course="course"
      v-if="
        this.$route.params.slug == 'graduate-diploma-of-management-learning'
      "
    ></management>
    <diploma-of-hospitality-management
      :course="course"
      v-if="
        this.$route.params.slug == 'sit50422-diploma-of-hospitality-management'
      "
    ></diploma-of-hospitality-management>
    <kitchen-management
      :course="course"
      v-if="
        this.$route.params.slug ==
        'sit40521-certificate-iv-in-kitchen-management'
      "
    ></kitchen-management>
    <commercial-cookery
      :course="course"
      v-if="
        this.$route.params.slug ==
        'sit30821-certificate-iii-in-commercial-cookery'
      "
    ></commercial-cookery>
    <!--course-details-area end-->
  </base-layout>
</template>
<script>
import BaseLayout from "../layouts/BaseLayout.vue";
import path from "../../../src/global-config/mixin/path-solution";
import DiplomaOfBusinessAdministration from "./courses/diploma-of-business-administration.vue";
import AdvancedDiplomaOfBusiness from "./courses/advanced-diploma-of-business.vue";
import GeneralEnglish from "./courses/general-english.vue";
import Carpentry from "./courses/certificate-III-in-carpentry.vue";
import Management from "./courses/graduate-diploma-of-management.vue";
import DiplomaOfHospitalityManagement from "./courses/diploma-of-hospitality-management.vue";
import KitchenManagement from "./courses/kitchen-management.vue";
import CommercialCookery from "./courses/commercial-cookery.vue";

export default {
  mixins: [path],
  components: {
    BaseLayout,
    DiplomaOfBusinessAdministration,
    AdvancedDiplomaOfBusiness,
    GeneralEnglish,
    Carpentry,
    Management,
    DiplomaOfHospitalityManagement,
    KitchenManagement,
    CommercialCookery,
  },

  data() {
    return {
      course: {},
    };
  },

  watch: {
    "$route.params.slug"(newSlug, oldSlug) {
      this.getSingleCourse();
    },
  },

  created() {
    this.getSingleCourse();
  },

  methods: {
    getSingleCourse() {
      let slug = this.$route.params.slug.replaceAll(
        "-",
        "_",
        this.$route.params.slug.toLowerCase()
      );
      axios
        .get(this.base_url + "/api/get-single-course/" + slug)
        .then((res) => {
          this.course = res.data.data;
        });
    },
  },
};
</script>
