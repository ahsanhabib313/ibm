<template>
  <div class="card">
    <div class="card-body">
      <div class="card-title">
        <h5>Contact Details</h5>
      </div>
      <div class="form-group">
        <p>
          <strong>Residential Address (Home Country)</strong>
        </p>
        <label for="homeCountryAddress">Address</label>
        <input
          type="text"
          id="homeCountryAddress"
          class="form-control form-control sm"
        />
      </div>
      <div class="form-group row">
        <div class="col-md-4">
          <label for="homeCountry">Country</label>
          <input
            type="text"
            id="homeCountry"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="homePhone">Phone</label>
          <input
            type="text"
            id="homePhone"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="homePhone">Email</label>
          <input
            type="text"
            id="homeEmail"
            class="form-control form-control-sm"
          />
        </div>
      </div>
      <div class="form-group row">
        <p>
          <strong>Residential Address(Australia)</strong>
        </p>
        <div class="col-md-4">
          <label for="auBuildingPropertyName">Building/Property Name</label>
          <input
            type="text"
            id="auBuildingPropertyName"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="auFlatUnitDetails">Flat/Unit Details</label>
          <input
            type="text"
            id="auFlatUnitDetails"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="auStreetNo">Street No</label>
          <input
            type="text"
            id="auStreetNo"
            class="form-control form-control-sm"
          />
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4">
          <label for="auStreetName">Street Name</label>
          <input
            type="text"
            id="auStreetName"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="auSuburb"> Suburb</label>
          <input
            type="text"
            id="auSuburb"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="auStateTerritory">State/Territory</label>
          <input
            type="text"
            id="auStateTerritory"
            class="form-control form-control-sm"
          />
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4">
          <label for="auPostCode"> Postcode</label>
          <input
            type="text"
            id="auPostCode"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="auPOBox"> PO Box or roadside delivery box</label>
          <input
            type="text"
            id="auPOBox"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="preferredContactMethod">Preferred Contact Method</label>
          <select
            class="form-control form-control-sm"
            id="preferredContactMethod"
          >
            <option value="" selected disabled>
              Please click here to select
            </option>
            <option value="email">Email</option>
            <option value="phone">Phone</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <p>
          <strong>Post Address (if different from residential Address) </strong>
        </p>
        <div class="col-md-4">
          <label for="postBuildingPropertyName">Building/Property Name</label>
          <input
            type="text"
            id="postBuildingPropertyName"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="postFlatUnitDetails">Flat/Unit Details</label>
          <input
            type="text"
            id="postFlatUnitDetails"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="postStreetNo">Street No</label>
          <input
            type="text"
            id="postStreetNo"
            class="form-control form-control-sm"
          />
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4">
          <label for="postStreetName">Street Name</label>
          <input
            type="text"
            id="postStreetName"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="postSuburb"> Suburb</label>
          <input
            type="text"
            id="postSuburb"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="postStateTerritory">State/Territory</label>
          <input
            type="text"
            id="postStateTerritory"
            class="form-control form-control-sm"
          />
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4">
          <label for="postPostCode"> Postcode</label>
          <input
            type="text"
            id="postPostCode"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="postPOBox"> PO Box or roadside delivery box</label>
          <input
            type="text"
            id="postPOBox"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="postPreferredContactMethod"
            >Preferred Contact Method</label
          >
          <select
            class="form-control form-control-sm"
            id="postPreferredContactMethod"
          >
            <option value="" selected disabled>
              Please click here to select
            </option>
            <option value="email">Email</option>
            <option value="phone">Phone</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <p>
          <strong>Emergency Contact in Australia or Home Country </strong>
        </p>
        <div class="col-md-4">
          <label for="emergencyContactName">Name</label>
          <input
            type="text"
            id="emergencyContactName"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="emergencyContactEmail">Email</label>
          <input
            type="text"
            id="emergencyContactEmail"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="emergencyContactRelationship">Relationship</label>
          <input
            type="text"
            id="emergencyContactRelationship"
            class="form-control form-control-sm"
          />
        </div>
      </div>
    </div>
  </div>
</template>