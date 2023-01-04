<template>
  <div>
    <div>
      <h3 class="input-title">Contact Details</h3>
      <h5 class="input-title">Residential Address (Home Country)</h5>

      <div class="form-group">
        <label for="address" class="form-label">Address</label>
        <input
          type="text"
          name="address"
          class="form-control"
          placeholder="Address"
          v-model="contact_address"
        />
      </div>
      <div class="form-group">
        <label for="country" class="form-label">Country</label>
        <input
          type="text"
          name="country"
          class="form-control"
          placeholder="Country"
          v-model="contact_country"
        />
      </div>

      <div class="form-group row">
        <div class="col-sm-6">
          <label for="phone" class="form-label">Phone</label>
          <input
            type="text"
            name="phone"
            class="form-control"
            placeholder="Phone"
            v-model="contact_phone"
          />
        </div>
        <div class="col-sm-6">
          <label for="country" class="form-label">Email</label>
          <input
            type="text"
            name="email"
            class="form-control"
            placeholder="email"
            v-model="contact_email"
          />
        </div>
      </div>

      <h5 class="input-title">Residential Address(Australia)</h5>
      <div class="form-group">
        <label class="form-label" for="">Building/Property Name</label>
        <input
          type="text"
          class="form-control"
          placeholder="Building/Property Name"
          v-model="residential_building_name"
        />
      </div>
      <div class="row form-group">
        <div class="col-sm-6">
          <label class="form-label">Flat/Unit Details</label>
          <input
            type="text"
            class="form-control"
            placeholder="Flat/Unit Details"
            v-model="residential_flat_unit"
          />
        </div>

        <div class="col-sm-6">
          <label class="form-label">Street No</label>
          <input
            type="text"
            class="form-control"
            placeholder="Street No"
            v-model="residential_street_no"
          />
        </div>
      </div>

      <div class="row form-group">
        <div class="col-sm-6">
          <label class="form-label">Street Name</label>
          <input
            type="text"
            class="form-control"
            placeholder="Street Name"
            v-model="residential_street_name"
          />
        </div>

        <div class="col-sm-6">
          <label class="form-label">Suburb</label>
          <input
            type="text"
            class="form-control"
            placeholder="Suburb"
            v-model="residential_street_suburb"
          />
        </div>
      </div>

      <div class="row form-group">
        <div class="col-sm-6">
          <label class="form-label">State/Territory</label>
          <input
            type="text"
            class="form-control"
            placeholder="Street Name"
            v-model="residential_state"
          />
        </div>

        <div class="col-sm-6">
          <label class="form-label">Postcode</label>
          <input
            type="text"
            class="form-control"
            placeholder="Postcode"
            v-model="residential_post_code"
          />
        </div>
      </div>

      <div class="row form-group">
        <div class="col-sm-6">
          <label class="form-label">Mobile</label>
          <input
            type="text"
            class="form-control"
            placeholder="Mobile"
            v-model="residential_mobile"
          />
        </div>
        <div class="col-sm-6">
          <label class="form-label">Email</label>
          <input
            type="text"
            class="form-control"
            placeholder="Email"
            v-model="residential_email"
          />
        </div>
      </div>

      <h5 class="input-title">
        Post Address (if different from residential Address)
      </h5>
      <div class="form-group">
        <label class="form-label">Building/Property name</label>
        <input
          type="text"
          class="form-control"
          placeholder="Building/Property name"
          v-model="contact_post_building_name"
        />
      </div>
      <div class="row form-group">
        <div class="col-sm-6">
          <label class="form-label">Flat/Unit Details</label>
          <input
            type="text"
            class="form-control"
            placeholder="Flat/Unit Details"
            v-model="contact_post_flat_unit"
          />
        </div>

        <div class="col-sm-6">
          <label class="form-label">Street No</label>
          <input
            type="text"
            class="form-control"
            placeholder="Street No"
            v-model="contact_post_street_no"
          />
        </div>
      </div>

      <div class="row form-group">
        <div class="col-sm-6">
          <label class="form-label">Street Name</label>
          <input
            type="text"
            class="form-control"
            placeholder="Street Name"
            v-model="contact_post_street_name"
          />
        </div>

        <div class="col-sm-6">
          <label class="form-label">Suburb</label>
          <input
            type="text"
            class="form-control"
            placeholder="Suburb"
            v-model="contact_post_suburb"
          />
        </div>
      </div>

      <div class="row form-group">
        <div class="col-sm-6">
          <label class="form-label">State/Territory</label>
          <input
            type="text"
            class="form-control"
            placeholder="State/Territory"
            v-model="contact_post_state"
          />
        </div>

        <div class="col-sm-6">
          <label class="form-label">Postcode</label>
          <input
            type="text"
            class="form-control"
            placeholder="Postcode"
            v-model="contact_post_postcode"
          />
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">PO Box or roadside delivery box</label>
        <input
          type="text"
          class="form-control"
          placeholder="State/Territory"
          v-model="contact_post_po_box"
        />
      </div>

      <div class="form-group">
        <label class="form-label">Preferred Contact Method</label>
        <div>
          <label>
            <input
              type="radio"
              class="input-form-check-input"
              name="preferred_contact_method"
              value="email"
              v-model="contact_preferred_contact_method"
            />
            Email
          </label>
          <label>
            <input
              type="radio"
              class="input-form-check-input"
              name="preferred_contact_method"
              value="phone"
              v-model="contact_preferred_contact_method"
            />
            Phone
          </label>
        </div>
      </div>

      <h5 class="input-title">
        Emergency Contact in Australia or Home Country
      </h5>
      <div class="form-group">
        <label class="form-label" for="name">Name</label>
        <input
          type="text"
          class="form-control"
          placeholder="Name"
          v-model="contact_emergency_contact_name"
        />
      </div>
      <div class="form-group">
        <label class="form-label" for="name">Phone</label>
        <input
          type="text"
          class="form-control"
          placeholder="Phone"
          v-model="contact_emergency_contact_phone"
        />
      </div>
      <div class="form-group">
        <label class="form-label" for="name">Relationship</label>
        <input
          type="text"
          class="form-control"
          placeholder="Relationship"
          v-model="contact_emergency_contact_relationship"
        />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      contact_address: "",
      residential_building_name: "",
      residential_flat_unit: "",
      residential_street_no: "",
      residential_street_name: "",
      residential_street_suburb: "",
      residential_state: "",
      residential_post_code: "",
      residential_mobile: "",
      residential_email: "",
      contact_post_building_name: "",
      contact_post_flat_unit: "",
      contact_post_street_no: "",
      contact_post_street_name: "",
      contact_post_suburb: "",
      contact_post_state: "",
      contact_post_postcode: "",
      contact_post_po_box: "",
      contact_preferred_contact_method: "",
      contact_emergency_contact_name: "",
      contact_emergency_contact_phone: "",
      contact_emergency_contact_relationship: "",
    };
  },
};
</script>
