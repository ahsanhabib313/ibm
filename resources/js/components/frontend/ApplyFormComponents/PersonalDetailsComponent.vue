<template>
  <div>
    <div class="form-group">
      <h5 class="input-title">Personal details</h5>

      <label for="title" class="form-label">Title</label>
      <div>
        <label>
          <input
            type="radio"
            name="title"
            class="input-form-check-input"
            value="Mr."
            v-model="title"
          />
          Mr.
        </label>
        <label class="ms-4">
          <input
            type="radio"
            name="title"
            class="input-form-check-input"
            value="Mrs."
            v-model="title"
          />
          Mrs.
        </label>
        <label class="ms-4">
          <input
            type="radio"
            name="title"
            class="input-form-check-input"
            value="Ms."
            v-model="title"
          />
          Ms.
        </label>
        <label class="ms-4">
          <input
            type="radio"
            name="title"
            class="input-form-check-input"
            value="Other"
            v-model="title"
          />
          Other
        </label>
      </div>
    </div>

    <div class="form-group">
      <label for="gender" class="form-label">Gender</label>
      <div>
        <label>
          <input
            type="radio"
            name="details_gender"
            class="input-form-check-input"
            v-model="gender"
            value="Male"
          />
          Male
        </label>
        <label class="ms-4">
          <input
            type="radio"
            name="details_gender"
            class="input-form-check-input"
            v-model="gender"
            value="Female"
          />
          Female
        </label>
        <label class="ms-4">
          <input
            type="radio"
            name="details_gender"
            class="input-form-check-input"
            v-model="gender"
            value="Other"
          />
          Other
        </label>
      </div>
    </div>

    <div class="form-group">
      <label for="family_name" class="form-label">Family name*</label>
      <input
        type="text"
        class="form-control"
        placeholder="Family name"
        v-model="family_name"
        required
      />
    </div>

    <div class="form-group">
      <label for="family_name" class="form-label">Given name*</label>
      <input
        type="text"
        class="form-control"
        placeholder="Given name"
        v-model="given_name"
        required
      />
    </div>

    <div>
      <h5 class="input-title">Place and country of birth</h5>

      <div class="row form-group">
        <div class="col-sm-6">
          <label for="date_of_birth" class="form-label">Date of birth</label>
          <input
            type="date"
            class="form-control"
            name="date_of_birth"
            placeholder="Date of birth"
            v-model="date_of_birth"
          />
        </div>
        <div class="col-sm-6">
          <label for="nationality" class="form-label">Nationality</label>
          <input
            type="text"
            class="form-control"
            name="nationality"
            placeholder="Nationality..."
            v-model="nationality"
          />
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 form-group">
          <label for="passport_no" class="form-label">Passport No.</label>
          <input
            type="text"
            class="form-control"
            name="passport_no"
            placeholder="Passport No."
            v-model="passport_no"
          />
        </div>

        <div class="col-sm-6 form-group">
          <label for="expiry_date" class="form-label">Expiry Date</label>
          <input
            type="date"
            class="form-control"
            name="expiry_date"
            v-model="expiry_date"
          />
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 form-group">
          <label for="visa_type" class="form-label">Visa type</label>
          <input
            type="text"
            class="form-control"
            name="visa_type"
            placeholder="Visa type"
            v-model="visa_type"
          />
        </div>

        <div class="col-sm-6 form-group">
          <label for="visa_subclass" class="form-label">Visa subclass</label>
          <input
            type="text"
            class="form-control"
            name="visa_subclass"
            placeholder="Visa subclass"
            v-model="visa_subclass"
          />
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 form-group">
          <label for="visa_number" class="form-label">Visa number</label>
          <input
            type="text"
            class="form-control"
            name="visa_number"
            placeholder="Visa number"
            v-model="visa_number"
          />
        </div>

        <div class="col-sm-6 form-group">
          <label for="visa_expiry_date" class="form-label"
            >Visa expiry date</label
          >
          <input
            type="date"
            class="form-control"
            name="visa_expiry_date"
            placeholder="Visa expiry date"
            v-model="visa_expiry_date"
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
      title: "",
      gender: "",
      family_name: "",
      given_name: "",
      date_of_birth: "",
      nationality: "",
      passport_no: "",
      expiry_date: "",
      visa_type: "",
      visa_subclass: "",
      visa_number: "",
      visa_expiry_date: "",
    };
  },
};
</script>
