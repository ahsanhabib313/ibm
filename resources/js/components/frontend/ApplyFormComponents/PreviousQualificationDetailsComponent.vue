<template>
  <div>
    <h5 class="input-title">Previous Qualification Achieved</h5>

    <div class="form-group">
      <label class="form-label"
        >Have you successfully completed any of the following qualifications in
        Australia or hold any recognized overseas qualification?</label
      >

      <div>
        <label>
          <input
            type="radio"
            class="input-form-check-input"
            name="pervious_completed_qualification"
            value="yes"
            v-model="previous_completed_qualification"
          />
          Yes
        </label>
        <label class="ms-4">
          <input
            type="radio"
            class="input-form-check-input"
            name="pervious_completed_qualification"
            value="no"
            v-model="previous_completed_qualification"
          />
          No
        </label>
      </div>
    </div>

    <div class="form-group" v-if="previous_completed_qualification == 'yes'">
      <label class="form-label">Select qualification</label>
      <select
        class="form-control"
        v-model="previous_completed_qualification_name"
      >
        <option value="">Choose a qualification...</option>
        <option value="Bachelor or above">Bachelor or above</option>
        <option value="Advanced diploma">Advanced diploma</option>
        <option value="Year 12">Year 12</option>
        <option value="Certificate III">Certificate III</option>
        <option value="Degree">Degree</option>
        <option value="Diploma">Diploma</option>
        <option value="Certificate IV">Certificate IV</option>
        <option value="Certificate II">Certificate II</option>
      </select>
    </div>

    <div class="form-group">
      <label class="form-label"
        >In case of overseas qualification, has the qualification been skill
        assessed in Australia?</label
      >
      <div>
        <label>
          <input
            type="radio"
            class="input-form-check-input"
            name="qualification_assessed"
            v-model="previous_completed_qualification_assessed"
            value="yes"
          />
          Yes
        </label>
        <label class="ms-4">
          <input
            type="radio"
            class="input-form-check-input"
            name="qualification_assessed"
            v-model="previous_completed_qualification_assessed"
            value="no"
          />
          No
        </label>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      previous_completed_qualification: null,
      previous_completed_qualification_name: null,
      previous_completed_qualification_assessed: null,
    };
  },

  watch: {
    previous_completed_qualification(val) {
      if (val == "no") this.previous_completed_qualification_name = "N/A";
      else this.previous_completed_qualification_name = "";
    },
  },
};
</script>
