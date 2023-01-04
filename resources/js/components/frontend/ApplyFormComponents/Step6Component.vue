<template>
  <div>
    <div class="d-flex justify-content-end">
      <router-link to="#" class="btn btn-md theme-bg m-2  " @click.native="goToBack"><i class="fa fa-arrow-left"></i> Previous</router-link>
      <button class="btn btn-md theme-bg m-2" @click="save">Save & Continue</button>
    </div>
    <StudentCheckListComponent ref="student_check_list" />

    <EducationAgentDetailsComponent ref="education_agent_details" />

    <div class="d-flex justify-content-end">
      <router-link to="#" class="btn btn-lg theme-bg m-2  " @click.native="goToBack"><i class="fa fa-arrow-left"></i> Previous</router-link>
      <button class="btn btn-lg theme-bg m-2" @click="save">Save & Continue</button>
    </div>
  </div>
</template>

<script>
import StudentCheckListComponent from "./StudentCheckListComponent.vue";
import EducationAgentDetailsComponent from "./EducationAgentDetailsComponent.vue";

export default {
  components: {
    StudentCheckListComponent,
    EducationAgentDetailsComponent,
  },

  data() {
    return {};
  },

  methods: {
    save() {
      const data = {
        ...this.$refs.student_check_list,
        ...this.$refs.education_agent_details,
      };

      this.$emit("save", data);
    },

    goToBack(){
      this.$emit('goToBack', 1)
    }
  },
};
</script>
