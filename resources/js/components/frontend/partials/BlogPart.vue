<template>
        <!-- blog-area start -->
        <section class="blog-area mr-100 ml-100">
            <div class="blog-bg gradient-bg pl-100 pr-100 pt-150 pb-120 pt-md-100 pb-md-70 pt-xs-100 pb-xs-70">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-60">
                                <h5 class="bottom-line mb-25">Latest Blogs</h5>
                                <h2 class="mb-25">Our Latest Blogs & News</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" v-for="post, index in posts" :key="index">
                            <div class="z-blogs mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                                <div class="z-blogs__thumb mb-30">
                                <router-link :to="'blogs/'+post.slug.replaceAll('_', '-', post.slug.toLowerCase())"><img class="img-blog" :src="image_url+'/uploads/post/'+post.feature_image" alt="blog-img"></router-link>
                                </div>
                                <div class="z-blogs__content">
                                    <!-- <h5 class="mb-25">Online . School . Skill</h5> -->
                                    <h4 class="sub-title mb-15"><router-link :to="'blogs/'+post.slug.replaceAll('_', '-', post.slug.toLowerCase())">{{post.title.substring(0,100)}}</router-link></h4>
                                    <div class="z-blogs__meta d-sm-flex justify-content-between pt-20">
                                        <span>Date : {{post.created_at}}</span>
                                        <span>By {{post.user_name}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center mt-20 mb-30 wow fadeInUp2 animated" data-wow-delay='.4s'>
                            <router-link to="/blogs" class="theme_btn">All blogs</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area end -->
</template>

<script>
import path from '../../../src/global-config/mixin/path-solution'
export default {
    mixins:[path],
    data(){
        return{
            posts:[]
        }
    },

    created(){
        this.getBlogPost()
    },

    methods:{
        getBlogPost(){
            axios.get(this.base_url+'/api/get-blog-post')
            .then(res=>{
                this.posts = res.data.data
            })
        }
    }
}
</script>