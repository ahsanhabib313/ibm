<template>
    <main>
        <bread-crumb></bread-crumb>
        <slot></slot>
    </main>
</template>

<script>
import BreadCrumb from '../partials/BreadCrumb.vue'

export default {
  components: { BreadCrumb },
   
}
        
</script>