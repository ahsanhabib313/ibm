<template>
  <base-layout>
    <section
      class="about-us-area pt-50 pb-0 pt-md-100 pb-md-70 pt-xs-100 pb-xs-70"
    >
      <div class="container">
        <div
          class="
            row
            pl-20
            pr-75 pr-lg-0 pr-md-0 pr-xs-0
            pl-lg-0 pl-md-0 pl-xs-0
          "
        >
          <div class="col-md-4">
            <h3 class="theme-color mb-10">ESOS Student Fact Sheet</h3>
            <a
              class="btn btn-lg theme-bg text-white"
              href="https://internationaleducation.gov.au/Regulatory-Information/Documents/ESOSFrameworkfactsheetfinaldraft9May2014(2).pdf"
              download
              >Download <i class="far fa-file-pdf text-white"></i
            ></a>
          </div>
        </div>
      </div>
    </section>
    <div class="row">
      <div class="text-center mb-5">
        <img :src="image_url + '/uploads/aqf/5607.jpg'" style="height: 400px" />
      </div>
    </div>
  </base-layout>
</template>
<script>
import path from "../../../../../src/global-config/mixin/path-solution";
import BaseLayout from "../../../layouts/BaseLayout.vue";
export default {
  mixins: [path],
  components: { BaseLayout },
};
</script>