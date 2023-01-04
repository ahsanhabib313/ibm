<template>
  <div>
    <div>
      <h5 class="input-label">Overseas health cover</h5>

      <label class="form-label"
        >Do you have Overseas Health Cover (OSHC)?</label
      >

      <div>
        <label>
          <input
            type="radio"
            class="input-form-check-input"
            name="overseas_health_cover"
            v-model="formData.overseas_health_cover"
            value="yes"
          />
          Yes
        </label>
        <label class="ms-4">
          <input
            type="radio"
            class="input-form-check-input"
            name="overseas_health_cover"
            v-model="formData.overseas_health_cover"
            value="no"
          />
          No
        </label>
      </div>

      <div v-if="formData.overseas_health_cover == 'yes'">
        <label class="form-label">OSHC Provider</label>
        <input type="text" class="form-control" />
      </div>
      <div v-else-if="formData.overseas_health_cover == 'no'">
        <label class="form-label">I require</label>
        <label>
          <input
            type="radio"
            class="input-form-check-input"
            v-model="formData.overseas_health_cover_type"
            value="single"
          />
          Single cover
        </label>
        <label>
          <input
            type="radio"
            class="input-form-check-input"
            v-model="formData.overseas_health_cover_type"
            value="family"
          />
          Family cover
        </label>
      </div>

      <div
        v-if="
          formData.overseas_health_cover_type == 'family' &&
          formData.overseas_health_cover == 'no'
        "
      >
        <label class="form-label">Name(s) of the family member(s)</label>
        <input
          type="text"
          class="form-control"
          v-model="formData.overseas_health_cover_family_cover_names"
        />
      </div>

      <div class="row form-group">
        <div class="col-sm-6">
          <label class="form-label">Date of Birth: (DD/MM/YYYY)</label>
          <input type="date" class="form-control" />
        </div>
        <div class="col-sm-6">
          <label class="form-label">Gender</label>
          <div>
            <label>
              <input type="radio" class="input-form-check-input" value="male" />
              Male
            </label>
            <label>
              <input
                type="radio"
                class="input-form-check-input"
                value="female"
              />
              Female
            </label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="form-label"
          >Are you currently studying in Australia?</label
        >
        <div>
          <label>
            <input type="radio" class="input-form-check-input" />
            Yes
          </label>
          <label class="ms-3">
            <input type="radio" class="input-form-check-input" />
            No
          </label>
        </div>
      </div>

      <div class="form-group">
        <label for="institute_name" class="form-label">Name of institute</label>
        <input type="text" class="form-control" name="institute_name" />
      </div>

      <div class="form-group">
        <label class="form-label"
          >Are you Transferring from another education provider in
          Australia?</label
        >
        <div>
          <label>
            <input type="radio" class="input-form-check-input" />
            Yes
          </label>
          <label class="ms-3">
            <input type="radio" class="input-form-check-input" />
            No
          </label>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      overseas_health_cover: null,
      overseas_health_cover_type: null,
      overseas_health_cover_family_cover_names: null,
    };
  },
};
</script>
