<template>
  <div>
    <div class="card">
      <div class="card-body">
        <div class="form-group">
          <p>
            <strong>Application Checklist</strong>
          </p>
          <div class="row">
            <div class="col-md-6">
              <label>
                <input type="checkbox" class="input-form-check-input" />&nbsp;
                Completed all sections of this application
              </label>
            </div>
            <div class="col-md-6">
              <label>
                <input type="checkbox" class="input-form-check-input" />&nbsp;
                Attached certified true copies of your VISA
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label>
                <input type="checkbox" class="input-form-check-input" />&nbsp;
                Attached certified true copies of your Passport
              </label>
            </div>
            <div class="col-sm-6">
              <label>
                <input type="checkbox" class="input-form-check-input" />&nbsp;
                Attached certified true copies of your qualifications
              </label>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <label>
                <input type="checkbox" class="input-form-check-input" />&nbsp;
                Copy of your current OHSC
              </label>
            </div>
            <div class="col-md-6">
              <label>
                <input type="checkbox" class="input-form-check-input" />&nbsp;
                Attached relevant employment documentation
              </label>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <label>
                <input type="checkbox" class="input-form-check-input" />&nbsp;
                Read and signed the declaration
              </label>
            </div>
            <div class="col-sm-6">
              <label>
                <input type="checkbox" class="input-form-check-input" />&nbsp;
                Attached certified true copies of your English Proficiency
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="py-3"></div>

    <div class="card">
      <div class="card-body">
        <div class="form-group row">
          <p><strong> Education Agent Details (If applicable) </strong></p>
          <div class="col-md-4">
            <label for="agencyName">Agency name</label>
            <input
              type="text"
              id="agencyName"
              class="form-control form-control-sm"
            />
          </div>
          <div class="col-md-4">
            <label for="agentName">Agent name</label>
            <input
              type="text"
              id="agentName"
              class="form-control form-control-sm"
            />
          </div>
          <div class="col-md-4">
            <label for="agentEmail">Email</label>
            <input
              type="text"
              id="agentEmail"
              class="form-control form-control-sm"
            />
          </div>
        </div>

        <div class="form-group">
          <label class="form-label"
            >Agent declaration (Please click all the circles to indicate your
            agreement)</label
          >

          <p>
            As the Education Agent of this student seeking to apply for
            enrolment at IBM (VIC), I confirm
          </p>

          <label class="d-block">
            <input type="checkbox" class="input-form-check-input" />&nbsp; That
            I comply with the standards of the ESOS framework (including the
            Education Services for Overseas Students (ESOS) Act 2000 and the
            National Code of Practice for Providers of Education and Training to
            Overseas Students 2018
          </label>

          <label class="d-block">
            <input type="checkbox" class="input-form-check-input" />&nbsp; That
            the information contained within this application form is accurate,
            and that the supporting documentation including, but not limited to
            the "certified copy" of the applicant's academic record is correct
            and has not been altered in any way.
          </label>

          <label class="d-block">
            <input type="checkbox" class="input-form-check-input" />&nbsp; That
            I understand Institute of Business and Management (Victoria) expects
            Education Agents to act ethically in dealings with the Overseas
            Students and their families.
          </label>

          <label class="d-block">
            <input type="checkbox" class="input-form-check-input" />&nbsp; That
            any Enrolment Fees paid to me by the student to support this
            application will be immediately transferred to Institute of Business
            and Management (Victoria) so that Institute can uphold its
            commitment to ESOS legislation with regards to enhancing the refund
            policy where appropriate.
          </label>

          <label class="d-block">
            <input type="checkbox" class="input-form-check-input" />&nbsp; That
            I understand Institute of Business and Management (Victoria) expects
            Education Agents to ensure that each student applying for entry to
            Institute of Business and Management (Victoria) is familiar with the
            information contained in: The Application Form, Overseas Student
            Pre-Enrolment Information and the student Handbook.
          </label>

          <label class="d-block">
            <input type="checkbox" class="input-form-check-input" />&nbsp; I
            confirm the student has signed this application form.
          </label>

          <label class="d-block">
            <input type="checkbox" class="input-form-check-input" />&nbsp; I
            have provided the student’s personal email address and residential
            address, as disclosed to me by the studen
          </label>
        </div>
      </div>
    </div>
  </div>
</template>