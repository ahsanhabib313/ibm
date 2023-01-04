<template>
  <div>
    <div class="container">
      <div class="row mt-5">
        <h2 class="text-center">Application/Enrollment Form</h2>
      </div>
      
      <div class="row">
        <div class="col-md-10 mx-auto">
          <div class="progress mt-4">  
            <div class="progress-bar" role="progressbar" :style="'width:'+progressing+'%'" :aria-valuenow="progressing" aria-valuemin="0" :aria-valuemax="progressing">{{progressing}}%</div>
          </div>
          <div class="ms-3 mt-5 mb-2" v-if="step_number != 6">
            <ul class="decimal-list">
              <li>Complete all section using BLOCK LETTERS</li>
              <li>
                Attach supporting documents, including certified copies of your
                passport and Academic Documents
              </li>
            </ul>
          </div>
          
          <!-- <div>
            <button @click="testSubmit">test submission</button>
          </div> -->

          <div v-if="step_number == 1">
            <Step1Component @save="handleStep"/>
          </div>

          <div v-if="step_number == 2">
            <Step2Component @save="handleStep" @goToBack="handleBackStep"/>
          </div>

          <div v-if="step_number == 3">
            <Step3Component @save="handleStep" @goToBack="handleBackStep"/>
          </div>

          <div v-if="step_number == 4">
            <Step4Component @save="handleStep" @goToBack="handleBackStep"/>
          </div>

          <div v-if="step_number == 5">
            <Step5Component @save="handleStep" @goToBack="handleBackStep"/>
          </div>

          <div v-if="step_number == 6">
            <Step6Component @save="handleStep" @goToBack="handleBackStep"/>
          </div>

          <div v-if="step_number == 7">
            <Step7Component @save="handleStep" @goToBack="handleBackStep"/>
          </div>

          <div v-if="step_number == 8">
            <div class="row py-5 d-flex justify-content-center">
              <div class="col-6">
                <img
                  :src="image_url+'/frontend/assets/img/success_submit.png'"
                  alt="Success"
                  class="img-fluid"
                />
              </div>

              <div class="col-12 text-center">
                <h3>Success</h3>
              </div>

              <div class="col-12 text-center mt-2">
                <p>You have successfully completed the application!</p>
              </div>
            </div>
          </div>

          <div v-if="step_number != 8">
            <!-- <h5 class="input-title">Office Use Only</h5>

            <div class="form-group">
              <label class="form-label">Date received</label>
              <input type="date" class="form-control" />
            </div> -->

            <!-- <h5 class="input-title">Application Submission</h5>
            <p>
              Please submit your application to: info@ibm.vic.edu.au OR
              Institute of Business and Management (Victoria), Building D, 60
              Belfast Street Broadmeadows VIC 3047, Australia
            </p> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import Step1Component from "../ApplyFormComponents/Step1Component.vue";
import Step2Component from "../ApplyFormComponents/Step2Component.vue";
import Step3Component from "../ApplyFormComponents/Step3Component.vue";
import Step4Component from "../ApplyFormComponents/Step4Component.vue";
import Step5Component from "../ApplyFormComponents/Step5Component.vue";
import Step6Component from "../ApplyFormComponents/Step6Component.vue";
import Step7Component from "../ApplyFormComponents/Step7Component.vue";
import path from '../../../src/global-config/mixin/path-solution'
export default {
  mixins:[path],
  components: {
    Step1Component,
    Step2Component,
    Step3Component,
    Step4Component,
    Step5Component,
    Step6Component,
    Step7Component,
  },

  data() {
    return {
      step_number: 1,
      step_back_number: 1,
      formData: {},
      initialValue:14.29,
      progressing:0

    };
  },

  methods: {

    handleStep(data) {
      data = this.filterFormData(data);

      const valid = this.checkValidation(data);

      // if (!valid) {
      //   alert("Please fill in all the fields");
      //   return;
      // }

      this.formData = { ...this.formData, ...data };

      // scrollTo({
      //   top: 0,
      //   behavior: "smooth",
      // });

      this.step_number++;

      this.progressing += this.initialValue



      if (this.step_number == 8) this.submitData(this.formData);
    },

    handleBackStep(value){

      this.step_number = this.step_number - value
      this.progressing -= this.initialValue
      
    },

    submitData(data) {
      axios
        .post("submit-student-enrolment", data)
        .then((res) => {
          console.log(res);
        })
        .catch((err) => {
          console.log(err.response);
        });
    },

    filterFormData(data) {
      let keys = Object.keys(data);
      let filtered_data = {};

      for (let i = 0; i < keys.length; i++) {
        let key = keys[i];

        if (key.substring(0, 1) != "_" && key.substring(0, 1) != "$") {
          filtered_data[key] = data[key];
        }
      }

      return filtered_data;
    },

    checkValidation(data) {
      let keys = Object.keys(data);
      let is_valid = true;

      for (let i = 0; i < keys.length; i++) {
        let key = keys[i];

        if (data[key] === null || data[key] === "") {
          is_valid = false;
          break;
        }
      }

      return is_valid;
    },
  },
};
</script>

<style>
.decimal-list li {
  list-style-type: decimal !important;
}

.form-group {
  margin-top: 1rem;
  margin-bottom: 1rem;
}

.input-title {
  padding-bottom: 10px;
  padding-top: 10px;
}

label.form-label {
  font-weight: bold;
}
</style>
