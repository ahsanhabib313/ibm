<template>
  <div>
    <h5 class="input-title">Special Needs</h5>

    <div class="form-group">
      <label class="form-label"
        >Do you need any special support such as Language, Literacy and
        Numeracy?</label
      >

      <div>
        <label>
          <input
            type="radio"
            class="input-form-check-input"
            name="need_special_support"
            value="yes"
            v-model="need_support"
          />
          Yes
        </label>
        <label class="ms-4">
          <input
            type="radio"
            class="input-form-check-input"
            name="need_special_support"
            value="no"
            v-model="need_support"
          />
          No
        </label>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">
        Do you suffer from any physical / mental disability that may affect your
        participation in the course?
      </label>

      <div>
        <label>
          <input
            type="radio"
            class="input-form-check-input"
            name="suffer_from_any_disablity"
            value="yes"
            v-model="disability"
          />
          Yes
        </label>
        <label class="ms-4">
          <input
            type="radio"
            class="input-form-check-input"
            name="suffer_from_any_disablity"
            value="no"
            v-model="disability"
          />
          No
        </label>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">Any Other Special Need?</label>

      <div>
        <label>
          <input
            type="radio"
            class="input-form-check-input"
            name="any_other_special_need"
            value="yes"
            v-model="other_special_need"
          />
          Yes
        </label>
        <label class="ms-4">
          <input
            type="radio"
            class="input-form-check-input"
            name="any_other_special_need"
            value="no"
            v-model="other_special_need"
          />
          No
        </label>
      </div>

      <small
        >If Yes, direct it to our administration Department who will assist you
        on the support option available to you.</small
      >
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      need_support: "",
      disability: "",
      other_special_need: "",
    };
  },
};
</script>
