<template>
  <div>
    <div>
      <h5 class="input-title">Unique Student Identifier</h5>

      <div class="form-group">
        <label class="form-label"
          >Do you have a Unique Student Identifier (USI)?</label
        >
        <div>
          <label>
            <input
              type="radio"
              class="input-form-check-input"
              value="yes"
              v-model="usi_choice"
            />
            Yes
          </label>
          <label class="ms-3">
            <input
              type="radio"
              class="input-form-check-input"
              value="no"
              v-model="usi_choice"
            />
            No
          </label>
        </div>
      </div>

      <div class="form-group" v-if="usi_choice == 'yes'">
        <label class="form-label">Please specify your USI</label>
        <input
          type="text"
          class="form-control"
          placeholder="USI name"
          v-model="usi_choice_name"
        />
      </div>

      <div class="form-group">
        <label class="form-label"
          >USI verified by Institute of Business and Management
          (Victoria)</label
        >

        <div class="row">
          <div class="col-md-4">
            <label for="staff_name">Staff name</label>
            <input
              type="text"
              class="form-control"
              name="staff_name"
              placeholder="Staff name"
              v-model="usi_staff_name"
            />
          </div>
          <div class="col-md-4">
            <label for="signature">Signature</label>
            <input
              type="text"
              class="form-control"
              name="signature"
              placeholder="Signature"
            />
          </div>
          <div class="col-md-4">
            <label for="staff_date">Date</label>
            <input
              type="date"
              class="form-control"
              name="staff_date"
              v-model="usi_date"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      usi_choice: null,
      usi_choice_name: null,
      usi_staff_name: "",
      usi_date: "",
    };
  },

  watch: {
    usi_choice(val) {
      if (val == "no") this.usi_choice_name = "N/A";
      else this.usi_choice_name = "";
    },
  },
};
</script>
