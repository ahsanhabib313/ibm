<template>
  <div>
    <h5 class="input-title">Recognition of Prior Learning/ Credit Transfer</h5>

    <label class="form-label">
      Do you want to apply for RPL/Credit Transfer?
    </label>

    <div>
      <label>
        <input
          type="radio"
          class="input-form-check-input"
          name="rpl_apply"
          value="yes"
          v-model="rpl_apply"
        />
        Yes
      </label>
      <label class="ms-5">
        <input
          type="radio"
          class="input-form-check-input"
          name="rpl_apply"
          value="no"
          v-model="rpl_apply"
        />
        No
      </label>
    </div>

    <small>
      If Yes, you must attach certified translated (English) copies of your
      supporting documents (e.g. employment letter,position descriptions,
      Statement of Attainment, etc.). so that Institute of Business and
      Management (Victoria) can assessyour eligibility for RPL/Credit
      TransferComplete RPL/CT form available at our reception and website.
    </small>
  </div>
</template>

<script>
export default {
  data() {
    return {
      rpl_apply: null,
    };
  },
};
</script>
