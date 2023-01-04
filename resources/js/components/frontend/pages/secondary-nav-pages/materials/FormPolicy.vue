<template>
  <base-layout>
    <section
      class="contact-us-area pt-80 pb-120 pt-md-100 pt-xs-100 pb-md-70 pb-xs-70"
    >
      <div class="container">
        <!-- <div class="row">
                  <div class="col-md-12 col-lg-12">
                      <h2 class=" pb-40 ml-20">Collect your copy from the downloadable pdf</h2>
                  </div>
              </div> -->
        <div class="row">
          <div class="text-center mb-5">
            <img
              :src="image_url + '/uploads/form-policy/Forms-pana.jpg'"
              style="height: 500px"
            />
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-xl-6 col-lg-6">
            <h4 class="mb-20 theme-color"><u>Student Policies</u></h4>
            <ol
              class="
                list-group list-group-numbered
                wow
                fadeInUp2
                animated
                card-body
              "
              data-wow-delay=".2s"
            >
              <a
                href="#"
                class="
                  list-group-item list-group-item-action
                  active
                  ibm-list-group-item
                "
                aria-current="true"
              >
                Form Name
              </a>

              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Complaints-and-Appeal-Policy.pdf'
                  "
                  donwload
                >
                  Complaints and Appeal Policy</a
                >
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Complaints-and-Appeal-Policy.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Attendance-Monitoring-Policy-and-Procedures.pdf'
                  "
                  donwload
                >
                  Attendance Monitoring Policy and Procedures</a
                >
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Attendance-Monitoring-Policy-and-Procedures.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Completion-within-expected-duration-Policy-Procedure.pdf'
                  "
                  donwload
                >
                  Completion within expected duration Policy Procedure</a
                >
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Completion-within-expected-duration-Policy-Procedure.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Credit-Transfer-Policy-and-Procedure-1.pdf'
                  "
                  donwload
                >
                  Credit Transfer Policy and Procedure</a
                >
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Credit-Transfer-Policy-and-Procedure-1.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Critical-Incident-Policy-Procedure-1.pdf'
                  "
                  donwload
                >
                  Critical Incident Policy and Procedure</a
                >
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Critical-Incident-Policy-Procedure-1.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Defer-suspension-and-cancellation-Policy.pdf'
                  "
                  donwload
                >
                  Defer Suspension and Cancellation Policy</a
                >
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Defer-suspension-and-cancellation-Policy.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
            </ol>
          </div>
          <div class="col-xl-6 col-lg-6">
            <h4 class="mb-20 theme-color"><u>Student Policies</u></h4>
            <ol
              class="
                list-group list-group-numbered
                wow
                fadeInUp2
                animated
                card-body
              "
              data-wow-delay=".2s"
            >
              <a
                href="#"
                class="
                  list-group-item list-group-item-action
                  active
                  ibm-list-group-item
                "
                aria-current="true"
              >
                Form Name
              </a>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Education-Agents-Policy-and-procedure.pdf'
                  "
                  donwload
                >
                  Education Agents Policy and Procedure</a
                >
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Education-Agents-Policy-and-procedure.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Fee-and-Refund-Policy-and-procedures.pdf'
                  "
                  donwload
                >
                  Fee and Refund Policy and Procedures</a
                >
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Fee-and-Refund-Policy-and-procedures.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Monitoring Student Course Progress Policy Procedure _2021.pdf'
                  "
                  donwload
                >
                  Monitoring Student Course Progress Policy Procedure</a
                >
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Monitoring Student Course Progress Policy Procedure _2021.pdf'
                  "
                  donwload
                  ><i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Recognition-to-Prior-Learning-Policy-and-Procedure.pdf'
                  "
                  donwload
                >
                  Recognition to Prior Learning Policy and Procedure</a
                >
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Recognition-to-Prior-Learning-Policy-and-Procedure.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Student-Transfer-policy-and-procedure.pdf'
                  "
                  donwload
                >
                  Student Transfer Policy and Procedure</a
                >
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Student-Transfer-policy-and-procedure.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
            </ol>
          </div>
        </div>
        <div class="mt-80 row">
          <div class="col-xl-6 col-lg-6">
            <h4 class="ml-20 mb-20 theme-color"><u>Student Forms</u></h4>
            <ol
              class="
                list-group list-group-numbered
                wow
                fadeInUp2
                animated
                card-body
              "
              data-wow-delay=".2s"
            >
              <a
                href="#"
                class="
                  list-group-item list-group-item-action
                  active
                  ibm-list-group-item
                "
                aria-current="true"
              >
                Form Name
              </a>

              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Application_for_Release_international_student.pdf'
                  "
                  donwload
                  >Application for Release International Student
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Application_for_Release_international_student.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Application_to_Amend_Enrolment_form-2.pdf'
                  "
                  donwload
                  >Application to Amend Enrolment Form
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Application_to_Amend_Enrolment_form-2.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Certificate-request-form.pdf'
                  "
                  donwload
                  >Certificate Request Form
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Certificate-request-form.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Change-of-Personal-and-Or-Contact-details.pdf'
                  "
                  donwload
                  >Change of Personal and Or Contact Details
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Change-of-Personal-and-Or-Contact-details.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/December-2021_Enrollment-Form_IBM.docx.pdf'
                  "
                  donwload
                  >Enrollment Form
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/December-2021_Enrollment-Form_IBM.docx.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
            </ol>
          </div>
          <div class="col-xl-6 col-lg-6">
            <h4 class="ml-20 mb-20 theme-color"><u>Student Forms</u></h4>
            <ol
              class="
                list-group list-group-numbered
                wow
                fadeInUp2
                animated
                card-body
              "
              data-wow-delay=".2s"
            >
              <a
                href="#"
                class="
                  list-group-item list-group-item-action
                  active
                  ibm-list-group-item
                "
                aria-current="true"
              >
                Form Name
              </a>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/IBM-student-Handbook-2022.pdf'
                  "
                  donwload
                  >IBM's International Student Handbook</a
                >
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/IBM-student-Handbook-2022.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Refund-Applicatin-Form.pdf'
                  "
                  donwload
                  >Refund Application Form
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Refund-Applicatin-Form.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/IBM_Agent-Agreement_Feb-2021.pdf'
                  "
                  donwload
                  >IBM Agent Agreement
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/IBM_Agent-Agreement_Feb-2021.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/IBM_Agent-Application_Feb 2021.pdf'
                  "
                  donwload
                  >IBM Agent Application
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/IBM_Agent-Application_Feb 2021.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-start
                "
              >
                <a
                  class="fw-bold me-auto"
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Student_Complaints_Appeal_form.pdf'
                  "
                  donwload
                  >Student Complaints Appeal Form
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Student_Complaints_Appeal_form.pdf'
                  "
                  donwload
                >
                  <i class="far fa-file-pdf theme-color"></i
                ></a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>
  </base-layout>
</template>

<script>
import path from "../../../../../src/global-config/mixin/path-solution";
import BaseLayout from "../../../../frontend/layouts/BaseLayout.vue";
export default {
  components: { BaseLayout },
  mixins: [path],
  data() {
    return {};
  },
};
</script>

<style scoped>
.fa-file-pdf {
  font-size: 2em !important;
}
</style>