<template>
   <base-layout>
    <h1 class="custom-color-h animate__animated animate__fadeIn">
        Welcome to your profile !
    </h1>
   </base-layout> 
</template>

<script>
import BaseLayout from '../layouts/BaseLayout.vue'
import path from '../../../src/global-config/mixin/path-solution'
export default {
  mixins:[path],
  components: { BaseLayout },
    
}
</script>