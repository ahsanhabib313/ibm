<template>
  <div>
    <div class="d-flex justify-content-end">
      <router-link to="#" class="btn btn-md theme-bg m-2  " @click.native="goToBack"><i class="fa fa-arrow-left"></i> Previous</router-link>
      <button class="btn btn-md theme-bg m-2" @click="save">Save & Continue</button>
    </div>
    <RPLDetailsComponent ref="rpl_details" />

    <ReasonForStudyComponent ref="reason_for_student" />

    <SpecialNeedsComponent ref="special_needs" />

    <div class="d-flex justify-content-end">
      <router-link to="#" class="btn btn-lg theme-bg m-2  " @click.native="goToBack"><i class="fa fa-arrow-left"></i> Previous</router-link>
      <button class="btn btn-lg theme-bg m-2" @click="save">Save & Continue</button>
    </div>
  </div>
</template>

<script>
import RPLDetailsComponent from "./RPLDetailsComponent.vue";
import ReasonForStudyComponent from "./ReasonForStudyComponent.vue";
import SpecialNeedsComponent from "./SpecialNeedsComponent.vue";

export default {
  components: {
    RPLDetailsComponent,
    ReasonForStudyComponent,
    SpecialNeedsComponent,
  },

  data() {
    return {};
  },

  methods: {
    save() {
      const data = {
        ...this.$refs.rpl_details,
        ...this.$refs.reason_for_student,
        ...this.$refs.special_needs,
      };

      this.$emit("save", data);
    },
    goToBack(){
      this.$emit('goToBack', 1)
    }
  },
};
</script>
