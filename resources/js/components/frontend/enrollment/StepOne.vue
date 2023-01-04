<template>
  <div>
    <div class="card">
      <div class="card-body">
        <div class="card-title">
          <h5>Course Selection</h5>
        </div>
        <div class="form-group row">
          <div class="col-md-4" v-for="course in courses" :key="course.id">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                :id="course.title"
                @click="selectedCourses"
                :value="course.title"
              />
              <label class="form-check-label" :for="course.title">{{
                course.title
              }}</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-6">
            <label for="airport">Do you need Airport pickup?</label>
            <select id="airport" class="form-control form-control-sm">
              <option value="" selected disabled>Click here to select</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class="py-3"></div>

    <div class="card">
      <div class="card-body">
        <div class="card-title">
          <h5>Personal Details</h5>
        </div>
        <div class="form-group row">
          <div class="col-md-4">
            <label for="nameTitle">Title</label>
            <select id="nameTitle" class="form-control form-control-sm">
              <option value="" selected disabled>Click here to select</option>
              <option value="Mr">Mr</option>
              <option value="Mrs">Mrs</option>
              <option value="Ms">Ms</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="familyName">Family name</label>
            <input
              type="text"
              id="firstName"
              class="form-control form-control-sm"
            />
          </div>
          <div class="col-md-4">
            <label for="givenName">Given name</label>
            <input
              type="text"
              id="givenName"
              class="form-control form-control-sm"
            />
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-4">
            <label for="gender">Gender</label>
            <select id="gender" class="form-control form-control-sm">
              <option value="" selected disabled>Click here to select</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" class="form-control form-control-sm" />
          </div>
          <div class="col-md-4">
            <label for="nationality">Nationality</label>
            <input
              type="text"
              id="nationality"
              class="form-control form-control-sm"
            />
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-4">
            <label for="passportNumber">Passport No.</label>
            <input
              type="text"
              id="passportNumber"
              class="form-control form-control-sm"
            />
          </div>
          <div class="col-md-4">
            <label for="passportExp">Expiry Date(Passport)</label>
            <input
              type="date"
              id="passportExp"
              class="form-control form-control-sm"
            />
          </div>
          <div class="col-md-4">
            <label for="visaType">Visa type</label>
            <input
              type="text"
              id="visaType"
              class="form-control form-control-sm"
            />
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-4">
            <label for="visaSubclass">Visa subclass</label>
            <input
              type="text"
              id="visaSubclass"
              class="form-control form-control-sm"
            />
          </div>
          <div class="col-md-4">
            <label for="visaNumber">Visa number</label>
            <input
              type="text"
              id="visaNumber"
              class="form-control form-control-sm"
            />
          </div>
          <div class="col-md-4">
            <label for="visaExp">Expiry Date(visa)</label>
            <input
              type="date"
              id="visaExp"
              class="form-control form-control-sm"
            />
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-4">
            <label for="usi"
              >Do you have a Unique Student Identifier (USI)?</label
            >
            <select id="usi" class="form-control form-control-sm">
              <option value="" selected disabled>Click here to select</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <p>
            <strong
              >USI verified by Institute of Business and Management
              (Victoria)</strong
            >
          </p>
          <div class="col-md-4">
            <label for="staffName">Staff name</label>
            <input
              type="text"
              id="staffName"
              class="form-control form-control-sm"
            />
          </div>
          <div class="col-md-4">
            <label for="staffSignature">Signature</label>
            <input
              type="text"
              id="staffSignature"
              class="form-control form-control-sm"
            />
          </div>
          <div class="col-md-4">
            <label for="staffSignatureDate">Date(visa)</label>
            <input
              type="date"
              id="staffSignatureDate"
              class="form-control form-control-sm"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import path from "../../../src/global-config/mixin/path-solution";
export default {
  mixins: [path],
  data() {
    return {
      courses: [],
      getSelectedCourses: [],
    };
  },
  created() {
    this.getCourses();
  },
  methods: {
    getCourses() {
      axios.get(this.base_url + "/api/get-course").then((res) => {
        console.log(res.data.data);
        this.courses = res.data.data;
      });
    },

    selectedCourses(e) {
      let index = this.getSelectedCourses.indexOf(e.target.value);
      if (e.target.checked) {
        this.getSelectedCourses.push(e.target.value);
      } else if (index !== -1) {
        this.getSelectedCourses.splice(index, 1);
      }
    },

    onFormSubmitHandler(e) {
      const items = Object.fromEntries(new FormData(e.target).entries());
      console.log(this.getSelectedCourses);
    },
  },
};
</script>