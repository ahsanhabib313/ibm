<template>
    <base-layout>

              <!-- blog-area start -->
        <section class="blog-area">
            <div class="blog-bg pt-150 pb-120 pt-md-100 pb-md-70 pt-xs-100 pb-xs-70">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-60">
                                <h2 class="mb-25">Our Latest Blogs & News</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6"  v-for="post, index in posts" :key="index">
                            <div class="z-blogs mb-30">
                                <div class="z-blogs__thumb mb-30">
                                <router-link :to="'/blogs/'+post.slug.replaceAll('_', '-', post.slug.toLowerCase())"><img :src="image_url+'/uploads/post/'+post.feature_image" alt=""
                                                class="img-fluid"></router-link>
                                </div>
                                <div class="z-blogs__content">
                                    <!-- <h5 class="mb-25">Online . School . Skill</h5> -->
                                    <h4 class="sub-title mb-15"><router-link :to="'/blogs/'+post.slug.replaceAll('_', '-', post.slug.toLowerCase())" v-html="post.title"></router-link></h4>
                                    <div class="z-blogs__meta d-sm-flex justify-content-between pt-20">
                                        <span>Date : {{post.created_at}}</span>
                                        <span>By {{post.user_name}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center mt-20 mb-30">
                            <a href="#" class="theme_btn">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area end -->
       
    </base-layout>
</template>

<script>
    import path from '../../../src/global-config/mixin/path-solution'
    import BaseLayout from '../layouts/BaseLayout.vue'
import LatestPost from '../partials/LatestPost.vue'
    export default {
        mixins: [path],
        components: {
            BaseLayout,
            LatestPost
        },
        data() {
            return {
                posts: []
            }
        },

        created() {
            this.getPost()
        },

        methods: {
            getPost() {
                axios.get(this.base_url + '/api/get-blog-post')
                    .then(res => {
                        this.posts = res.data.data
                    })
            }
        }
    }

</script>
