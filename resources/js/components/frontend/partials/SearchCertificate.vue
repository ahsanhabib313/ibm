<template>
  <div class="container">
    <div class="my-3"></div>

    <div class="row mb-50 mt-50">
      <div class="col-md-6 mx-auto">
        <h2 class="my-3 text-center" style="font-size: 35px">
          Check your certificate status
        </h2>
        <p class="text-center">
          Provide required information and see the status of certificate issued
          or not.
        </p>
        <div class="my-3"></div>
        <div class="card">
          <div class="card-body px-5">
            <form @submit.prevent="onSubmitHandler()" id="searchForCertificate">
              <div class="form-group">
                <label for="student_id">Student ID</label>
                <input
                  type="text"
                  name="student_id"
                  id="student_id"
                  class="form-control"
                  required
                />
              </div>
              <div class="form-group">
                <label for="course_code">Course Code</label>
                <input
                  type="text"
                  name="course_code"
                  id="course_code"
                  class="form-control"
                  required
                />
              </div>
              <div class="my-3">
                <button type="submit" class="btn btn-primary btn-theme w-100">
                  Search Certificate
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import BaseLayout from "../layouts/BaseLayout.vue";
import Path from "../../../src/global-config/mixin/path-solution";

export default {
  components: { BaseLayout },
  mixins: [Path],
  methods: {
    onSubmitHandler() {
      let formData = new FormData($("#searchForCertificate")[0]);
      axios
        .post(this.base_url + "/api/search-for-certificate", formData)
        .then((res) => {
          if (res.status == 200) {
            this.$swal(res.data.message);
            console.log(res);
          }
        })
        .catch((err) => {
          this.$swal("Hello Vue world!!!");
          console.error();
        });
    },
  },
};
</script>
<style>
.btn-theme {
  background-color: #f1592a !important;
  border-color: #f1592a !important;
}
</style>