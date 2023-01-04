<template>
  <div>
    <h5 class="input-title">
      Reason for Study Which of the following best describes your reason for
      undertaking this course?
    </h5>

    <div class="form-group row">
      <div class="col-12">
        <select class="form-control" v-model="reason_for_study">
          <option value="">Choose a reason</option>

          <option value="To get a job">To get a job</option>
          <option value="Required as part of my job">
            Required as part of my job
          </option>
          <option value="To start my own business">
            To start my own business
          </option>
          <option value="To get a better job or promotion">
            To get a better job or promotion
          </option>
          <option value="To start a new career in a different field">
            To start a new career in a different field
          </option>
          <option value="To gain new skill">To gain new skill</option>
          <option value="To gain knowledge in another course">
            To gain knowledge in another course
          </option>
          <option value="For personal interest or self-development">
            For personal interest or self-development
          </option>
          <option value="Others">Others</option>
        </select>

        <div v-if="reason_for_study == 'Others'">
          <label class="form-label">
            Please specify your reason for study
          </label>
          <input
            type="text"
            class="form-control"
            v-model="reason_for_study_other"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      reason_for_study: "",
      reason_for_study_other: null,
    };
  },

  watch: {
    reason_for_study(val) {
      if (val == "Others") this.reason_for_study_other = "";
      else this.reason_for_study_other = "N/A";
    },
  },
};
</script>
