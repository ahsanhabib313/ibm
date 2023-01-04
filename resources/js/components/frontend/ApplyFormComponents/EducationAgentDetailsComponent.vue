 <template>
  <div>
    <h5 class="input-title">Education Agent Details (If applicable)</h5>

    <div class="form-group row">
      <div class="col-sm-6">
        <label class="form-label" for="agency_name">Agency name</label>
        <input
          type="text"
          class="form-control"
          placeholder="Agency name"
          v-model="agency_name"
        />
      </div>
      <div class="col-sm-6">
        <label class="form-label" for="agent_name">Agent name</label>
        <input
          type="text"
          class="form-control"
          placeholder="Agent name"
          v-model="agent_name"
        />
      </div>
    </div>

    <div class="form-group">
      <label for="email_id" class="form-label">Email id</label>
      <input
        type="text"
        class="form-control"
        placeholder="Email Id"
        v-model="agent_email"
      />
    </div>

    <div class="form-group">
      <label class="form-label"
        >Agent declaration (Please click all the circles to indicate your
        agreement)</label
      >

      <p>
        As the Education Agent of this student seeking to apply for enrolment at
        IBM (VIC), I confirm
      </p>

      <label>
        <input
          type="checkbox"
          class="input-form-check-input"
          v-model="declaration_1"
        />
        That I comply with the standards of the ESOS framework (including the
        Education Services for Overseas Students (ESOS) Act 2000 and the
        National Code of Practice for Providers of Education and Training to
        Overseas Students 2018
      </label>

      <label>
        <input
          type="checkbox"
          class="input-form-check-input"
          v-model="declaration_2"
        />
        That the information contained within this application form is accurate,
        and that the supporting documentation including, but not limited to the
        "certified copy" of the applicant's academic record is correct and has
        not been altered in any way.
      </label>

      <label>
        <input
          type="checkbox"
          class="input-form-check-input"
          v-model="declaration_3"
        />
        That I understand Institute of Business and Management (Victoria)
        expects Education Agents to act ethically in dealings with the Overseas
        Students and their families.
      </label>

      <label>
        <input
          type="checkbox"
          class="input-form-check-input"
          v-model="declaration_4"
        />
        That any Enrolment Fees paid to me by the student to support this
        application will be immediately transferred to Institute of Business and
        Management (Victoria) so that Institute can uphold its commitment to
        ESOS legislation with regards to enhancing the refund policy where
        appropriate.
      </label>

      <label>
        <input
          type="checkbox"
          class="input-form-check-input"
          v-model="declaration_5"
        />
        That I understand Institute of Business and Management (Victoria)
        expects Education Agents to ensure that each student applying for entry
        to Institute of Business and Management (Victoria) is familiar with the
        information contained in: The Application Form, Overseas Student
        Pre-Enrolment Information and the student Handbook.
      </label>

      <label>
        <input
          type="checkbox"
          class="input-form-check-input"
          v-model="declaration_6"
        />
        I confirm the student has signed this application form.
      </label>

      <label>
        <input
          type="checkbox"
          class="input-form-check-input"
          v-model="declaration_7"
        />
        I have provided the student’s personal email address and residential
        address, as disclosed to me by the studen
      </label>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      agency_name: "",
      agent_name: "",
      agent_email: "",
      declaration_1: false,
      declaration_2: false,
      declaration_3: false,
      declaration_4: false,
      declaration_5: false,
      declaration_6: false,
      declaration_7: false,
    };
  },
};
</script>

<style scoped>
label {
  padding: 5px 0 !important;
}
</style>
