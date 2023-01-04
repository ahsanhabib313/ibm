<template>
  <div>
     <div class="d-flex justify-content-end">
      <router-link to="#" class="btn btn-md theme-bg m-2  " @click.native="goToBack"><i class="fa fa-arrow-left"></i> Previous</router-link>
      <button class="btn btn-md theme-bg m-2" @click="save">Save & Continue</button>
    </div>
    <USIDetailsComponent ref="usi_details" />

    <ContactDetailsComponent ref="contact_details" />

    <div class="d-flex justify-content-end">
      <router-link to="#" class="btn btn-lg theme-bg m-2  " @click.native="goToBack"><i class="fa fa-arrow-left"></i> Previous</router-link>
      <button class="btn btn-lg theme-bg m-2" @click="save">Save & Continue</button>
    </div>
  </div>
</template>

<script>
import USIDetailsComponent from "./USIDetailsComponent.vue";
import ContactDetailsComponent from "./ContactDetailsComponent.vue";

export default {
  components: {
    USIDetailsComponent,
    ContactDetailsComponent,
  },

  data() {
    return {};
  },

  methods: {
    save() {
      const data = {
        ...this.$refs.usi_details,
        ...this.$refs.contact_details,
      };

      this.$emit("save", data);
    },

    goToBack(){
      this.$emit('goToBack', 1)
    }
  },
};
</script>
