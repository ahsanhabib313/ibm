<template>
  <div class="container mt-5">
    <h1 class="pb-5 text-center">Application/Enrollment Form</h1>

    <form @submit.prevent="formSubmitHandler" name="submit-to-google-sheet">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h5>Course Selection</h5>
          </div>
          <div class="form-group row">
            <label for="course">01. Select your preferred courses</label>
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
              <label for="airport">02. Do you need Airport pickup?</label>
              <select
                id="airport"
                name="Qustion02"
                class="form-control form-control-sm"
              >
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
              <label for="nameTitle">03. Title</label>
              <select
                id="nameTitle"
                name="Qustion03"
                class="form-control form-control-sm"
              >
                <option value="" selected disabled>Click here to select</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Ms">Ms</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="familyName">04. Family name</label>
              <input
                type="text"
                id="firstName"
                name="Qustion04"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="givenName">05. Given name</label>
              <input
                type="text"
                id="givenName"
                name="Qustion05"
                class="form-control form-control-sm"
              />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label for="gender">06. Gender</label>
              <select
                id="gender"
                name="Qustion06"
                class="form-control form-control-sm"
              >
                <option value="" selected disabled>Click here to select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="dob">07. Date of Birth</label>
              <input
                type="date"
                id="dob"
                name="Qustion07"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="nationality">08. Nationality</label>
              <input
                type="text"
                id="nationality"
                name="Qustion08"
                class="form-control form-control-sm"
              />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label for="passportNumber">09. Passport No.</label>
              <input
                type="text"
                id="passportNumber"
                name="Qustion09"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="passportExp">10. Expiry Date(Passport)</label>
              <input
                type="date"
                id="passportExp"
                name="Qustion10"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="visaType">11. Visa type</label>
              <input
                type="text"
                id="visaType"
                name="Qustion11"
                class="form-control form-control-sm"
              />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label for="visaSubclass">12. Visa subclass</label>
              <input
                type="text"
                id="visaSubclass"
                name="Qustion12"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="visaNumber">13. Visa number</label>
              <input
                type="text"
                id="visaNumber"
                name="Qustion13"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="visaExp">14. Expiry Date(visa)</label>
              <input
                type="date"
                id="visaExp"
                name="Qustion14"
                class="form-control form-control-sm"
              />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label for="usi"
                >15. Do you have a Unique Student Identifier (USI)?</label
              >
              <select
                id="usi"
                name="Qustion15"
                class="form-control form-control-sm"
              >
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
              <label for="staffName">16. Staff name</label>
              <input
                type="text"
                id="staffName"
                name="Qustion16"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="staffSignature">17. Signature</label>
              <input
                type="text"
                id="staffSignature"
                name="Qustion17"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="staffSignatureDate">18. Date(visa)</label>
              <input
                type="date"
                id="staffSignatureDate"
                name="Qustion18"
                class="form-control form-control-sm"
              />
            </div>
          </div>
        </div>
      </div>

      <div class="py-3"></div>

      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h5>Contact Details</h5>
          </div>
          <div class="form-group">
            <p>
              <strong>19. Residential Address (Home Country)</strong>
            </p>
            <label for="homeCountryAddress">Address</label>
            <input
              type="text"
              id="homeCountryAddress"
              name="Qustion19"
              class="form-control form-control sm"
            />
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label for="homeCountry">20. Country</label>
              <input
                type="text"
                id="homeCountry"
                name="Qustion20"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="homePhone">21. Phone</label>
              <input
                type="text"
                id="homePhone"
                name="Qustion21"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="homePhone">22. Email</label>
              <input
                type="text"
                id="homeEmail"
                name="Qustion22"
                class="form-control form-control-sm"
              />
            </div>
          </div>
          <div class="form-group row">
            <p>
              <strong>Residential Address(Australia)</strong>
            </p>
            <div class="col-md-4">
              <label for="auBuildingPropertyName"
                >23. Building/Property Name</label
              >
              <input
                type="text"
                id="auBuildingPropertyName"
                name="Qustion23"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="auFlatUnitDetails">24. Flat/Unit Details</label>
              <input
                type="text"
                id="auFlatUnitDetails"
                name="Qustion24"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="auStreetNo">25. Street No</label>
              <input
                type="text"
                id="auStreetNo"
                name="Qustion25"
                class="form-control form-control-sm"
              />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label for="auStreetName">26. Street Name</label>
              <input
                type="text"
                id="auStreetName"
                name="Qustion26"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="auSuburb">27. Suburb</label>
              <input
                type="text"
                id="auSuburb"
                name="Qustion27"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="auStateTerritory">28. State/Territory</label>
              <input
                type="text"
                id="auStateTerritory"
                name="Qustion28"
                class="form-control form-control-sm"
              />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label for="auPostCode">29. Postcode</label>
              <input
                type="text"
                id="auPostCode"
                name="Qustion29"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="auPOBox">30. PO Box or roadside delivery box</label>
              <input
                type="text"
                id="auPOBox"
                name="Qustion30"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="preferredContactMethod"
                >31. Preferred Contact Method</label
              >
              <select
                class="form-control form-control-sm"
                id="preferredContactMethod"
                name="Qustion31"
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
              <strong
                >Post Address (if different from residential Address)
              </strong>
            </p>
            <div class="col-md-4">
              <label for="postBuildingPropertyName"
                >32. Building/Property Name</label
              >
              <input
                type="text"
                id="postBuildingPropertyName"
                name="Qustion32"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="postFlatUnitDetails">33. Flat/Unit Details</label>
              <input
                type="text"
                id="postFlatUnitDetails"
                name="Qustion33"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="postStreetNo">34. Street No</label>
              <input
                type="text"
                id="postStreetNo"
                name="Qustion34"
                class="form-control form-control-sm"
              />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label for="postStreetName">35. Street Name</label>
              <input
                type="text"
                id="postStreetName"
                name="Qustion35"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="postSuburb">36. Suburb</label>
              <input
                type="text"
                id="postSuburb"
                name="Qustion36"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="postStateTerritory">37. State/Territory</label>
              <input
                type="text"
                id="postStateTerritory"
                name="Qustion37"
                class="form-control form-control-sm"
              />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label for="postPostCode">38. Postcode</label>
              <input
                type="text"
                id="postPostCode"
                name="Qustion38"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="postPOBox">39. PO Box or roadside delivery box</label>
              <input
                type="text"
                id="postPOBox"
                name="Qustion39"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="postPreferredContactMethod"
                >40. Preferred Contact Method</label
              >
              <select
                class="form-control form-control-sm"
                id="postPreferredContactMethod"
                name="Qustion40"
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
              <label for="emergencyContactName">41. Name</label>
              <input
                type="text"
                id="emergencyContactName"
                name="Qustion41"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="emergencyContactEmail">42. Email</label>
              <input
                type="text"
                id="emergencyContactEmail"
                name="Qustion42"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="emergencyContactRelationship">43. Relationship</label>
              <input
                type="text"
                id="emergencyContactRelationship"
                name="Qustion43"
                class="form-control form-control-sm"
              />
            </div>
          </div>
        </div>
      </div>

      <div class="py-3"></div>

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
              <label for="assesmentType">44. Assessment Type</label>
              <select
                id="assesmentType"
                name="Qustion44"
                class="form-control form-control-sm"
              >
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
              <label for="assesmentScore">45. Score achieved</label>
              <input
                type="number"
                id="assesmentScore"
                name="Qustion45"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="assesmentDate">46. Date</label>
              <input
                type="date"
                id="assesmentDate"
                name="Qustion46"
                class="form-control form-control-sm"
              />
            </div>
          </div>
          <div class="form-group">
            <label for="assesmentNotRequired">
              <input
                type="checkbox"
                id="assesmentNotRequired"
                name="Qustion47"
                class="input-form-check-input"
              />
              &nbsp; 47. Not Required. I am from Level I country. (You will be
              required to undertake Placement Assessment if you are not fromthe
              list of exempted countries. Refer Entry requirement policy)
            </label>
          </div>
          <div class="form-group row">
            <p>
              <strong>Previous Qualification Achieved</strong>
            </p>

            <div class="col-md-6">
              <label for="previousQualificationOne"
                >48. Have you successfully completed any of the following
                qualifications in Australia or hold any recognized overseas
                qualification?</label
              >
              <select
                id="previousQualificationOne"
                name="Qustion48"
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
                49. In case of overseas qualification, has the qualification
                been skill assessed in <br />
                Australia?</label
              >
              <select
                id="previousQualificationTwo"
                name="Qustion49"
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
            <label for="nameOfQualification">50. Name of qualification</label>
            <input
              type="text"
              class="form-control form-control-sm"
              id="nameOfQualification"
              name="Qustion50"
            />
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label for="qualificationSchool">51. School / Institution</label>
              <input
                type="text"
                name="qualificationSchool"
                id="Qustion51"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="qualificationCountry">52. Country</label>
              <input
                type="text"
                id="qualificationCountry"
                name="Qustion52"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="qualificationCompletedYear"
                >53. Year was/to be completed</label
              >
              <input
                type="date"
                id="qualificationCompletedYear"
                name="Qustion53"
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
                >54. Do you want to apply for RPL/Credit Transfer?
              </label>
              <br /><br />
              <select
                id="applyForRPLOrCreditTransfer"
                name="Qustion54"
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
                  If Yes, you must attach certified translated (English) copies
                  of your supporting documents (e.g. employment letter,position
                  descriptions, Statement of Attainment, etc.). so that
                  Institute of Business and Management (Victoria) can assessyour
                  eligibility for RPL/Credit TransferComplete RPL/CT form
                  available at our reception and website.
                </small>
              </p>
            </div>
            <div class="col-md-6">
              <label for="applyForRPLOrCreditTransfer"
                >55. Reason for Study Which of the following best describes your
                reason for undertaking this course?
              </label>
              <select
                id="applyForRPLOrCreditTransfer"
                name="Qustion55"
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
                >56. Do you need any special support such as Language, Literacy
                and Numeracy?</label
              >
              <select
                id="specialNeedsOne"
                name="Qustion56"
                class="form-control form-control-sm"
              >
                <option value="" selected disabled>
                  Please click here to select
                </option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="specialNeedsTwo"
                >57. Do you suffer from any physical / mental disability that
                may affect your participation in the course?
              </label>
              <select
                id="specialNeedsTwo"
                name="Qustion57"
                class="form-control form-control-sm"
              >
                <option value="" selected disabled>
                  Please click here to select
                </option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="specialNeedsThree"
                >58. Any Other Special Need?
              </label>
              <br /><br />
              <select
                id="specialNeedsThree"
                name="Qustion58"
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
        </div>
      </div>

      <div class="py-3"></div>

      <div class="card">
        <div class="card-body">
          <div class="form-group">
            <p>
              <strong>Employment</strong>
            </p>

            <div class="col-md-6">
              <label for="employmentStatus"
                >59. Which of the following best describes your current
                employment status?</label
              >
              <select
                name="Qustion59"
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
              Underthe Data Provision Requirements 2012, Institute of
              Businessand Management(Victoria) is required to collect personal
              information about you and to disclose that personal information to
              the National Centre for Vocational Education Research Ltd (NCVER).
            </p>
            <p>
              Your personal information (including the personal information
              contained on this enrolment form and your training activity data)
              may be used or disclosed by institute for statistical, regulatory
              and research purposes. Institute of Business and Management
              (Victoria) may disclose your personal information for these
              purposes to third parties, including:
            </p>

            <div class="ms-3 py-3">
              <ul class="decimal-list">
                <li>
                  Employer – if you are enrolled in training paid by your
                  employer;
                </li>
                <li>
                  Commonwealth and State or Territory government departments and
                  authorised agencies;
                </li>
                <li>NCVER;</li>
                <li>Organisations conducting student surveys; and</li>
                <li>
                  Researchers. Personal information disclosed to NCVER may be
                  used or disclosed for the following purposes:
                </li>
                <li>
                  Issuing a VET Statement of Attainment or VET Qualification,
                  and populating Authenticated VET Transcripts;
                </li>
                <li>
                  facilitating statistics and research relating to education,
                  including surveys;
                </li>
                <li>
                  understanding how the VET market operates, for policy,
                  workforce planning and consumer information; and
                </li>
                <li>
                  administering VET, including program administration,
                  regulation, monitoring and evaluation.
                </li>
              </ul>
            </div>

            <p>
              You may receive an NCVER student survey which may be administered
              by an NCVER employee, agent or third-party contractor. You may opt
              out of the survey at the time of being contacted.
            </p>

            <p>
              NCVER will collect, hold, use and disclose your personal
              information in accordance with the Privacy Act 1988 (Cth), the VET
              Data Policy and all NCVER policies and protocols (including those
              published on NCVER’s website at www.ncver.edu.au).
            </p>
          </div>

          <div class="form-group checkboxes">
            <p>
              <strong>60. Student Declaration and consent</strong>
            </p>
            <label>
              <input
                type="checkbox"
                class="input-form-check-input"
                value="I declare that the information I have provided to the best of my knowledge is true and correct."
                @click="getDeclarations"
              />&nbsp; I declare that the information I have provided to the
              best of my knowledge is true and correct.
            </label>

            <label>
              <input
                type="checkbox"
                class="input-form-check-input"
                value="I consent to the collection, use and disclosure of my personal information in accordance with the Privacy Notice above."
                @click="getDeclarations"
              />&nbsp; I consent to the collection, use and disclosure of my
              personal information in accordance with the Privacy Notice above.
            </label>

            <label>
              <input
                type="checkbox"
                class="input-form-check-input"
                value="I have read and understood Institute of Business and Management (Victoria)’s relevant policies and procedures and the terms and conditions of enrolment, fee payment, fee refunds, deferment, suspension or cancellation. I also understand that all pre-enrolment information can be requested by emailing info@ibm.vic.edu.au or calling 03 9478 3163."
                @click="getDeclarations"
              />&nbsp; I have read and understood Institute of Business and
              Management (Victoria)’s relevant policies and procedures and the
              terms and conditions of enrolment, fee payment, fee refunds,
              deferment, suspension or cancellation. I also understand that all
              pre-enrolment information can be requested by emailing
              info@ibm.vic.edu.au or calling 03 9478 3163.
            </label>

            <label>
              <input
                type="checkbox"
                class="input-form-check-input"
                value="I confirm that I am fully aware of the fees, cancellation and refund conditions and I agree to be a student at IBM (Victoria). I acknowledge that the provision of incorrect information or documentation or the withholding of information or documentation relating to my application may result in the cancellation of my enrolment."
                @click="getDeclarations"
              />&nbsp; I confirm that I am fully aware of the fees, cancellation
              and refund conditions and I agree to be a student at IBM
              (Victoria). I acknowledge that the provision of incorrect
              information or documentation or the withholding of information or
              documentation relating to my application may result in the
              cancellation of my enrolment.
            </label>
          </div>

          <div class="form-group">
            <p>
              <strong>61. Use of personal information</strong>
            </p>
            <label>
              <input
                type="checkbox"
                class="input-form-check-input"
                name="Qustion61"
                value="I understand that Institute of Business and Management (Victoria) may distribute my personal details as indicated in the statement"
              />&nbsp; I understand that Institute of Business and Management
              (Victoria) may distribute my personal details as indicated in the
              statement
            </label>
            <p>
              "Information is collected on this form and during your enrolment
              in order to meet our obligations under the ESOS Act and the
              National Code 2018; to ensure student compliance with the
              conditions of their visas and their obligations under Australian
              immigration laws generally. The authority to collect this
              information is contained in the Education Services for Overseas
              Students Act 2000, the Education Services for Overseas Students
              Regulations 2001 and the National Code of Practice for
              Registration Authorities and Providers of Education and Training
              to Overseas Students 2018.
            </p>
            <p>
              Information collected about you on this form and during your
              enrolment can be provided, in certain circumstances, to the
              Australian Government and designated authorities. In other
              instances, information collected on this form or during your
              Enrolment can be disclosed without your consent where authorized
              or required by law."
            </p>
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <label for="studentName">62. Student name</label>
              <input
                type="text"
                id="studentName"
                name="Qustion62"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-6">
              <label for="studentDate">63. Student date</label>
              <input
                type="date"
                id="studentDate"
                name="Qustion63"
                class="form-control form-control-sm"
              />
            </div>
          </div>
        </div>
      </div>

      <div class="py-3"></div>

      <div class="card">
        <div class="card-body">
          <div class="form-group">
            <p>
              <strong>64. Application Checklist</strong>
            </p>
            <div class="row">
              <div class="col-md-6">
                <label>
                  <input
                    type="checkbox"
                    @click="getChecklist"
                    class="input-form-check-input"
                    value="Completed all sections of this application"
                  />&nbsp; Completed all sections of this application
                </label>
              </div>
              <div class="col-md-6">
                <label>
                  <input
                    type="checkbox"
                    @click="getChecklist"
                    class="input-form-check-input"
                    value="Attached certified true copies of your VISA"
                  />&nbsp; Attached certified true copies of your VISA
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>
                  <input
                    type="checkbox"
                    @click="getChecklist"
                    class="input-form-check-input"
                  />&nbsp; Attached certified true copies of your Passport
                </label>
              </div>
              <div class="col-sm-6">
                <label>
                  <input
                    type="checkbox"
                    @click="getChecklist"
                    class="input-form-check-input"
                    value="Attached certified true copies of your qualifications"
                  />&nbsp; Attached certified true copies of your qualifications
                </label>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label>
                  <input
                    type="checkbox"
                    @click="getChecklist"
                    class="input-form-check-input"
                    value="Copy of your current OHSC"
                  />&nbsp; Copy of your current OHSC
                </label>
              </div>
              <div class="col-md-6">
                <label>
                  <input
                    type="checkbox"
                    @click="getChecklist"
                    class="input-form-check-input"
                    value="Attached relevant employment documentation"
                  />&nbsp; Attached relevant employment documentation
                </label>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label>
                  <input
                    type="checkbox"
                    @click="getChecklist"
                    class="input-form-check-input"
                    value="Read and signed the declaration"
                  />&nbsp; Read and signed the declaration
                </label>
              </div>
              <div class="col-sm-6">
                <label>
                  <input
                    type="checkbox"
                    @click="getChecklist"
                    class="input-form-check-input"
                    value="Attached certified true copies of your English
                  Proficiency"
                  />&nbsp; Attached certified true copies of your English
                  Proficiency
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
              <label for="agencyName">65. Agency name</label>
              <input
                type="text"
                id="agencyName"
                name="Qustion65"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="agentName">66. Agent name</label>
              <input
                type="text"
                id="agentName"
                name="Qustion66"
                class="form-control form-control-sm"
              />
            </div>
            <div class="col-md-4">
              <label for="agentEmail">67. Email</label>
              <input
                type="text"
                id="agentEmail"
                name="Qustion67"
                class="form-control form-control-sm"
              />
            </div>
          </div>

          <div class="form-group">
            <label class="form-label"
              >68. Agent declaration (Please click all the circles to indicate
              your agreement)</label
            >

            <p>
              As the Education Agent of this student seeking to apply for
              enrolment at IBM (VIC), I confirm
            </p>

            <label class="d-block">
              <input
                type="checkbox"
                @click="getAgentDeclaration"
                class="input-form-check-input"
                value="That I comply with the standards of the ESOS framework
              (including the Education Services for Overseas Students (ESOS) Act
              2000 and the National Code of Practice for Providers of Education
              and Training to Overseas Students 2018"
              />&nbsp; That I comply with the standards of the ESOS framework
              (including the Education Services for Overseas Students (ESOS) Act
              2000 and the National Code of Practice for Providers of Education
              and Training to Overseas Students 2018
            </label>

            <label class="d-block">
              <input
                type="checkbox"
                @click="getAgentDeclaration"
                class="input-form-check-input"
                value="That the information
              contained within this application form is accurate, and that the
              supporting documentation including, but not limited to the
              certified copy of the applicant's academic record is correct and
              has not been altered in any way."
              />&nbsp; That the information contained within this application
              form is accurate, and that the supporting documentation including,
              but not limited to the "certified copy" of the applicant's
              academic record is correct and has not been altered in any way.
            </label>

            <label class="d-block">
              <input
                type="checkbox"
                @click="getAgentDeclaration"
                class="input-form-check-input"
                value="That I understand Institute of Business and Management
              (Victoria) expects Education Agents to act ethically in dealings
              with the Overseas Students and their families."
              />&nbsp; That I understand Institute of Business and Management
              (Victoria) expects Education Agents to act ethically in dealings
              with the Overseas Students and their families.
            </label>

            <label class="d-block">
              <input
                type="checkbox"
                @click="getAgentDeclaration"
                class="input-form-check-input"
                value="That any Enrolment Fees paid to me by the student to
              support this application will be immediately transferred to
              Institute of Business and Management (Victoria) so that Institute
              can uphold its commitment to ESOS legislation with regards to
              enhancing the refund policy where appropriate."
              />&nbsp; That any Enrolment Fees paid to me by the student to
              support this application will be immediately transferred to
              Institute of Business and Management (Victoria) so that Institute
              can uphold its commitment to ESOS legislation with regards to
              enhancing the refund policy where appropriate.
            </label>

            <label class="d-block">
              <input
                type="checkbox"
                @click="getAgentDeclaration"
                class="input-form-check-input"
                value="That I understand Institute of Business and Management
              (Victoria) expects Education Agents to ensure that each student
              applying for entry to Institute of Business and Management
              (Victoria) is familiar with the information contained in: The
              Application Form, Overseas Student Pre-Enrolment Information and
              the student Handbook."
              />&nbsp; That I understand Institute of Business and Management
              (Victoria) expects Education Agents to ensure that each student
              applying for entry to Institute of Business and Management
              (Victoria) is familiar with the information contained in: The
              Application Form, Overseas Student Pre-Enrolment Information and
              the student Handbook.
            </label>

            <label class="d-block">
              <input
                type="checkbox"
                @click="getAgentDeclaration"
                class="input-form-check-input"
                value="I confirm the student has signed this application form."
              />&nbsp; I confirm the student has signed this application form.
            </label>

            <label class="d-block">
              <input
                type="checkbox"
                @click="getAgentDeclaration"
                class="input-form-check-input"
                value="I have provided the student’s personal email address and
              residential address, as disclosed to me by the studen"
              />&nbsp; I have provided the student’s personal email address and
              residential address, as disclosed to me by the studen
            </label>
          </div>
        </div>
      </div>

      <div class="py-3">
        <button
          type="submit"
          class="btn btn-outline-primary"
          :disabled="is_loading ? true : false"
        >
          Submit
        </button>
      </div>
    </form>
  </div>
</template>
<script>
import axios from "axios";
import path from "../../../src/global-config/mixin/path-solution";
export default {
  mixins: [path],
  data() {
    return {
      courses: [],
      getSelectedCourses: [],
      getStudentDeclarations: [],
      getApplicationChecklist: [],
      getAgentDeclarations: [],
      is_loading: false,
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

    getDeclarations(e) {
      let index = this.getStudentDeclarations.indexOf(e.target.value);
      if (e.target.checked) {
        this.getStudentDeclarations.push(e.target.value);
      } else if (index !== -1) {
        this.getStudentDeclarations.splice(index, 1);
      }
    },

    getChecklist(e) {
      let index = this.getApplicationChecklist.indexOf(e.target.value);
      if (e.target.checked) {
        this.getApplicationChecklist.push(e.target.value);
      } else if (index !== -1) {
        this.getApplicationChecklist.splice(index, 1);
      }
    },

    getAgentDeclaration(e) {
      let index = this.getAgentDeclarations.indexOf(e.target.value);
      if (e.target.checked) {
        this.getAgentDeclarations.push(e.target.value);
      } else if (index !== -1) {
        this.getAgentDeclarations.splice(index, 1);
      }
    },

    formSubmitHandler() {
      const form = document.forms["submit-to-google-sheet"];

      const items = new FormData(form);
      items.append("Qustion01", this.getSelectedCourses);
      items.append("Qustion60", this.getStudentDeclarations);
      items.append("Qustion64", this.getApplicationChecklist);
      items.append("Qustion68", this.getAgentDeclarations);
      this.is_loading = true;

      axios
        .post("submit-student-enrolment", items)
        .then((res) => {
          this.is_loading = false;
          form.reset();
          alert(
            "Your response saved successfully! One of our consultant will contact you soon!"
          );
        })
        .catch((err) => {
          console.error("Error!", error.message);
        });

      // const scriptURL =
      //   "https://script.google.com/macros/s/AKfycbyagwgQ2TRkzH3gIpASqTWbx8zPFCjaLhAP1-BW48o_zEAR_NoDZypKDtYzLAHyXwxv/exec";

      // fetch(scriptURL, { method: "POST", body: items })
      //   .then((response) => {
      //     this.is_loading = false;
      //     form.reset();
      //     alert(
      //       "Your response saved successfully! One of our consultant will contact you soon!"
      //     );
      //   })
      //   .catch((error) => console.error("Error!", error.message));
    },
  },
};
</script>