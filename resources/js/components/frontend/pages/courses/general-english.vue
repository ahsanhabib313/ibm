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
            ELICOS General English course is aimed to provide core English
            language skills for all students to have the necessary skills to
            communicate effectively and confidently with a diverse range of
            people on a variety of topics frequently encountered in every day.
          </p>
          <div class="my-3"></div>
          <table class="table table-responsive">
            <tbody>
              <tr>
                <th>Qualification Title</th>
                <td>:</td>
                <td>
                  ELICOS General English (Elementary to Upper Intermediate)
                </td>
              </tr>
              <tr>
                <th>CRICOS Course Code</th>
                <td>:</td>
                <td>0101439</td>
              </tr>
            </tbody>
          </table>
          <div class="my-3"></div>
          <h3 class="course-page-title">Course Description</h3>
          <div class="my-3"></div>
          <p class="p-justify">
            The General English course gives students a firm grounding in the
            vocabulary, pronunciation and grammar of English. These areas of
            proficiency are combined and integrated with the four macro skills
            of speaking, listening, reading and writing. These areas of
            proficiency form the basis of the learner aims, objectives and
            outcomes for the course.
          </p>
          <br />
          <p>
            During the course, students will be expected to participate as much
            as possible, and work individually, in pairs and in groups as well
            as take part in whole class activities
          </p>
          <div class="my-3"></div>
          <h3 class="course-page-title">Course Duration</h3>
          <div class="my-3"></div>
          <p class="p-justify">
            40 weeks (10 weeks per level)
            <!-- The course length is 40 weeks. Each week there are a minimum of 20
            face-to-face contact hours. Students who struggle to master the
            content at any level can choose to repeat the level a maximum of
            once. -->
          </p>
          <br />
          <!-- <p>
            Students can enter the course every Monday of the year, on a rolling
            intake basis. The course is available 50 weeks of the year. The
            minimum course enrolment is 5 Weeks.
          </p> -->
          <div class="my-3"></div>
          <h3 class="course-page-title">Delivery Location</h3>
          <div class="my-3"></div>
          <p class="p-justify">
            The course will be delivered at 60 Belfast Street, Broadmeadows,
            VIC, 3047.
          </p>
          <div class="my-5">
            <h3 class="course-page-title">LEARNER NEEDS</h3>
            <div class="my-3"></div>
            <p class="p-justify">
              Learner needs are assessed at enrolment as per Institute of
              Business and Management (Victoria)’s student support policy and
              procedure. Students complete the enrolment form and submit
              supporting documentation to enable Institute of Business and
              Management (Victoria) to assess whether the course is appropriate
              for their abilities and learner needs.
            </p>
            <br />
            <p class="p-justify">
              Students who have learning needs that cannot be accommodated by
              Institute of Business and Management (Victoria) and/or do not
              satisfy the entry requirements will be provided guidance to access
              an external service/organisation where they can develop the
              required level of skills/support. On achieving the required level
              of knowledge and skills they can then re-apply for the course.
            </p>
            <br />
            <p class="p-justify">
              Institute of Business and Management (Victoria) takes all feasible
              and reasonable steps to assist students during the course, to help
              them in complete the course within the course schedule.
            </p>
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
                <span>Pre-Enrolment Information</span>
                &nbsp;
                <i class="fas fa-angle-down requirementAddon"></i>
              </a>
              <div class="my-3"></div>
              <div class="collapse show" id="clps7">
                <div class="card card-body">
                  <p style="text-align: justify">
                    Institute of Business and Management (Victoria) provides
                    information to student’s pre-enrolment on course demands and
                    expectations via the Student Handbook and course information
                    available on the Institute of Business and Management
                    (Victoria)’s website. This information also identifies the
                    process for assessing learner needs during enrolment and
                    post enrolment.
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
                <span>Orientation</span>
                &nbsp;
                <i class="fas fa-angle-right requirementAddon"></i>
              </a>
              <div class="my-3"></div>
              <div class="collapse" id="clps8">
                <div class="card card-body">
                  <p style="text-align: justify">
                    Institute of Business and Management (Victoria) delivers an
                    orientation to students outlining course requirements,
                    facilities, policies, safety, staff, support services and
                    general information prior to course commencement.
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
                <span>Monitoring Attendance</span>
                &nbsp;
                <i class="fas fa-angle-right requirementAddon"></i>
              </a>
              <div class="my-3"></div>
              <div class="collapse" id="clps9">
                <div class="card card-body">
                  <p style="text-align: justify">
                    Institute of Business and Management (Victoria) monitors
                    student attendance and provides assistance if the student is
                    experiencing difficulties and not progressing through their
                    course as per the course schedule. Institute of Business and
                    Management (Victoria) employs a range of support services
                    where appropriate and feasible to support students learning
                    needs during course delivery. Institute of Business and
                    Management (Victoria) may refer students to external sources
                    if they are unable to sufficiently provide support for
                    students learning needs.
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
                <span>Academic Support</span>
                &nbsp;
                <i class="fas fa-angle-right requirementAddon"></i>
              </a>
              <div class="my-3"></div>
              <div class="collapse" id="clps10">
                <div class="card card-body">
                  <p style="text-align: justify">
                    For many of the students, their previous educational
                    experience was in a much more teacher-centred. The students
                    expect the teacher to guide their learning as the teacher
                    would do in their native systems. Given these
                    considerations, there will need to be identification of
                    needs to evaluate the gap between the student’s current
                    ability and the demands of academic performance,
                    particularly in assessment, but also in class participation.
                    The students will all be encouraged to become active
                    learners, equipping them with the skills to succeed in
                    English speaking academic life. Students who are
                    experiencing difficulties with any aspect of their course
                    are encouraged to speak with their teacher or any other
                    member of staff.
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
                <span>Welfare Support</span>
                &nbsp;
                <i class="fas fa-angle-right requirementAddon"></i>
              </a>
              <div class="my-3"></div>
              <div class="collapse" id="clps11">
                <div class="card card-body">
                  <p class="pb-2" style="text-align: justify">
                    Institute of Business and Management (Victoria) have student
                    support service in place as we understand that our students
                    require extra support to adjust in the new environment and
                    cope with their study. Sometimes there can be personal
                    issues that impact their successful course completion.
                    Students who are experiencing personal/ welfare issues that
                    are impacting their studies are encouraged to contact their
                    trainer or any other member of staff.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="row">
          <div class="col-md-12">
            <h3 class="course-page-title">Assessment</h3>
            <div class="my-2"></div>
            <p><strong>Formative Assessment</strong></p>
            <ul>
              <li style="text-align: justify">
                <i class="fas fa-check text-success"></i>&nbsp; Each week
                students complete a Unit Progress Test covering Listening,
                Vocabulary, Grammar and Reading. Student will be given mark for
                their speaking marking criteria on different level.
              </li>
              <li style="text-align: justify">
                <i class="fas fa-check text-success"></i>&nbsp; Each week of the
                course students complete a formative writing assessment over on
                hour of varying word lengths depending on the level. The
                instructions for the teacher are in the Teacher’s book Students
                are marked according to the Formative Writing Marking Criteria
                which awards a score of A, B or C. The exceptions are in weeks 5
                and 10 when students take a summative writing task.
              </li>
            </ul>

            <div class="my-3"></div>

            <p><strong>Summative Assessment Schedule</strong></p>
            <ul>
              <li style="text-align: justify">
                <i class="fas fa-check text-success"></i>&nbsp; Mid-Course and
                End of Course Tests In weeks 5 and 10 of each level, students
                take a Mid-Course or End of Course Test. The tests cover
                Speaking, Listening, Reading and Writing. The tests are
                completed over 2 hours.
              </li>
              <li style="text-align: justify">
                <i class="fas fa-check text-success"></i>&nbsp; For the
                speaking, teachers use a separate room to give students a
                5-minute speaking test one by one. Speaking and Writing are both
                marked according to the Summative Speaking and Writing Marking
                scales.
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row my-5">
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
                        <td>$10 per week (Maximum $250)</td>
                      </tr>
                      <tr>
                        <th>Tuition Fee</th>
                        <td>:</td>
                        <td>$200/week</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="collapsible">
              <a
                @click="changeAngle($event)"
                data-position="right"
                class="w-100"
                data-bs-toggle="collapse"
                href="#target_client"
                role="button"
                aria-expanded="true"
                aria-controls="clps1"
              >
                <i class="fas fa-file-certificate"></i>
                &nbsp;
                <span>Targeted clients</span>
                &nbsp;
                <i class="fas fa-angle-right requirementAddon"></i>
              </a>
              <div class="my-3"></div>
              <div class="collapse" id="target_client">
                <div class="card card-body">
                  <table class="table table-responsive">
                    <tbody>
                      <tr>
                        <td colspan="3">
                          <p style="text-align: justify">
                            All international students with non-English speaking
                            background or English is not their first language
                            and wish to improve their English language skills,
                            come from a range of ages, but all are older than
                            18.
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3">
                          <p class="p-justify py-2">
                            Students enter at different levels depending on
                            their proficiency across the four macro skills when
                            they enrol. They are not native speakers of English
                            but have a desire to learn the language. Students
                            come from a range of countries (initially from Asia,
                            South America, Brazil, Europe and Middle East) and,
                            as a result, may have variations in their approach
                            to class, expected classroom norms and learner
                            beliefs.
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3">
                          <p class="p-justify py-2">
                            Students have the desire to participate in classes
                            that not only develop their language skills, but are
                            also enjoyable. Student’s motivation for learning
                            includes:
                          </p>
                          <br />
                          <ul>
                            <li style="text-align: justify">
                              <i class="fas fa-check text-success"></i>&nbsp;
                              Student visa holders that want to improve their
                              English for further study in Australia
                            </li>
                            <li style="text-align: justify">
                              <i class="fas fa-check text-success"></i>&nbsp;
                              Tourist visa holders that want to improve their
                              travel experience
                            </li>
                            <li style="text-align: justify">
                              <i class="fas fa-check text-success"></i>&nbsp;
                              Working Holiday visa holders that want to study
                              English but also do part time work. Often the
                              students study English first to get their language
                              skills up to working level.
                            </li>
                          </ul>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="collapsible">
              <a
                @click="changeAngle($event)"
                data-position="right"
                class="w-100"
                data-bs-toggle="collapse"
                href="#entry_requirement"
                role="button"
                aria-expanded="true"
                aria-controls="clps1"
              >
                <i class="fas fa-file-certificate"></i>
                &nbsp;
                <span>Entry Requirements</span>
                &nbsp;
                <i class="fas fa-angle-right requirementAddon"></i>
              </a>
              <div class="my-3"></div>
              <div class="collapse" id="entry_requirement">
                <div class="card card-body">
                  <table class="table table-responsive">
                    <tbody>
                      <tr>
                        <td colspan="3">
                          <p class="p-justify py-2">
                            Students must be over 18 years of age at the time of
                            course commencement. Students must secure an
                            appropriate visa that allows them to study in an
                            Australian Registered Training Organisation prior to
                            course commencement.
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="collapsible">
              <a
                @click="changeAngle($event)"
                data-position="right"
                class="w-100"
                data-bs-toggle="collapse"
                href="#eng_requirement"
                role="button"
                aria-expanded="true"
                aria-controls="clps1"
              >
                <i class="fas fa-file-certificate"></i>
                &nbsp;
                <span> English Language Entry Requirement</span>
                &nbsp;
                <i class="fas fa-angle-right requirementAddon"></i>
              </a>
              <div class="my-3"></div>
              <div class="collapse" id="eng_requirement">
                <div class="card card-body">
                  <table class="table table-responsive">
                    <tbody>
                      <tr>
                        <td colspan="3">
                          <p class="p-justify py-2">
                            General English is a programme of study designed for
                            international students with a beginner level of
                            general English. All students take an institute’s
                            placement test of grammar &amp; reading, writing and
                            speaking test. These tests and scales form the basis
                            of the Placement Tests. Because the courses can
                            accommodate students with only a very low grasp of
                            English, Institute of Business and Management
                            (Victoria) is able to accept students into the
                            Elementary course even if they are at a very low
                            level.
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="collapsible">
              <a
                @click="changeAngle($event)"
                data-position="right"
                class="w-100"
                data-bs-toggle="collapse"
                href="#academic_entry_requirement"
                role="button"
                aria-expanded="true"
                aria-controls="clps1"
              >
                <i class="fas fa-file-certificate"></i>
                &nbsp;
                <span> Academic Entry Requirement</span>
                &nbsp;
                <i class="fas fa-angle-right requirementAddon"></i>
              </a>
              <div class="my-3"></div>
              <div class="collapse" id="academic_entry_requirement">
                <div class="card card-body">
                  <table class="table table-responsive">
                    <tbody>
                      <tr>
                        <td colspan="3">
                          <p><strong> </strong></p>
                          <p class="p-justify py-2">
                            To gain entry to this course, students must have
                            successfully completed year 10 or secondary studies
                            in their home country equivalent to an Australian
                            Year 10. (Subject to the country Assessment Level)
                            and course.
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
</style>
