<template>
  <div>
    <h5 class="input-title">Most recent or current Qualifications</h5>

    <div class="form-group">
      <label for="name_of_qualification" class="form-label"
        >Name of qualification</label
      >
      <input
        type="text"
        name="name_of_qualification"
        class="form-control"
        placeholder="Name of qualification"
        v-model="most_recent_qualification_name_of_qualification"
      />
    </div>

    <div class="form-group">
      <label for="school_institution" class="form-label"
        >School / Institution</label
      >
      <input
        type="text"
        class="form-control"
        name="school_institution"
        placeholder="School / Institution"
        v-model="most_recent_qualification_school_institution"
      />
    </div>

    <div class="form-group">
      <label for="mrq_country" class="form-label">Country</label>
      <input
        type="text"
        class="form-control"
        name="mrq_country"
        placeholder="Country"
        v-model="most_recent_qualification_country"
      />
    </div>

    <div class="form-group">
      <label for="mrq_year_to_be_completed" class="form-label"
        >Year was/to be completed</label
      >
      <input
        type="text"
        class="form-control"
        name="mrq_year_to_be_completed"
        placeholder="Year was/to be completed"
        v-model="most_recent_qualification_completed_year"
      />
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      most_recent_qualification_name_of_qualification: "",
      most_recent_qualification_school_institution: "",
      most_recent_qualification_country: "",
      most_recent_qualification_completed_year: "",
    };
  },
};
</script>
