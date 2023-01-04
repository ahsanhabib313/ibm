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
            This qualification reflects the role of highly skilled senior
            operators who use a broad range of hospitality skills combined with
            managerial skills and sound knowledge of industry to coordinate
            hospitality operations. They operate independently, have
            responsibility for others and make a range of operational business
            decisions. This qualification provides a pathway to work in any
            hospitality industry sector as a departmental or small business
            manager. The diversity of employers includes restaurants, hotels,
            motels, catering operations, clubs, pubs, cafés, and coffee shops.
            This qualification allows for multiskilling and for acquiring
            targeted skills in accommodation services, cookery, food and
            beverage and gaming. The skills in this qualification must be
            applied in accordance with Commonwealth and State/Territory
            legislation, Australian standards and industry codes of practice. No
            occupational licensing, certification or specific legislative
            requirements apply to this qualification at the time of publication.
          </p>
          <div class="my-3"></div>
          <table class="table table-responsive p-justify">
            <tbody>
              <tr>
                <th>Qualification Code and Title</th>
                <td>:</td>
                <td>SIT30821 Certificate III in Commercial Cookery</td>
              </tr>
              <tr>
                <th>CRICOS Course Code</th>
                <td>:</td>
                <td>110591A</td>
              </tr>
              <tr>
                <th>Delivery Location</th>
                <td>:</td>
                <td>
                  60 Belfast Street, Broadmeadows, VIC, 3047 <br />
                  170 Victoria St, RICHMOND, Victoria 3121
                </td>
              </tr>
              <tr>
                <th>Mode of Delivery</th>
                <td>:</td>
                <td>
                  Face to face classroom, Practical training and assessment is
                  completed in commercial kitchen and 200 hours of Work-based
                  Training arranged by the Institute.
                </td>
              </tr>
            </tbody>
          </table>
          <div class="my-2"></div>
          <h3 class="course-page-title">Course Requirement</h3>
          <div class="my-3"></div>
          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="down"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps0"
              role="button"
              aria-expanded="true"
              aria-controls="clps1"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Age Requirements</span>
              &nbsp;
              <i class="fas fa-angle-down requirementAddon"></i>
            </a>
            <div class="my-3"></div>
            <div class="collapse show" id="clps0">
              <div class="card card-body">
                Students must be a minimum age of 18 years or above at the time
                of course commencement.
              </div>
            </div>
          </div>
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
              <span>Academic Requirements</span>
              &nbsp;
              <i class="fas fa-angle-down requirementAddon"></i>
            </a>
            <div class="my-3"></div>
            <div class="collapse show" id="clps1">
              <div class="card card-body">
                Satisfactory completion of Year 11 VCE or its equivalent
                overseas qualification
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
              <span>English Language Requirements</span>
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>
            <div class="my-3"></div>
            <div class="collapse" id="clps2">
              <div class="card card-body">
                <ul class="list-items p-justify">
                  <li>
                    Have a minimum IELTS score of 5.5 for direct entry into a
                    VET course OR
                  </li>
                  <li>
                    IELTS score of 5.0 or equivalent with an ELICOS course (up
                    to 10 weeks) to be taken before the main VET course;or,
                    IELTS score of 4.5 or equivalent with an ELICOS course (up
                    to 20 weeks) to be taken before the main VET course OR
                  </li>
                  <li>
                    to provide evidence that they have studied in English for at
                    least five years in Australia, Canada, New Zealand, Republic
                    of Ireland, South Africa, United Kingdom or United State OR
                  </li>
                  <li>
                    to provide evidence that, within two years* of their signed
                    written agreement date, they have successfully completed in
                    Australia a Certificate IV or higher-level qualification,
                    from the Australian Qualifications Framework.
                  </li>
                  <li>
                    In the 2 years before commencing the course, has completed
                    secondary studies equivalent to an Australian Year 12
                    qualification from an English language speaking country
                  </li>
                  <li>
                    Institute of Business and Management also has an English
                    proficiency test to ensure that students have the English
                    language capacity to successfully complete this course.
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="right"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps23"
              role="button"
              aria-expanded="false"
              aria-controls="clps23"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Other Requirement</span>
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>
            <div class="my-3"></div>
            <div class="collapse" id="clps23">
              <div class="card card-body">
                <ul class="list-items p-justify">
                  <li>
                    <b>Pre-Training Review:</b> all international students will
                    take the PTR to determine the determine suitability for the
                    course and student needs
                  </li>
                  <li>
                    <b>Language, Literacy and Numeracy assessment test: </b
                    >prior enrolment to determine the student’s ability to
                    complete the course or any LLN support during the study
                    period
                  </li>
                  <li>
                    <b>Kitchen toolkit: </b>
                    students will need access to a kitchen toolkit which
                    includes a chef’s uniform, safety shoes, various knives, and
                    small equipment. This will be arranged and provided by
                    Institute of Business and Management (Victoria)
                  </li>
                  <li>
                    <b>Physical requirements:</b> applicants will need to be
                    physically able to carry out manual handling required to
                    perform tasks involved while undergoing training. As part of
                    this course students are expected to handle complex foods –
                    e.g. cooking of various processed or raw meats, poultry,
                    seafood’s, dairy items and student must keep in mind of any
                    religious or dietary barriers to handle such foods before
                    enrolling in this course. Institute of Business and
                    Management (Victoria) will identify any such barriers
                    presented by applicants during pre-training review and
                    provide required support and reasonable adjustment where
                    possible.
                  </li>
                  <li>
                    <b>Hardware/Software requirements: </b>Institute of Business
                    and Management (Victoria) will provide access to
                    computers/laptops during classroom hours. However, for
                    students to work on assessments, tasks and self-study, all
                    learners are expected to have access to a laptop or computer
                    with Windows/macOS operating system at their own cost.
                  </li>
                  <li>
                    <b>Student Support:</b> Student needs are declared by the
                    applicant at the time of enrolment: the application form
                    allows the applicant to self-declare where they have
                    learning disabilities. Every student is interviewed either
                    face-to-face or over the telephone to attempt to establish
                    the applicant skill and knowledge levels, their current
                    employment and how that relates to the course content and
                    interaction
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="my-2"></div>
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
              <div class="card card-body p-justify">
                <p>
                  On completion of SIR30821 Certificate III in Commercial
                  Cookery, students may undertake one or more of following
                  qualifications:
                </p>
                <ul class="list-items">
                  <li>SIT40521 Certificate IV in Kitchen Management</li>
                  <li>
                    A range of other qualifications at Certificate IV level
                  </li>
                </ul>
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
              <div class="card card-body">
                <p>
                  Students completing SIT30821 Certificate III in Commercial
                  Cookery can expect to gain work as a:
                </p>
                <ul class="list-items">
                  <li>Commercial Cook</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="my-2"></div>
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

                <ul class="pt-3 list-items">
                  <li>Work experience</li>
                  <li>Life experience</li>
                  <li>Previous study</li>
                  <li>Professional development programs</li>
                </ul>
                <p class="pt-3">
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

                <ul class="pt-3 list-items">
                  <li>Written Questions and Answers</li>
                  <li>Projects</li>
                  <li>Case Studies</li>
                  <li>Observations</li>
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
                  The duration of this qualification is 52 weeks, including term
                  breaks and 10 weeks work-based training. The contact hours are
                  20 contact hours per week.
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

                <p class="pb-2">
                  Every student is interviewed either face-to-face or over the
                  telephone to attempt to establish the applicant skill and
                  knowledge levels, their current employment and how that
                  relates to the course content and interaction.
                </p>

                <p class="pb-2">
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
        <div class="my-2"></div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="course-page-title">Course Structure</h3>
            <div class="my-3"></div>
            <p class="p-justify">
              A maximum of two of the eight required elective units may be
              substituted by selecting relevant units of competency from any
              Certificate III or IV construction qualification or qualification
              in another endorsed Training Package. Some units in this
              qualification may have prerequisite requirements, which must be
              met when packaging the qualification. Users are referred to the
              list of CPC08 units with prerequisite unit requirements available
              in this Training Package for this purpose.
            </p>
            <div class="my-3"></div>
            <div class="text-center pt-5">
              <table class="table table-striped table-hover">
                <tbody>
                  <tr>
                    <th colspan="2">CORE UNITS</th>
                  </tr>
                  <tr>
                    <td>SITHCCC023</td>
                    <td>Use food preparation equipment</td>
                  </tr>
                  <tr>
                    <td>SITHCCC027</td>
                    <td>Prepare dishes using basic methods of cookery</td>
                  </tr>
                  <tr>
                    <td>SITHCCC028</td>
                    <td>Prepare appetisers and salads</td>
                  </tr>
                  <tr>
                    <td>SITHCCC029</td>
                    <td>Prepare stocks, sauces and soups</td>
                  </tr>
                  <tr>
                    <td>SITHCCC030</td>
                    <td>
                      Prepare vegetable, fruit, eggs and farinaceous dishes
                    </td>
                  </tr>
                  <tr>
                    <td>SITHCCC031</td>
                    <td>Prepare vegetarian and vegan dishes</td>
                  </tr>
                  <tr>
                    <td>SITHCCC035</td>
                    <td>Prepare poultry dishes</td>
                  </tr>
                  <tr>
                    <td>SITHCCC037</td>
                    <td>Prepare seafood dishes</td>
                  </tr>
                  <tr>
                    <td>SITHCCC036</td>
                    <td>Prepare meat dishes</td>
                  </tr>
                  <tr>
                    <td>SITHCCC042</td>
                    <td>Prepare food to meet special dietary requirements</td>
                  </tr>
                  <tr>
                    <td>SITHCCC041</td>
                    <td>Produce cakes, pastries and breads</td>
                  </tr>
                  <tr>
                    <td>SITHCCC043</td>
                    <td>Work effectively as a cook</td>
                  </tr>
                  <tr>
                    <td>SITHKOP009</td>
                    <td>Clean kitchen premises and equipment</td>
                  </tr>
                  <tr>
                    <td>SITHKOP010</td>
                    <td>Plan and cost recipes</td>
                  </tr>
                  <tr>
                    <td>SITHPAT016</td>
                    <td>Produce desserts</td>
                  </tr>
                  <tr>
                    <td>SITXFSA005</td>
                    <td>Use hygienic practices for food safety</td>
                  </tr>
                  <tr>
                    <td>SITXFSA006</td>
                    <td>Participate in safe food handling practices</td>
                  </tr>
                  <tr>
                    <td>SITXHRM007</td>
                    <td>Coach others in job skills</td>
                  </tr>
                  <tr>
                    <td>SITXINV006</td>
                    <td>Receive, store and maintain stock</td>
                  </tr>
                  <tr>
                    <td>SITXWHS005</td>
                    <td>Participate in safe work practices</td>
                  </tr>
                  <tr>
                    <td colspan="2"><b>ELECTIVE UNITS</b></td>
                  </tr>

                  <tr>
                    <td>SITHCCC040</td>
                    <td>PREPARE AND SERVE CHEESE</td>
                  </tr>
                  <tr>
                    <td>SITHCCC039</td>
                    <td>Produce pates and terrines</td>
                  </tr>
                  <tr>
                    <td>BSBSUS211</td>
                    <td>PARTICIPATE IN SUSTAINBLE WORK PRACTICE</td>
                  </tr>
                  <tr>
                    <td>SITXINV007</td>
                    <td>PURCHASE GOODS</td>
                  </tr>
                  <tr>
                    <td>SITHCCC038</td>
                    <td>Produce and serve food for buffets</td>
                  </tr>
                </tbody>
              </table>
              <!--   <table class="table table-striped table-hover">
                <tbody>
                 
                </tbody>
              </table> -->
            </div>
          </div>
        </div>
      </div>
      <div class="row my-2">
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
                <i class="fas fa-angle-down show requirementAddon"></i>
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
                        <td>$750</td>
                      </tr>
                      <tr>
                        <th>Tuition Fee</th>
                        <td>:</td>
                        <td>$10000</td>
                      </tr>
                      <tr>
                        <th>Total Fees</th>
                        <td>:</td>
                        <td>$11000</td>
                      </tr>
                      <tr>
                        <th>Duration</th>
                        <th>:</th>
                        <td>
                          <p class="p-justify">
                            The duration of this qualification is 52 weeks,
                            including term breaks and 10 weeks work-based
                            training. The contact hours are 20 contact hours per
                            week.
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-2">
        <div class="col-md-12">
          <div class="course-structure">
            <h3 class="course-page-title">Intake</h3>
            <div class="my-3"></div>
            <p>Multiple intakes available.</p>
          </div>
        </div>
      </div>
      <div class="row my-2">
        <div class="col-md-12">
          <div class="course-structure">
            <h3 class="course-page-title">Work based Training</h3>
            <div class="my-3"></div>
            <p class="p-justify">
              This course includes work-based training of a minimum of 200
              hours/10 weeks. During work-based training, students will be able
              to practice their skills and knowledge in real workplace settings.
              This will assist students to be job-ready at graduation. Institute
              of Business and Management (Victoria) will ensure placement of all
              students. This is to ensure international students with limited
              exposure to Australian workplace are not disadvantaged. Students
              will have the option to arrange their own work placement provided
              it meets all requirements. The assessor will visit and assess the
              student at least twice during this time at a mutually convenient
              time.
            </p>
          </div>
        </div>
      </div>
      <div class="row my-2">
        <div class="col-md-12">
          <div class="course-structure">
            <h3 class="course-page-title">Further Information</h3>
            <div class="my-3"></div>
            <p>
              For further information please call Institute of Business and
              Management (Victoria) on 03 9478 3163 or email us on:
              info@ibm.vic.edu.au
            </p>
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
.list-items {
  padding-left: 2rem !important;
}
.list-items li {
  padding-left: 10px;
  list-style: square;
}
table tbody tr {
  text-align: left !important;
}
ul {
  list-style-type: circle;
}
</style>