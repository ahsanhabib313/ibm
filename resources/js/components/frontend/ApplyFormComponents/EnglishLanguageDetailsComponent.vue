<template>
  <div>
    <h5 class="input-title">English Language Proficiency</h5>

    <div class="form-group">
      <label class="form-label">Assessment Type</label>
      <div>
        <label>
          <input
            type="radio"
            name="assessment_type"
            class="input-form-check-input"
            v-model="english_language_proficiency_assessment_type"
            value="IELTS"
          />
          IELTS
        </label>
        <label class="ms-3">
          <input
            type="radio"
            name="assessment_type"
            v-model="english_language_proficiency_assessment_type"
            class="input-form-check-input"
            value="PTE"
          />
          PTE
        </label>
        <label class="ms-3">
          <input
            type="radio"
            name="assessment_type"
            class="input-form-check-input"
            v-model="english_language_proficiency_assessment_type"
            value="TOEFL"
          />
          TOEFL
        </label>
        <label class="ms-3">
          <input
            type="radio"
            name="assessment_type"
            class="input-form-check-input"
            v-model="english_language_proficiency_assessment_type"
            value="Others"
          />
          Others
        </label>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-6">
        <label for="score_achieved">Score achieved</label>
        <input
          type="text"
          class="form-control"
          name="score_achieved"
          v-model="english_language_proficiency_score_achieved"
        />
      </div>
      <div class="col-sm-6">
        <label for="score_date">Date</label>
        <input
          type="date"
          class="form-control"
          name="score_date"
          v-model="english_language_proficiency_score_date"
        />
      </div>
    </div>

    <div class="form-group">
      <label>
        <input
          type="checkbox"
          class="input-form-check-input"
          v-model="english_language_proficiency_level_1_country"
        />
        Not Required. I am from Level I country. (You will be required to
        undertake Placement Assessment if you are not fromthe list of exempted
        countries. Refer Entry requirement policy)
      </label>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      english_language_proficiency_assessment_type: "",
      english_language_proficiency_score_achieved: "",
      english_language_proficiency_score_date: "",
      english_language_proficiency_level_1_country: false,
    };
  },
};
</script>
