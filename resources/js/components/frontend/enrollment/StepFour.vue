<template>
  <div class="card">
    <div class="card-body">
      <div class="form-group">
        <p>
          <strong>Employment</strong>
        </p>

        <div class="col-md-6">
          <label for="employmentStatus"
            >Which of the following best describes your current employment
            status?</label
          >
          <select
            name=""
            id="employmentStatus"
            class="form-control form-control-sm"
          >
            <option value="" selected disabled>
              Please click here to select
            </option>
            <option value="Full time employee">Full time employee</option>
            <option value="Unemployed- seeking full time work">
              Unemployed- seeking full time work
            </option>
            <option value="Self-employed – not employing others">
              Self-employed – not employing others
            </option>
            <option value="Employed – unpaid worker in a family business">
              Employed – unpaid worker in a family business
            </option>
            <option value="Part time employee">Part time employee</option>
            <option value="Unemployed- seeking part time work">
              Unemployed- seeking part time work
            </option>
            <option value="Not employed – not looking for work">
              Not employed – not looking for work
            </option>
            <option value="Employer">Employer</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <p>
          <strong>Privacy Notice</strong>
        </p>
        <p>
          Underthe Data Provision Requirements 2012, Institute of Businessand
          Management(Victoria) is required to collect personal information about
          you and to disclose that personal information to the National Centre
          for Vocational Education Research Ltd (NCVER).
        </p>
        <p>
          Your personal information (including the personal information
          contained on this enrolment form and your training activity data) may
          be used or disclosed by institute for statistical, regulatory and
          research purposes. Institute of Business and Management (Victoria) may
          disclose your personal information for these purposes to third
          parties, including:
        </p>

        <div class="ms-3 py-3">
          <ul class="decimal-list">
            <li>
              Employer – if you are enrolled in training paid by your employer;
            </li>
            <li>
              Commonwealth and State or Territory government departments and
              authorised agencies;
            </li>
            <li>NCVER;</li>
            <li>Organisations conducting student surveys; and</li>
            <li>
              Researchers. Personal information disclosed to NCVER may be used
              or disclosed for the following purposes:
            </li>
            <li>
              Issuing a VET Statement of Attainment or VET Qualification, and
              populating Authenticated VET Transcripts;
            </li>
            <li>
              facilitating statistics and research relating to education,
              including surveys;
            </li>
            <li>
              understanding how the VET market operates, for policy, workforce
              planning and consumer information; and
            </li>
            <li>
              administering VET, including program administration, regulation,
              monitoring and evaluation.
            </li>
          </ul>
        </div>

        <p>
          You may receive an NCVER student survey which may be administered by
          an NCVER employee, agent or third-party contractor. You may opt out of
          the survey at the time of being contacted.
        </p>

        <p>
          NCVER will collect, hold, use and disclose your personal information
          in accordance with the Privacy Act 1988 (Cth), the VET Data Policy and
          all NCVER policies and protocols (including those published on NCVER’s
          website at www.ncver.edu.au).
        </p>
      </div>

      <div class="form-group checkboxes">
        <p>
          <strong>Student Declaration and consent</strong>
        </p>
        <label>
          <input
            type="checkbox"
            class="input-form-check-input"
            value="I declare that the information I have provided to the best of my knowledge is true and correct."
          />&nbsp; I declare that the information I have provided to the best of
          my knowledge is true and correct.
        </label>

        <label>
          <input
            type="checkbox"
            class="input-form-check-input"
            value="I consent to the collection, use and disclosure of my personal information in accordance with the Privacy Notice above."
          />&nbsp; I consent to the collection, use and disclosure of my
          personal information in accordance with the Privacy Notice above.
        </label>

        <label>
          <input
            type="checkbox"
            class="input-form-check-input"
            value="I have read and understood Institute of Business and Management (Victoria)’s relevant policies and procedures and the terms and conditions of enrolment, fee payment, fee refunds, deferment, suspension or cancellation. I also understand that all pre-enrolment information can be requested by emailing info@ibm.vic.edu.au or calling 03 9478 3163."
          />&nbsp; I have read and understood Institute of Business and
          Management (Victoria)’s relevant policies and procedures and the terms
          and conditions of enrolment, fee payment, fee refunds, deferment,
          suspension or cancellation. I also understand that all pre-enrolment
          information can be requested by emailing info@ibm.vic.edu.au or
          calling 03 9478 3163.
        </label>

        <label>
          <input
            type="checkbox"
            class="input-form-check-input"
            value="I confirm that I am fully aware of the fees, cancellation and refund conditions and I agree to be a student at IBM (Victoria). I acknowledge that the provision of incorrect information or documentation or the withholding of information or documentation relating to my application may result in the cancellation of my enrolment."
          />&nbsp; I confirm that I am fully aware of the fees, cancellation and
          refund conditions and I agree to be a student at IBM (Victoria). I
          acknowledge that the provision of incorrect information or
          documentation or the withholding of information or documentation
          relating to my application may result in the cancellation of my
          enrolment.
        </label>
      </div>

      <div class="form-group">
        <p>
          <strong>Use of personal information</strong>
        </p>
        <label>
          <input
            type="checkbox"
            class="input-form-check-input"
            value="I understand that Institute of Business and Management (Victoria) may distribute my personal details as indicated in the statement"
          />&nbsp; I understand that Institute of Business and Management
          (Victoria) may distribute my personal details as indicated in the
          statement
        </label>
        <p>
          "Information is collected on this form and during your enrolment in
          order to meet our obligations under the ESOS Act and the National Code
          2018; to ensure student compliance with the conditions of their visas
          and their obligations under Australian immigration laws generally. The
          authority to collect this information is contained in the Education
          Services for Overseas Students Act 2000, the Education Services for
          Overseas Students Regulations 2001 and the National Code of Practice
          for Registration Authorities and Providers of Education and Training
          to Overseas Students 2018.
        </p>
        <p>
          Information collected about you on this form and during your enrolment
          can be provided, in certain circumstances, to the Australian
          Government and designated authorities. In other instances, information
          collected on this form or during your Enrolment can be disclosed
          without your consent where authorized or required by law."
        </p>
      </div>

      <div class="form-group row">
        <div class="col-md-6">
          <label for="student_name">Student name</label>
          <input
            type="text"
            id="student_name"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-6">
          <label for="student_date">Student date</label>
          <input
            type="date"
            id="student_date"
            class="form-control form-control-sm"
          />
        </div>
      </div>
    </div>
  </div>
</template>