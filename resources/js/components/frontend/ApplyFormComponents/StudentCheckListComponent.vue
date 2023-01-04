<template>
  <div>
    <h5 class="input-title">Application Checklist</h5>

    <div class="form-group row">
      <div class="col-sm-6">
        <label>
          <input
            type="checkbox"
            class="input-form-check-input"
            v-model="application_checklist_completed_all_sections"
          />
          Completed all sections of this application
        </label>
        <label>
          <input
            type="checkbox"
            class="input-form-check-input"
            v-model="application_checklist_attached_certified_visa"
          />
          Attached certified true copies of your VISA
        </label>
        <label>
          <input
            type="checkbox"
            class="input-form-check-input"
            v-model="application_checklist_attached_certified_passport"
          />
          Attached certified true copies of your Passport
        </label>
        <label>
          <input
            type="checkbox"
            class="input-form-check-input"
            v-model="application_checklist_attached_certified_qualifications"
          />
          Attached certified true copies of your qualifications
        </label>
      </div>

      <div class="col-sm-6">
        <label>
          <input
            type="checkbox"
            class="input-form-check-input"
            v-model="application_checklist_copy_of_current_OHSC"
          />
          Copy of your current OHSC
        </label>
        <label>
          <input
            type="checkbox"
            class="input-form-check-input"
            v-model="application_checklist_attached_relevant_employment"
          />
          Attached relevant employment documentation
        </label>
        <label>
          <input
            type="checkbox"
            class="input-form-check-input"
            v-model="application_checklist_read_and_signed_declaration"
          />
          Read and signed the declaration
        </label>
        <label>
          <input
            type="checkbox"
            class="input-form-check-input"
            v-model="
              application_checklist_attached_certified_english_proficiency
            "
          />
          Attached certified true copies of your English Proficiency
        </label>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    return {
      application_checklist_completed_all_sections: false,
      application_checklist_attached_certified_visa: false,
      application_checklist_attached_certified_passport: false,
      application_checklist_attached_certified_qualifications: false,
      application_checklist_copy_of_current_OHSC: false,
      application_checklist_attached_relevant_employment: false,
      application_checklist_read_and_signed_declaration: false,
      application_checklist_attached_certified_english_proficiency: false,
    };
  },
};
</script>

<style scoped>
label {
  padding: 5px 0 !important;
}
</style>
