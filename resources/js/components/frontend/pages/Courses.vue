<template>
    <base-layout>
        <section class="contact-us-area pt-150 pb-120 pt-md-100 pt-xs-100 pb-md-70 pb-xs-70">
            <great-deal></great-deal>
            <popular-course></popular-course>
            <looking-for></looking-for>
        </section>
    </base-layout>
</template>

<script>
    import path from '../../../src/global-config/mixin/path-solution'
    import BaseLayout from '../layouts/BaseLayout.vue'
import GreatDeal from '../partials/GreatDeal.vue'
import LookingFor from '../partials/LookingFor.vue'
import PopularCourse from '../partials/PopularCourse.vue'
    export default {
        mixins: [path],
        components: {
            BaseLayout,
                GreatDeal,
                PopularCourse
       ,
                LookingFor },

        data() {
            return {
                courses: []
            }
        },

        created() {
            this.getCourse()
        },

        methods: {
            getCourse() {
                axios.get(this.base_url + '/api/get-course')
                    .then(res => {
                        this.courses = res.data.data
                    })
            }
        }

    }

</script>
