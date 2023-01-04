<template>
  <base-layout>
    <section
      class="pt-150 pb-120 pl-20 pr-20 pt-md-100 pt-xs-100 pb-md-70 pb-xs-70"
    >
      <div class="container">
        <div class="row">
          <div class="col-md-8"></div>
          <div class="col-md-4">World</div>
        </div>
      </div>
    </section>
    <!--shop register end-->
  </base-layout>
</template>

<script>
import path_solution from "../../../src/global-config/mixin/path-solution";
import message from "../../../src/global-config/mixin/message";
import HomeVue from "../home/Home.vue";
import { mapGetters } from "vuex";
import BaseLayout from "../layouts/BaseLayout.vue";
export default {
  mixins: [path_solution, message],
  components: { BaseLayout },
  data() {
    return {
      message: "",
      services: [],
      service_id: "",
      is_label: true,
      is_service_provider: false,
      is_registration: true,
      schedule_date: null,
      schedule_time: null,
      address: "",
      latitude: "",
      logitude: "",
      radius: "",
      is_spin: false,
      is_active_btn: false,
      user_type: "",
      isUser: "",
      signUpForm: {},
      is_user_type_selected: false,
      userTypes: [
        { user_type: 2, name: "Partner Agent" },
        { user_type: 3, name: "Student" },
      ],

      agentTypes: [
        { agent_type: 1, name: "Individual" },
        { agent_type: 2, name: "Organization" },
      ],

      courseEnrolls: [
        { course_enroll_type: 1, name: "Online" },
        { course_enroll_type: 2, name: "Offline" },
        { course_enroll_type: 2, name: "None of them" },
      ],

      certifies: [
        { certified_by: 1, name: "RPL" },
        { certified_by: 2, name: "Course" },
      ],

      stateOfAustralias: [],
      courses: [],
    };
  },
  created() {
    if (this.$route.meta.auth == true) {
      return HomeVue;
    }

    this.getService();
    this.getAustralianState();
    this.getCourse();

    if (this.$route.name == "Home") {
      this.is_label = false;
    }
  },

  computed: {
    ...mapGetters({
      user: "user",
    }),
  },

  mounted() {
    this.getLatLong();
  },

  methods: {
    getAustralianState() {
      axios.get(this.base_url + "/api/get-australia").then((res) => {
        console.log(res);
        this.stateOfAustralias = res.data;

        console.log("stateOfAustralias", this.stateOfAustralias);
      });
    },

    getCourse() {
      axios.get(this.base_url + "/api/get-course").then((res) => {
        console.log(res);
        this.courses = res.data.data;

        console.log("courses", this.courses);
      });
    },

    userTypeSelection(user_type) {
      if (user_type == 1) {
        this.is_user_type_selected = true;
        this.isUser = "student";
        const student = this.$refs.user_type_student;
        student.click();

        const student_button = this.$refs.student_button;
        const agent_button = this.$refs.agent_button;

        student_button.classList.remove("btn-default");
        student_button.classList.add("theme_btn");
        agent_button.classList.remove("theme_btn");
        agent_button.classList.add("btn-default");
      }

      if (user_type == 2) {
        this.is_user_type_selected = true;
        this.isUser = "agent";
        const agent = this.$refs.user_type_agent;
        agent.click();

        const student_button = this.$refs.student_button;
        const agent_button = this.$refs.agent_button;

        agent_button.classList.remove("btn-default");
        agent_button.classList.add("theme_btn");
        student_button.classList.remove("theme_btn");
        student_button.classList.add("btn-default");
      }
    },

    signUp() {
      this.is_spin = true;
      let form = $("#form")[0];
      let formData = new FormData(form);

      formData.append("latitude", this.latitude);
      formData.append("longitude", this.longitude);

      axios
        .post(this.api_url + "/api/signup", formData)
        .then((res) => {
          this.message = res.data.message;
          if (res.data.status == true) {
            this.toastMessage("success", res.data.message);
            setTimeout(() => {
              window.location.href = window.location.origin + "/signin";
            }, 500);
          }
        })
        .catch((error) => {
          if (error.response.status == 422) {
            this.error = error.response.data.errors;

            $.each(error.response.data.errors, function (item, index) {
              let input = jQuery(document).find('input[name="' + item + '"]');
              let inputAfter = jQuery(document).find(
                'input[name="' + item + '"] + span'
              );

              input.addClass("is-invalid");

              inputAfter.remove();
              input.after(
                '<span class="text-danger">' +
                  error.response.data.errors[item] +
                  "</span>"
              );

              // Array element
              let inputArr = jQuery(document).find(
                'input[name="' + item + '[]"]'
              );
              let inputAfterArr = jQuery(document).find(
                'input[name="' + item + '[]"] + span'
              );

              inputArr.addClass("is-invalid");

              inputAfterArr.remove();
              inputArr.after(
                '<span class="text-danger">' +
                  error.response.data.errors[item] +
                  "</span>"
              );
            });
          }
        });
    },

    getLatLong() {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          console.log("latitude", position.coords.latitude);
          console.log("longitude", position.coords.longitude);
          this.latitude = position.coords.latitude;
          this.longitude = position.coords.longitude;

          console.log("adddress", this.adddress);
        },
        (error) => {
          console.log(error.message);
        }
      );
    },

    getService() {
      axios.get(this.api_url + "/api/get-service").then((res) => {
        this.services = res.data.data;

        console.log("response", res);
      });
    },

    isSignup() {
      this.is_registration = false;
    },

    userOption(option) {
      if (option == "provider") {
        this.is_service_provider = true;
      }

      if (option == "customer") {
        this.is_service_provider = false;
      }
    },

    getAddressData: function (addressData, placeResultData, id) {
      this.address = addressData;
    },
  },
};
</script>

<style scoped>
/* .vs__selected-options{
       padding:10px 10px !important;
        border-radius: 0px !important;
      } */

.form-control {
  padding: 12px 9px !important;
}
</style>
