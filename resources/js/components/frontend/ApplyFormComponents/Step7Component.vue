<template>
  <div>
    <h5 class="input-title">Set a password for your registration</h5>

    <div class="form-group">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" v-model="password" />
    </div>

    <div class="d-flex justify-content-end">
      <router-link to="#" class="btn btn-lg theme-bg m-2  " @click.native="goToBack"><i class="fa fa-arrow-left"></i> Previous</router-link>
      <button class="btn btn-lg theme-bg m-2" @click="save">Submit</button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      password: "",
    };
  },

  methods: {
    save() {
      this.$emit("save", {
        password: this.password,
      });
    },

    goToBack(){
      this.$emit('goToBack', 1)
    }
  },
};
</script>
