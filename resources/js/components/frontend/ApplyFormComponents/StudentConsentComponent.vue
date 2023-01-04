<template>
  <div>
    <h5 class="input-title">Student Declaration and consent</h5>

    <div class="form-group checkboxes">
      <label>
        <input
          type="checkbox"
          class="input-form-check-input"
          value="I declare that the information I have provided to the best of my knowledge is true and correct."
          v-model="consent_1"
        />
        I declare that the information I have provided to the best of my
        knowledge is true and correct.
      </label>

      <label>
        <input
          type="checkbox"
          class="input-form-check-input"
          v-model="consent_2"
          value="I consent to the collection, use and disclosure of my personal information in accordance with the Privacy Notice above."
        />
        I consent to the collection, use and disclosure of my personal
        information in accordance with the Privacy Notice above.
      </label>

      <label>
        <input
          type="checkbox"
          class="input-form-check-input"
          v-model="consent_3"
          value="I have read and understood Institute of Business and Management (Victoria)’s relevant policies and procedures and the terms and conditions of enrolment, fee payment, fee refunds, deferment, suspension or cancellation. I also understand that all pre-enrolment information can be requested by emailing info@ibm.vic.edu.au or calling 03 9478 3163."
        />
        I have read and understood Institute of Business and Management
        (Victoria)’s relevant policies and procedures and the terms and
        conditions of enrolment, fee payment, fee refunds, deferment, suspension
        or cancellation. I also understand that all pre-enrolment information
        can be requested by emailing info@ibm.vic.edu.au or calling 03 9478
        3163.
      </label>

      <label>
        <input
          type="checkbox"
          class="input-form-check-input"
          v-model="consent_4"
          value="I confirm that I am fully aware of the fees, cancellation and refund conditions and I agree to be a student at IBM (Victoria). I acknowledge that the provision of incorrect information or documentation or the withholding of information or documentation relating to my application may result in the cancellation of my enrolment."
        />
        I confirm that I am fully aware of the fees, cancellation and refund
        conditions and I agree to be a student at IBM (Victoria). I acknowledge
        that the provision of incorrect information or documentation or the
        withholding of information or documentation relating to my application
        may result in the cancellation of my enrolment.
      </label>
    </div>

    <h5 class="input-title">Use of personal information</h5>
    <div class="form-group">
      <label>
        <input
          type="checkbox"
          class="input-form-check-input"
          v-model="consent_5"
          value="I understand that Institute of Business and Management (Victoria) may distribute my personal details as indicated in the statement"
        />
        I understand that Institute of Business and Management (Victoria) may
        distribute my personal details as indicated in the statement
      </label>
    </div>

    <div class="form-group">
      <p>
        "Information is collected on this form and during your enrolment in
        order to meet our obligations under the ESOS Act and the National Code
        2018; to ensure student compliance with the conditions of their visas
        and their obligations under Australian immigration laws generally. The
        authority to collect this information is contained in the Education
        Services for Overseas Students Act 2000, the Education Services for
        Overseas Students Regulations 2001 and the National Code of Practice for
        Registration Authorities and Providers of Education and Training to
        Overseas Students 2018.
      </p>
      <p>
        Information collected about you on this form and during your enrolment
        can be provided, in certain circumstances, to the Australian Government
        and designated authorities. In other instances, information collected on
        this form or during your Enrolment can be disclosed without your consent
        where authorized or required by law."
      </p>
    </div>

    <div class="form-group">
      <label for="student_name" class="form-label">Student name</label>
      <input
        type="text"
        class="form-control"
        name="student_name"
        v-model="consent_student_name"
      />
    </div>

    <div class="row form-group">
      <div class="col-sm-6">
        <label for="student_signature" class="form-label"
          >Student signature</label
        >
        <input type="text" class="form-control" name="student_signature" />
      </div>
      <div class="col-sm-6">
        <label for="student_date" class="form-label">Student date</label>
        <input
          type="date"
          class="form-control"
          name="student_date"
          v-model="consent_student_date"
        />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      consent_1: false,
      consent_2: false,
      consent_3: false,
      consent_4: false,
      consent_5: false,
      consent_student_name: "",
      consent_student_date: "",
    };
  },
};
</script>

<style scoped>
.checkboxes label {
  padding: 5px 0;
}
</style>
