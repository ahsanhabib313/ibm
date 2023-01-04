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
            This qualification would apply to international students who would
            be dreaming to become executive officers, program consultants and
            program coordinators. Individuals in these roles may possess
            substantial experience in a range of settings but seek to further
            develop their skills across a wide range of business functions.
            Conversely, it may also apply to those with little or no vocational
            experience.
          </p>
          <div class="my-3"></div>
          <table class="table table-responsive">
            <tbody>
              <tr>
                <th>Qualification Code and Title</th>
                <td>:</td>
                <td>BSB50120 Diploma of Business</td>
              </tr>
              <tr>
                <th>CRICOS Course Code</th>
                <td>:</td>
                <td>105493A</td>
              </tr>
              <tr>
                <th>Delivery Location</th>
                <td>:</td>
                <td>Building D, 60 Belfast street, Broadmeadows, VIC, 3047</td>
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
          <p style="text-align: justify">
            All international students must be 18 years of age at the time of
            commencement.
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
                ILETS 5.5 (Academic or general) or equivalent internationally
                recongnised test result in line with DIBP regulation. or
                Completed secondary studies equivalent to an Australian Year 12
                qualification form Level 1 countries as identified by DIBP.
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
              <div class="card card-body" style="text-align: justify">
                Academic Requirements- Students must have satisfactorily
                completed a minimum of year 11 or equivalent.
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
                Numeracy (LLN) Evaluation test to all students to ensure that
                they have the ability to complete the course. This test will
                occur prior to the course commencement and will be assessed by
                authorised IBM (Victoria) delegate.
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
                On completion of this qualification, students may undertake
                qualifications at Advanced Diploma level or above in Business
                training package.
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
                  Participants completing BSB50120 Diploma of Business may enter
                  or continue current roles including:
                </p>

                <ul class="pt-3">
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Accounts
                    Supervisor Frontline Manager Office Manager Team Leader
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Accounts
                    Supervisor
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Frontline
                    Manager
                  </li>
                  <li><i class="fas fa-check text-success"></i>&nbsp;Office</li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Manager Team
                    Leader
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
                    <i class="fas fa-check text-success"></i>&nbsp;Executive
                    Work experience
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Area Manager
                    Life experience
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Business
                    Previous study
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Sales Manager
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Business
                    Professional development programs
                  </li>
                </ul>
                <p style="text-align: justify" class="pt-3">
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
                    <i class="fas fa-check text-success"></i>&nbsp;Written Test
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Oral test
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Case Study
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Projects
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Presentation
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Observation
                  </li>
                  <li>
                    <i class="fas fa-check text-success"></i>&nbsp;Roleplay
                  </li>
                </ul>
                <p class="pt-3">
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
                  This course will be delivered over 54 weeks consisting 50
                  weeks of 5 terms (10 weeks each) and 4 weeks term break
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
              <div class="p-justify card card-body">
                <p style="text-align: justify" class="pb-2">
                  Student needs are declared by the applicant at the time of
                  enrolment: the application form and PTR form allows the
                  applicant to self-declare where they have learning
                  disabilities.
                </p>

                <p style="text-align: justify" class="pb-2">
                  Every student is interviewed either face-to-face or over the
                  telephone to attempt to establish the applicant skill and
                  knowledge levels, their current employment and how that
                  relates to the course content and interaction.
                </p>

                <p style="text-align: justify" class="pb-2">
                  Where language, literacy and numeracy are in question
                  Institute of Business and Management (Victoria) has a
                  language, literacy and numeracy (LLN) assessment they may
                  undertake to confirm their level of language, literacy and
                  numeracy skills.
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
            <div class="my-3"></div>
            <p class="p-justify">
              The BSB50120 Diploma of Business requires the successful
              completion of twelve (12) units (5 Core + 7 Elective). Electives
              for this qualification have been chosen by Institute of Business
              and Management (Victoria) to ensure that students achieve a broad
              range of skills and knowledge in business administration.
            </p>
            <div class="my-3"></div>
            <div class="text-center pt-5">
              <table class="table table-striped table-hover">
                <tbody>
                  <tr>
                    <td>BSBSUS511</td>
                    <td>
                      Develop workplace policies and procedures for
                      sustainability
                    </td>
                    <td>Core</td>
                  </tr>
                  <tr>
                    <td>BSBCRT511</td>
                    <td>Develop critical thinking in others</td>
                    <td>Core</td>
                  </tr>
                  <tr>
                    <td>BSBFIN501</td>
                    <td>Manage budgets and financial plans</td>
                    <td>Core</td>
                  </tr>
                  <tr>
                    <td>BSBOPS501</td>
                    <td>Manage business resources</td>
                    <td>Core</td>
                  </tr>
                  <tr>
                    <td>BSBXCM501</td>
                    <td>Lead communication in the workplace</td>
                    <td>Core</td>
                  </tr>
                  <tr>
                    <td>BSBTWK503</td>
                    <td>Manage meetings</td>
                    <td>Elective</td>
                  </tr>
                  <tr>
                    <td>BSBTWK501</td>
                    <td>Lead diversity and inclusion</td>
                    <td>Elective</td>
                  </tr>
                  <tr>
                    <td>BSBOPS504</td>
                    <td>Manage business risk</td>
                    <td>Elective</td>
                  </tr>
                  <tr>
                    <td>BSBLDR523</td>
                    <td>Lead and manage effective workplace relationship</td>
                    <td>Elective</td>
                  </tr>
                  <tr>
                    <td>BSBLDR522</td>
                    <td>Manage people performance</td>
                    <td>Elective</td>
                  </tr>
                  <tr>
                    <td>BSBTWK502</td>
                    <td>Manage team effectiveness</td>
                    <td>Elective</td>
                  </tr>
                  <tr>
                    <td>BSBPEF501</td>
                    <td>Manage personal and professional development</td>
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
                  <table class="table table-responsive p-justify">
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
                          <p class="p-justify py-2">
                            Further fee / charges information can be found in
                            student handbook, or form IBM (Victoria)
                            administration office.
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3">
                          <p class="p-justify py-2">
                            Tuition fees and other compulsory costs (equipment,
                            uniforms etc.) may change from year to year.
                            However, students continuing in their current
                            qualification will not incur any fee increases.
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3">
                          <p class="p-justify py-2">
                            Material Fees includes but not restricted to books,
                            Tutorials and course documents.
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3">
                          <p class="p-justify py-2">
                            This course will be delivered over 54 weeks
                            consisting of 50 weeks of face-to-face study over 5
                            terms (10 weeks) and 4 weeks of term break.
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="my-3"></div>
            <div class="collapsible">
              <a
                @click="changeAngle($event)"
                data-position="right"
                class="w-100"
                data-bs-toggle="collapse"
                href="#handbook"
                role="button"
                aria-expanded="fasle"
                aria-controls="handbook"
              >
                <i class="fas fa-file-certificate"></i>
                &nbsp;
                <span>Important Information </span>
                &nbsp;
                <i class="fas fa-angle-right requirementAddon"></i>
              </a>
              <div class="my-3"></div>
              <div class="collapse" id="handbook">
                <div class="card card-body">
                  <p>
                    <strong>
                      Student Handbook, Policies and Procedures, Fees and
                      Charges
                    </strong>
                  </p>
                  <br />
                  <p class="p-justify">
                    Information about our training and assessment, policies and
                    procedures are included in student handbook and should be
                    read by you, prior to enrolment, which is available on
                    institute’s website. These documents contain important
                    information about your training course, fees and charges
                    including our refund policy.
                  </p>
                </div>
              </div>
            </div>
            <div class="my-3"></div>
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
                <div class="card card-body">
                  <p class="p-justify">
                    Student needs are declared by the applicant at the time of
                    enrolment: the application form allows the applicant to
                    self-declare where they have learning disabilities. Every
                    student is interviewed either face-to-face or over the
                    telephone to attempt to establish the applicant skill and
                    knowledge levels, their current employment and how that
                    relates to the course content and interaction.
                  </p>

                  <p class="pt-3 p-justify">
                    Where language, literacy and numeracy are in question
                    Institute of Business and Management (Victoria) has a
                    language, literacy and numeracy (LLN) assessment they may
                    undertake to confirm their level of language, literacy and
                    numeracy skills. Reasonable adjustments to training and
                    assessment will be made and additional support (e.g. LLN,
                    assistive technology, additional training, alternative
                    delivery and assessment modes and methods) provided where
                    students with physical attributes or specific learning needs
                    are identified as requiring these changes to complete their
                    training and assessment.
                  </p>
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