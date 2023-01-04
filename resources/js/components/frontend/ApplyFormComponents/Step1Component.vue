<template>
  <div>
    <CourseSelectionComponent ref="course_selection" />

    <PersonalDetailsComponent ref="personal_details" />

    <div class="d-flex justify-content-end">
      <button class="btn btn-lg theme-bg m-2  " @click="save">Save & Continue</button>
    </div>
  </div>
</template>

<script>
import CourseSelectionComponent from "../ApplyFormComponents/CourseSelectionComponent.vue";
import PersonalDetailsComponent from "../ApplyFormComponents/PersonalDetailsComponent.vue";

export default {
  components: {
    CourseSelectionComponent,
    PersonalDetailsComponent,
  },

  data() {
    return {};
  },

  methods: {
    save() {
      let data = {
        ...this.$refs.course_selection,
        ...this.$refs.personal_details,
      };

      this.$emit("save", data);
    },
  },
};
</script>
