<template>
  <base-layout>
    <div class="text-center mt-5">
      <img
        :src="image_url + '/uploads/useful-link/useful_link.jpg'"
        style="height: 450px"
      />
    </div>
    <section
      class="about-us-area pt-80 pb-120 pt-md-100 pb-md-70 pt-xs-100 pb-xs-70"
    >
      <div class="container">
        <ul class="list-group">
          <li class="list-group-item">
            <a
              target="_blank"
              class="btn-link"
              href="https://www.studymelbourne.vic.gov.au/welcome-2020/checklist-for-newly-arrived-students "
            >
              Checklist for newly arrived students&nbsp;
              <i class="fa fa-external-link" aria-hidden="true"></i>
            </a>
          </li>
          <li class="list-group-item">
            <a
              target="_blank"
              class="btn-link"
              href="http://www.education.vic.gov.au/training/providers/rto/Pages/competency.aspx "
            >
              Standards for RTO’s 2015&nbsp;
              <i class="fa fa-external-link" aria-hidden="true"></i>
            </a>
          </li>
          <li class="list-group-item">
            <p><strong>Overseas Students Ombudsman</strong></p>
            <a target="_blank" class="btn-link" href="http://www.oso.gov.au/">
              http://www.oso.gov.au/&nbsp;
              <i class="fa fa-external-link" aria-hidden="true"></i>
            </a>
            <br />
            <a
              target="_blank"
              class="btn-link"
              href="http://www.oso.gov.au/useful-links/"
            >
              http://www.oso.gov.au/useful-links/ &nbsp;
              <i class="fa fa-external-link" aria-hidden="true"></i>
            </a>
            <br />
            <a
              target="_blank"
              class="btn-link"
              href="https://www.orange.edu.au//wp-content/uploads/pdf/International-students.pdf"
            >
              https://www.orange.edu.au//wp-content/uploads/pdf/International-students.pdf
              &nbsp;
              <i class="fa fa-external-link" aria-hidden="true"></i>
            </a>
          </li>
          <li class="list-group-item">
            <p><strong>ASQA</strong></p>
            <a
              target="_blank"
              class="btn-link"
              href="http://www.asqa.gov.au/for-students/for-students.html"
            >
              http://www.asqa.gov.au/for-students/for-students.html &nbsp;
              <i class="fa fa-external-link" aria-hidden="true"></i>
            </a>
          </li>
          <li class="list-group-item">
            <p>
              <strong>ELICOS</strong>
            </p>
            <a target="_blank" class="btn-link" href="http://www.elicos.com/">
              http://www.elicos.com/ &nbsp;
              <i class="fa fa-external-link" aria-hidden="true"></i>
            </a>
          </li>
          <li class="list-group-item">
            <p>
              <strong>LLN</strong>
            </p>
            <a
              target="_blank"
              class="btn-link"
              href=" http://www.readingwritinghotline.edu.au "
            >
              http://www.readingwritinghotline.edu.au &nbsp;
              <i class="fa fa-external-link" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div>
    </section>
  </base-layout>
</template>
<script>
import BaseLayout from "../../../layouts/BaseLayout.vue";
import path from "../../../../../src/global-config/mixin/path-solution";
export default {
  mixins: [path],
  components: { BaseLayout },
};
</script>