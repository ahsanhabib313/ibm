<template>
  <base-layout>
    <section
      class="
        contact-us-area
        pt-150
        pb-120
        pt-md-100 pt-xs-100
        pb-md-70 pb-xs-70
      "
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <h3 class="mb-20">Applicatin Form</h3>
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
                  target="_blank"
                >
                  Check the courses on Institute of Business and Management
                  (Victoria)’s website
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Complaints-and-Appeal-Policy.pdf'
                  "
                  target="_blank"
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
                  target="_blank"
                >
                  Select the course you want to study at Institute of Business
                  and Management (Victoria)
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Completion-within-expected-duration-Policy-Procedure.pdf'
                  "
                  target="_blank"
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
                  target="_blank"
                >
                  Read the course brochure for your selected course
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Credit-Transfer-Policy-and-Procedure-1.pdf'
                  "
                  target="_blank"
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
                  target="_blank"
                >
                  Check your eligibility and suitability for the course
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Critical-Incident-Policy-Procedure-1.pdf'
                  "
                  target="_blank"
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
                  target="_blank"
                >
                  Read Institute of Business and Management (Victoria)’s student
                  handbook for the pre-enrolment information
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Defer-suspension-and-cancellation-Policy.pdf'
                  "
                  target="_blank"
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
                    '/frontend/assets/pdf/form-policy/Education-Agents-Policy-and-procedure.pdf'
                  "
                  target="_blank"
                >
                  Apply for the course by filling application form (Attach
                  required documents)
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Education-Agents-Policy-and-procedure.pdf'
                  "
                  target="_blank"
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
                  target="_blank"
                >
                  Receive your offer letter and agreement
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Fee-and-Refund-Policy-and-procedures.pdf'
                  "
                  target="_blank"
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
                    '/frontend/assets/pdf/form-policy/Recognition-to-Prior-Learning-Policy-and-Procedure.pdf'
                  "
                  target="_blank"
                >
                  If you are happy with offer and agreement, sign and send it
                  back to us with evidence of fee payment
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Recognition-to-Prior-Learning-Policy-and-Procedure.pdf'
                  "
                  target="_blank"
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
                  target="_blank"
                >
                  Receive your confirmation of Enrollment (COE)
                </a>
                <a
                  :href="
                    image_url +
                    '/frontend/assets/pdf/form-policy/Student-Transfer-policy-and-procedure.pdf'
                  "
                  target="_blank"
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
                <a class="fw-bold me-auto" href=""
                  >Apply your student visa and make travel arrangements to
                  arrive in Australia
                </a>
                <a href=""><i class="far fa-file-pdf theme-color"></i></a>
              </li>
            </ol>
          </div>
          <div class="col-lg-6 col-md-6">
            <h3 class="mb-20">Education Agents</h3>
            <p>
              Institute of Business and Management (Victoria) engages the
              services of education agents on a regular basis to recruit
              students and provide assistance during the application process at
              Institute of Business and Management (Victoria). They are required
              to follow regulations for the recruitment and placement of
              international students. Following is the list of Agents engaged
              with Institute of Business and Management (Victoria).
            </p>
          </div>
        </div>
      </div>
    </section>
  </base-layout>
</template>

<script>
import path from "../../../../../src/global-config/mixin/path-solution";
import BaseLayout from "../../../layouts/BaseLayout.vue";
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