<template>
  <div>
    <div class="d-flex justify-content-end">
      <router-link to="#" class="btn btn-md theme-bg m-2  " @click.native="goToBack"><i class="fa fa-arrow-left"></i> Previous</router-link>
      <button class="btn btn-md theme-bg m-2" @click="save">Save & Continue</button>
    </div>
    <EnglishLanguageDetailsComponent ref="english_language_details" />

    <PreviousQualificationDetailsComponent
      ref="previous_qualification_details"
    />

    <MostRecentQualificationDetailsComponent
      ref="most_recent_qualification_details"
    />

    <div class="d-flex justify-content-end">
      <router-link to="#" class="btn btn-lg theme-bg m-2  " @click.native="goToBack"><i class="fa fa-arrow-left"></i> Previous</router-link>
      <button class="btn btn-lg theme-bg m-2" @click="save">Save & Continue</button>
    </div>
  </div>
</template>

<script>
import EnglishLanguageDetailsComponent from "./EnglishLanguageDetailsComponent.vue";
import PreviousQualificationDetailsComponent from "./PreviousQualificationDetailsComponent.vue";
import MostRecentQualificationDetailsComponent from "./MostRecentQualificationDetailsComponent.vue";

export default {
  components: {
    EnglishLanguageDetailsComponent,
    PreviousQualificationDetailsComponent,
    MostRecentQualificationDetailsComponent,
  },

  data() {
    return {};
  },

  methods: {
    save() {
      const data = {
        ...this.$refs.english_language_details,
        ...this.$refs.previous_qualification_details,
        ...this.$refs.most_recent_qualification_details,
      };

      this.$emit("save", data);
    },

    goToBack(){
      this.$emit('goToBack', 1)
    }
  },
};
</script>
