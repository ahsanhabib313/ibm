<template>
  <div class="container-fluid pt-10 pr-30 topbar">
    <div class="row">
      <div
        class="col-xl-6 col-lg-6 col-md-6"
        :class="{ 'mt-10 mb-10': $isMobile() }"
      >
        <div class="float-start topbar-social-icons">
          <a href="tel:0394783163" :class="{ 'pl-15': $isMobile() }">
            <i class="fa fa-phone pl-5 shake shake-chunk shake-constant"></i
            ><span class="pl-5">03 9478 3163</span></a
          >
          <a
            href="mailto:info@ibm.vic.edu.au"
            :class="{ 'pl-15': $isMobile() }"
          >
            <i class="fa fa-envelope pl-5 shake shake-chunk shake-constant"></i
            ><span class="pl-5">info@ibm.vic.edu.au</span></a
          >
        </div>
      </div>
      <div
        class="col-xl-6 col-lg-6 col-md-6"
        :class="{ 'mt-10 mb-10': $isMobile() }"
      >
        <div class="topbar-social-icons" :class="{ 'float-end': !$isMobile() }">
          <a href="https://www.facebook.com/ibmmelbourne" target="_blank"
            ><i class="fab fa-facebook-f pl-20"></i
          ></a>
          <!--    <a href="#"><i class="fab fa-instagram pl-20"></i></a>
                        <a href="#"><i class="fab fa-youtube pl-20 mr-20"></i></a> -->
          <router-link
            v-if="user == null"
            to="/signin"
            class="
              btn
              ibm-login-topbar-btn
              btn-sm
              ibm-btn
              text-white
              pl-10
              ml-10
              mb-2
            "
            :class="{ 'float-end': $isMobile() }"
            >Student Login</router-link
          >
          <router-link
            v-else
            to="#"
            @click.native="signOut()"
            class="
              btn
              ibm-login-topbar-btn
              btn-sm
              ibm-btn
              text-white
              pl-10
              ml-10
              mb-2
            "
            :class="{ 'float-end': $isMobile() }"
            >Sign Out</router-link
          >
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { mapGetters } from "vuex";
export default {
  data() {
    return {};
  },

  computed: {
    ...mapGetters({
      user: "user",
    }),
  },

  methods: {
    signOut() {
      this.$store.dispatch("signOut");
    },
  },
};
</script>