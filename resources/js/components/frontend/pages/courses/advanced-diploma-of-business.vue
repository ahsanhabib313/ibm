<template>
  <section
    class="about-us-area pt-50 pb-120 pt-md-100 pb-md-70 pt-xs-100 pb-xs-70"
  >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="course-page-title">Course Overview</h3>
          <div class="my-3"></div>
          <p class="p-justify">
            This qualification reflects the role of individuals in a variety of
            Business Services job roles. These individuals may have general
            management accountabilities. Individuals in these roles carry out
            complex tasks in a specialist field of expertise. They may undertake
            technical research and analysis and will often contribute to setting
            the strategic direction for a work area
          </p>
          <div class="my-3"></div>
          <table class="table table-responsive">
            <tbody>
              <tr>
                <th>Qualification Code and Title</th>
                <td>:</td>
                <td>
                  BSB60120 Advanced Diploma of <br />
                  Business
                </td>
              </tr>
              <tr>
                <th>CRICOS Course Code</th>
                <td>:</td>
                <td>105494M</td>
              </tr>
              <tr>
                <th>Delivery Location</th>
                <td>:</td>
                <td>Building D, 60 Belfast Street, Broadmeadows, VIC, 3047</td>
              </tr>
              <tr>
                <th>Mode of Delivery</th>
                <td>:</td>
                <td>Face to Face</td>
              </tr>
            </tbody>
          </table>
          <div class="my-5"></div>
          <h3 class="course-page-title">Course entry &amp; Visa Requirement</h3>
          <p>
            All international students must be 18 years of age at the time of
            commencement
          </p>
          <div class="my-3"></div>
          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="down"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps1"
              role="button"
              aria-expanded="true"
              aria-controls="clps1"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>English Language Requirement</span>
              &nbsp;
              <i class="fas fa-angle-down requirementAddon"></i>
            </a>
            <div class="my-3"></div>
            <div class="collapse show" id="clps1">
              <div class="p-justify card card-body">
                An IELTS level of 5.5 or equivalent for direct entry into a VET
                course or IELTS band score of 5.0 (Academic or general version)
                then satisfactory completion of ELICOS up to 20 weeks at upper
                intermediate level to be taken before the main VET course.
                (Results older than two years are not acceptable)
              </div>
            </div>
          </div>
          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="right"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps2"
              role="button"
              aria-expanded="false"
              aria-controls="clps2"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Academic Requirement</span>
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>
            <div class="my-3"></div>
            <div class="collapse" id="clps2">
              <div class="card card-body">
                <p class="p-justify">
                  <i
                    class="fas fa-arrow-right theme-color"
                    aria-hidden="true"
                  ></i>
                  Students must be of 18 years of age to apply.
                </p>
                <p class="p-justify">
                  <i
                    class="fas fa-arrow-right theme-color"
                    aria-hidden="true"
                  ></i>
                  Successful completion of Diploma or Advanced Diploma from the
                  BSB training package (Current or superseded equivalent
                  version). OR Have 2 years equivalent full time relevant
                  workplace experience in an operational or leadership role in
                  an enterprise.
                </p>

                <!-- <p class="p-justify"><i class="fas fa-arrow-right theme-color" aria-hidden="true"></i> 
                English language: An IELTS level of 5.5 or equivalent for direct entry
                into a VET course or IELTS band score of 5.0 (Academic or general
                version) then satisfactory completion of ELICOS up to 20 weeks at
                upper intermediate level to be taken before the main VET course.
                (Results older than two years are not acceptable)
                </p> -->
                <p class="p-justify">
                  <i
                    class="fas fa-arrow-right theme-color"
                    aria-hidden="true"
                  ></i>
                  Completed a Language, Literacy and Numeracy ( LLN ) and
                  Pre-Training Review ( PTR ) assessment test prior to
                  commencement of the course.
                </p>
              </div>
            </div>
          </div>
          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="right"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps3"
              role="button"
              aria-expanded="false"
              aria-controls="clps3"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>LLN</span>
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>
            <div class="my-3"></div>
            <div class="collapse" id="clps3">
              <div class="p-justify card card-body">
                IBM (Victoria) will also administer Language, Literacy and
                Numeracy (LLN) Evaluation test and PTR Test to all students to
                ensure that they can complete the course and if they any
                specific student needs. These tests will occur prior to the
                course commencement and will be assessed by authorised IBM
                (Victoria) delegate.
              </div>
            </div>
          </div>
          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="right"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps4"
              role="button"
              aria-expanded="false"
              aria-controls="clps4"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Overseas Student Health Cover (OSHC)</span>
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>
            <div class="my-3"></div>
            <div class="collapse" id="clps4">
              <div class="p-justify card card-body">
                All international students must have Overseas Student Health
                Cover (OSHC) for the entire duration of their stay in Australia.
              </div>
            </div>
          </div>
          <div class="my-5"></div>
          <h3 class="course-page-title">Pathways</h3>
          <div class="my-3"></div>
          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="down"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps5"
              role="button"
              aria-expanded="true"
              aria-controls="clps5"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Educational Pathways</span>
              &nbsp;
              <i class="fas fa-angle-down requirementAddon"></i>
            </a>
            <div class="my-3"></div>
            <div class="collapse show" id="clps5">
              <div class="p-justify card card-body">
                On completion of BSB60120 Advanced Diploma of Business, students
                may undertake qualifications at Advanced Diploma or above in
                business training package or pursuing Bachelors in Business.
              </div>
            </div>
          </div>
          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="down"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps6"
              role="button"
              aria-expanded="true"
              aria-controls="clps6"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Employment Pathways</span>
              &nbsp;
              <i class="fas fa-angle-down requirementAddon"></i>
            </a>
            <div class="my-3"></div>
            <div class="collapse show" id="clps6">
              <div class="p-justify card card-body">
                <p>
                  Participants completing BSB60120 Advanced Diploma of Business
                  may enter into or continue current roles including:
                </p>

                <ul class="pt-3">
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;
                    Entrepreneurship
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Business
                    Enterprise Manager
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp; Regional
                    Manager
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Corporate
                    services manager
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Business
                    consultant
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="my-1"></div>
      <div class="row">
        <div class="col-md-12">
          <h3 class="course-page-title">Courses Details</h3>
          <div class="my-3"></div>
          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="down"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps7"
              role="button"
              aria-expanded="true"
              aria-controls="clps7"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>RPL / Credit Transfer</span>
              &nbsp;
              <i class="fas fa-angle-down requirementAddon"></i>
            </a>
            <div class="my-3"></div>
            <div class="collapse show" id="clps7">
              <div class="p-justify card card-body">
                <p>
                  Students with prior learning and work experience can apply for
                  RPL. Students who have completed corresponding units of
                  competency and/or units contained within the packaging rules
                  can apply for Credit Transfer. RPL evidence must include some
                  of the following:
                </p>

                <ul class="pt-3">
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Work
                    experience
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Life
                    experience
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Previous
                    study
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Professional
                    development programs
                  </li>
                </ul>
                <p class="p-justify pt-3">
                  If you wish to apply for RPL or Credit Transfer, please notify
                  Institute of Business and Management (Victoria) at the time of
                  enrolment
                </p>
              </div>
            </div>
          </div>

          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="right"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps8"
              role="button"
              aria-expanded="fasle"
              aria-controls="clps8"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Assessment Method</span>
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>
            <div class="my-3"></div>
            <div class="collapse" id="clps8">
              <div class="p-justify card card-body">
                <p>
                  Assessment methods used for this qualification will provide a
                  range of ways for individuals to demonstrate that they have
                  met the required outcomes including:
                </p>

                <ul class="pt-3">
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Written
                    Questions and Answers
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Projects
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Case Studies
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Observations
                  </li>
                </ul>
                <p class="p-justify pt-3">
                  At the beginning of each unit, trainers will outline the
                  assessment tasks that must be completed.
                </p>
              </div>
            </div>
          </div>

          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="right"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps9"
              role="button"
              aria-expanded="false"
              aria-controls="clps9"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span
                >Important Information – Student Handbook, Policies and
                Procedures, Fees and Charges</span
              >
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>
            <div class="my-3"></div>
            <div class="collapse" id="clps9">
              <div class="p-justify card card-body">
                <p>
                  Information about our training and assessment, policies and
                  procedures are included in student handbook and should be read
                  by you, prior to enrolment, which is available on institute’s
                  website. These documents contain important information about
                  your training course, fees and charges including our refund
                  policy.
                </p>
              </div>
            </div>
          </div>

          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="right"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps10"
              role="button"
              aria-expanded="false"
              aria-controls="clps10"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Course Duration</span>
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>
            <div class="my-3"></div>
            <div class="collapse" id="clps10">
              <div class="p-justify card card-body">
                <p>
                  This course will be delivered over 64 weeks consisting of 60
                  weeks of face-to-face study over 5 terms (12 weeks each) and 4
                  weeks of term break.
                </p>
              </div>
            </div>
          </div>

          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="right"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps11"
              role="button"
              aria-expanded="false"
              aria-controls="clps11"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Student Support</span>
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>
            <div class="my-3"></div>
            <div class="collapse" id="clps11">
              <div class="card card-body">
                <p class="p-justify pb-2">
                  Student needs are declared by the applicant at the time of
                  enrolment: the application form allows the applicant to
                  self-declare where they have learning disabilities.
                </p>

                <p class="p-justify pb-2">
                  Every student is interviewed either face-to-face or over the
                  telephone to attempt to establish the applicant skill and
                  knowledge levels, their current employment and how that
                  relates to the course content and interaction.
                </p>

                <p class="p-justify pb-2">
                  Where language, literacy and numeracy are in question
                  Institute of Business and Management (Victoria) has a
                  language, literacy and numeracy (LLN) assessment they may
                  undertake to confirm their level of language, literacy and
                  numeracy skills
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="my-1"></div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="course-page-title">Course Structure</h3>
            <div class="p-justify my-3"></div>
            <p>
              The BSB60120 Advanced Diploma of Business requires the successful
              completion of 9 units listed out of ten. Electives for this
              qualification have been chosen by Institute of Business and
              Management (Victoria) to ensure that students achieve a broad
              range of skills and knowledge in business.
            </p>
            <div class="my-3"></div>
            <div class="text-center pt-5">
              <table class="table table-striped table-hover">
                <tbody>
                  <tr>
                    <td>BSBCRT611</td>
                    <td>Apply critical thinking for complex problem solving</td>
                    <td>Core</td>
                  </tr>
                  <tr>
                    <td>BSBFIN601</td>
                    <td>Manage organisational finances</td>
                    <td>Core</td>
                  </tr>
                  <tr>
                    <td>BSBOPS601</td>
                    <td>Develop and implement business plans</td>
                    <td>Core</td>
                  </tr>
                  <tr>
                    <td>BSBTEC601</td>
                    <td>Review organisational digital strategy</td>
                    <td>Core</td>
                  </tr>
                  <tr>
                    <td>BSBSUS601</td>
                    <td>Lead corporate social responsibility</td>
                    <td>Core</td>
                  </tr>
                  <tr>
                    <td>BSBINS601</td>
                    <td>Manage knowledge and information</td>
                    <td>Elective</td>
                  </tr>
                  <tr>
                    <td>BSBLDR601</td>
                    <td>Lead and manage organisational change</td>
                    <td>Elective</td>
                  </tr>
                  <tr>
                    <td>BSBSTR601</td>
                    <td>Manage innovation and continuous improvement</td>
                    <td>Elective</td>
                  </tr>
                  <tr>
                    <td>BSBWHS521</td>
                    <td>Ensure a safe workplace for a work area</td>
                    <td>Elective</td>
                  </tr>
                  <tr>
                    <td>BSBCMM511</td>
                    <td>Communicate with influence</td>
                    <td>Elective</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-1">
        <div class="col-md-12">
          <div class="course-structure">
            <h3 class="course-page-title">Fees Information</h3>
            <div class="my-3"></div>
            <div class="collapsible">
              <a
                @click="changeAngle($event)"
                data-position="down"
                class="w-100"
                data-bs-toggle="collapse"
                href="#fees"
                role="button"
                aria-expanded="true"
                aria-controls="clps1"
              >
                <i class="fas fa-file-certificate"></i>
                &nbsp;
                <span>Fees</span>
                &nbsp;
                <i class="fas fa-angle-down requirementAddon"></i>
              </a>
              <div class="my-3"></div>
              <div class="collapse show" id="fees">
                <div class="card card-body">
                  <table class="table table-responsive">
                    <tbody>
                      <tr>
                        <th>Application Fee</th>
                        <td>:</td>
                        <td>$250</td>
                      </tr>
                      <tr>
                        <th>Material Fee</th>
                        <td>:</td>
                        <td>$250</td>
                      </tr>
                      <tr>
                        <th>Tuition Fee</th>
                        <td>:</td>
                        <td>$11000</td>
                      </tr>
                      <tr>
                        <th>Total Fees</th>
                        <td>:</td>
                        <td>$11500</td>
                      </tr>
                      <tr>
                        <td colspan="3">
                          <p class="p-justify py-1">
                            Further fee / charges information can be found in
                            student handbook, or form IBM (Victoria)
                            administration office.
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3">
                          <p class="p-justify py-1">
                            Tuition fees and other compulsory costs (equipment,
                            uniforms etc.) may change from year to year.
                            However, students continuing in their current
                            qualification will not incur any fee increases.
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3">
                          <p class="p-justify py-1">
                            Material Fees includes but not restricted to books,
                            Tutorials and course documents.
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3">
                          <p class="p-justify py-1">
                            This course will be delivered over 64 weeks
                            consisting of 60 weeks of face-to-face study over 5
                            terms (12 weeks each) and 4 weeks of term break.
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="collapsible">
                <a
                  class="w-100"
                  data-bs-toggle="collapse"
                  href="#handbook"
                  role="button"
                  aria-expanded="true"
                  aria-controls="handbook"
                >
                  <i class="fas fa-file-certificate"></i>
                  &nbsp;
                  <span>Important Information</span>
                  &nbsp;
                  <i class="fas fa-angle-right requirementAddon"></i>
                </a>
                <div class="my-3"></div>
                <div class="collapse" id="handbook">
                  <div class="p-justify card card-body">
                    <p>
                      <strong>
                        Student Handbook, Policies and Procedures, Fees and
                        Charges
                      </strong>
                    </p>
                    <br />
                    Information about our training and assessment, policies and
                    procedures are included in student handbook and should be
                    read by you, prior to enrolment, which is available on
                    institute’s website. These documents contain important
                    information about your training course, fees and charges
                    including our refund policy.
                  </div>
                </div>
              </div>
              <div class="my-3"></div>
              <div class="collapsible">
                <a
                  class="w-100"
                  data-bs-toggle="collapse"
                  href="#stdSupport"
                  role="button"
                  aria-expanded="false"
                  aria-controls="stdSupport"
                >
                  <i class="fas fa-file-certificate"></i>
                  &nbsp;
                  <span>Student Support </span>
                  &nbsp;
                  <i class="fas fa-angle-right requirementAddon"></i>
                </a>
                <div class="my-3"></div>
                <div class="collapse" id="stdSupport">
                  <div class="p-justify card card-body">
                    Student needs are declared by the applicant at the time of
                    enrolment: the application form allows the applicant to
                    self-declare where they have learning disabilities. Every
                    student is interviewed either face-to-face or over the
                    telephone to attempt to establish the applicant skill and
                    knowledge levels, their current employment and how that
                    relates to the course content and interaction. Where
                    language, literacy and numeracy are in question Institute of
                    Business and Management (Victoria) has a language, literacy
                    and numeracy (LLN) assessment they may undertake to confirm
                    their level of language, literacy and numeracy skills.
                    Reasonable adjustments to training and assessment will be
                    made and additional support (e.g. LLN, assistive technology,
                    additional training, alternative delivery and assessment
                    modes and methods) provided where students with physical
                    attributes or specific learning needs are identified as
                    requiring these changes to complete their training and
                    assessment.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import path from "../../../../src/global-config/mixin/path-solution";

export default {
  components: {},
  mixins: [path],
  props: ["course"],
  methods: {
    changeAngle(event) {
      const requirement = event.target;
      let position = $(requirement).attr("data-position");

      if (position == "right") {
        $(requirement).attr("data-position", "down");
        $(requirement).find(".requirementAddon").removeClass("fa-angle-right");
        $(requirement).find(".requirementAddon").addClass("fa-angle-down");
      } else {
        $(requirement).attr("data-position", "right");
        $(requirement).find(".requirementAddon").removeClass("fa-angle-down");
        $(requirement).find(".requirementAddon").addClass("fa-angle-right");
      }
    },
  },
};
</script>
<style scoped>
.requirementAddon {
  float: right;
}

.course-page-title {
  font-size: 24px !important;
  color: #f1592a !important;
}

.collapsible {
  margin: 15px auto !important;
}

.collapsible a {
  /* background-color: #ffeae3 !important;*/
  padding: 5px 10px !important;
  display: block !important;
  width: 100% !important;
  color: #000000 !important;
  border: 1px solid #f1592a;
  border-radius: 5px;
}
table tbody tr {
  text-align: left !important;
}
</style>