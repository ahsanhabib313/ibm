<template>
  <div>
    <h5 class="input-title">Employment</h5>

    <div class="form-group row">
      <div class="col-12">
        <label class="form-label">
          Which of the following best describes your current employment status?
        </label>

        <select class="form-control" v-model="employment_status">
          <option value="">Choose a employment status...</option>

          <option value="Full time employee">Full time employee</option>
          <option value="Unemployed- seeking full time work">
            Unemployed- seeking full time work
          </option>
          <option value="Self-employed – not employing others">
            Self-employed – not employing others
          </option>
          <option value="Employed – unpaid worker in a family business">
            Employed – unpaid worker in a family business
          </option>
          <option value="Part time employee">Part time employee</option>
          <option value="Unemployed- seeking part time work">
            Unemployed- seeking part time work
          </option>
          <option value="Not employed – not looking for work">
            Not employed – not looking for work
          </option>
          <option value="Employer">Employer</option>
        </select>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      employment_status: "",
    };
  },
};
</script>
