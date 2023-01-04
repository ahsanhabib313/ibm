<template>
  <div>
    <div class="d-flex justify-content-end">
      <router-link to="#" class="btn btn-md theme-bg m-2  " @click.native="goToBack"><i class="fa fa-arrow-left"></i> Previous</router-link>
      <button class="btn btn-md theme-bg m-2" @click="save">Save & Continue</button>
    </div>
    <EmployDetailsComponent ref="employ_details" />

    <PrivacyNoticeComponent ref="privacy_notice_details" />

    <StudentConsentComponent ref="student_consent" />

    <div class="d-flex justify-content-end">
      <router-link to="#" class="btn btn-lg theme-bg m-2  " @click.native="goToBack"><i class="fa fa-arrow-left"></i> Previous</router-link>
      <button class="btn btn-lg theme-bg m-2" @click="save">Save & Continue</button>
    </div>
  </div>
</template>

<script>
import EmployDetailsComponent from "./EmployDetailsComponent.vue";
import PrivacyNoticeComponent from "./PrivacyNoticeComponent.vue";
import StudentConsentComponent from "./StudentConsentComponent.vue";

export default {
  components: {
    EmployDetailsComponent,
    PrivacyNoticeComponent,
    StudentConsentComponent,
  },

  data() {
    return {};
  },

  methods: {
    save() {
      const data = {
        ...this.$refs.employ_details,
        ...this.$refs.privacy_notice_details,
        ...this.$refs.student_consent,
      };

      this.$emit("save", data);
    },
    goToBack(){
      this.$emit('goToBack', 1)
    }
  },
};
</script>
