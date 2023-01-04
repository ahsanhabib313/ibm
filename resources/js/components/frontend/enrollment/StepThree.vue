<template>
  <div class="card">
    <div class="card-body">
      <div class="card-title">
        <h5>Qualifications & Achivements</h5>
      </div>
      <div class="form-group row">
        <p>
          <strong>English Language Proficiency</strong>
        </p>

        <div class="col-md-4">
          <label for="assesmentType">Assessment Type</label>
          <select id="assesmentType" class="form-control form-control-sm">
            <option value="" selected disabled>
              Please click here to select
            </option>
            <option value="ielts">IELTS</option>
            <option value="pte">PTE</option>
            <option value="toefl">TOEFL</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="assesmentScore"> Score achieved</label>
          <input
            type="number"
            id="assesmentScore"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="assesmentType"> Date</label>
          <input
            type="date"
            id="assesmentDate"
            class="form-control form-control-sm"
          />
        </div>
      </div>
      <div class="form-group">
        <label for="assesmentNotRequired">
          <input
            type="checkbox"
            id="assesmentNotRequired"
            class="input-form-check-input"
          />
          &nbsp; Not Required. I am from Level I country. (You will be required
          to undertake Placement Assessment if you are not fromthe list of
          exempted countries. Refer Entry requirement policy)
        </label>
      </div>
      <div class="form-group row">
        <p>
          <strong>Previous Qualification Achieved</strong>
        </p>

        <div class="col-md-6">
          <label for="previousQualificationOne"
            >Have you successfully completed any of the following qualifications
            in Australia or hold any recognized overseas qualification?</label
          >
          <select
            id="previousQualificationOne"
            class="form-control form-control-sm"
          >
            <option value="" selected disabled>
              Please click here to select
            </option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="previousQualificationTwo">
            In case of overseas qualification, has the qualification been skill
            assessed in <br />
            Australia?</label
          >
          <select
            id="previousQualificationTwo"
            class="form-control form-control-sm"
          >
            <option value="" selected disabled>
              Please click here to select
            </option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <p>
          <strong>Most recent or current Qualifications</strong>
        </p>
        <label for="nameOfQualification">Name of qualification</label>
        <input
          type="text"
          class="form-control form-control-sm"
          id="nameOfQualification"
        />
      </div>
      <div class="form-group row">
        <div class="col-md-4">
          <label for="qualificationSchool">School / Institution</label>
          <input
            type="text"
            id="qualificationSchool"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="qualificationCountry">Country</label>
          <input
            type="text"
            id="qualificationCountry"
            class="form-control form-control-sm"
          />
        </div>
        <div class="col-md-4">
          <label for="qualificationCompletedYear"
            >Year was/to be completed</label
          >
          <input
            type="text"
            id="qualificationCompletedYear"
            class="form-control form-control-sm"
          />
        </div>
      </div>
      <div class="form-group row">
        <p>
          <strong>Recognition of Prior Learning/ Credit Transfer</strong>
        </p>
        <div class="col-md-6">
          <label for="applyForRPLOrCreditTransfer"
            >Do you want to apply for RPL/Credit Transfer?
          </label>
          <select
            id="applyForRPLOrCreditTransfer"
            class="form-control form-control-sm"
          >
            <option value="" selected disabled>
              Please click here to select
            </option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
          <p :style="{ 'font-size': '0.75rem', 'text-align': 'justify' }">
            <small>
              If Yes, you must attach certified translated (English) copies of
              your supporting documents (e.g. employment letter,position
              descriptions, Statement of Attainment, etc.). so that Institute of
              Business and Management (Victoria) can assessyour eligibility for
              RPL/Credit TransferComplete RPL/CT form available at our reception
              and website.
            </small>
          </p>
        </div>
        <div class="col-md-6">
          <label for="applyForRPLOrCreditTransfer"
            >Reason for Study Which of the following best describes your reason
            for undertaking this course?
          </label>
          <select
            id="applyForRPLOrCreditTransfer"
            class="form-control form-control-sm"
          >
            <option value="" selected disabled>
              Please click here to select
            </option>
            <option value="To get a job">To get a job</option>
            <option value="Required as part of my job">
              Required as part of my job
            </option>
            <option value="To start my own business">
              To start my own business
            </option>
            <option value="To get a better job or promotion">
              To get a better job or promotion
            </option>
            <option value="To start a new career in a different field">
              To start a new career in a different field
            </option>
            <option value="To gain new skill">To gain new skill</option>
            <option value="To gain knowledge in another course">
              To gain knowledge in another course
            </option>
            <option value="For personal interest or self-development">
              For personal interest or self-development
            </option>
            <option value="Others">Others</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <p>
          <strong>Special Needs</strong>
        </p>
        <div class="col-md-4">
          <label for="specialNeedsOne"
            >Do you need any special support such as Language, Literacy and
            Numeracy?</label
          >
          <select id="specialNeedsOne" class="form-control form-control-sm">
            <option value="" selected disabled>
              Please click here to select
            </option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="specialNeedsTwo"
            >Do you suffer from any physical / mental disability that may affect
            your participation in the course?
          </label>
          <select id="specialNeedsTwo" class="form-control form-control-sm">
            <option value="" selected disabled>
              Please click here to select
            </option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="specialNeedsThree"> Any Other Special Need? </label>
          <br /><br />
          <select id="specialNeedsThree" class="form-control form-control-sm">
            <option value="" selected disabled>
              Please click here to select
            </option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</template>