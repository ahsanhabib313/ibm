<template>
  <base-layout>
    <section
      class="about-us-area pt-50 pb-120 pt-md-100 pb-md-70 pt-xs-100 pb-xs-70"
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
          <h3 class="theme-color mb-10"></h3>
          <div class="col-md-6">
            <h3 class="theme-color mb-20">Agent List</h3>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Download</th>
                  <th>Title</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <a
                      href="https://docs.google.com/document/d/1VkMKzHF9e37ob2XrNDY0LvOTcZNkWPJnL6hqm1Q_bKo/edit?usp=sharing"
                      ><i class="far fa-file-pdf theme-color"></i
                    ></a>
                  </td>
                  <td>Agent List</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="text-center">
            <img
              :src="image_url + '/uploads/agent-list/Resume-folder-pana.jpg'"
              style="height: 500px"
            />
          </div>
        </div>
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

<style scoped>
.fa-file-pdf {
  font-size: 2em !important;
}
</style>