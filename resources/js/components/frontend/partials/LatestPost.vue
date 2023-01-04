<template>
  <div class="col-lg-4">
                        <div class="blog-widget-area">
                            <!-- <div class="widget mb-50">
                                <div class="blog-search-widget">
                                    <form action="#" class="comments-form mb-20">
                                        <input type="text" placeholder="Type To Search">
                                    </form>
                                    <button class="theme_btn comment_btn">Search Now</button>
                                </div>
                            </div>
                            <div class="widget mb-50">
                                <div class="blog-categories-widget">
                                    <h4 class="sub-title pb-20 mb-25 pt-25">Categories</h4>
                                    <div class="courses-tag-btn cat-btn">
                                        <a href="#">Online School</a>
                                        <a href="#">Technology(36)</a>
                                        <a href="#">Product Design(36)</a>
                                        <a href="#">Business(16)</a>
                                        <a href="#">Programming(21)</a>
                                        <a href="#">Web Development(17)</a>
                                        <a href="#">Digital Marketing(07)</a>
                                        <a href="#">Content Writer(06)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget mb-50">
                                <div class="blog-categories-widget">
                                    <h4 class="sub-title pb-20 mb-25 pt-25">Recent Post</h4>
                                    <ul class="blog-recent-post">
                                       <li>
                                            <div class="posts mb-20">
                                                <img src="assets/img/blog/24.jpg" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details.html">Lorem Ipsum is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                       <li>
                                             <div class="posts mb-20">
                                                <img src="assets/img/blog/25.jpg" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details.html">Ipsum Lorem is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                       <li>
                                           <div class="posts mb-20">
                                                <img src="assets/img/blog/26.jpg" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details.html">Lorem Ipsum is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                       <li>
                                           <div class="posts mb-20">
                                                <img src="assets/img/blog/27.jpg" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details.html">Ipsum Lorem is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                       <li>
                                             <div class="posts mb-20">
                                                <img src="assets/img/blog/28.jpg" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details.html">Lorem Ipsum is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                       <li>
                                            <div class="posts mb-20">
                                                <img src="assets/img/blog/29.jpg" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details.html">Ipsum Lorem is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                    </ul>
                                </div>
                            </div> -->
                            <div class="widget mb-50">
                                <h4 class="sub-title pb-20 mb-25 pt-25">Social Media</h4>
                                <div class="blog-social-widget">
                                     <div class="social-media mb-30">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="widget mb-50">
                                <div class="blog-categories-widget">
                                    <h4 class="sub-title pb-20 mb-25 pt-25">Popular Post</h4>
                                    <ul class="blog-recent-post">
                                       <li v-for="post, index in posts" :key="index">
                                            <div class="posts mb-20">
                                                <img style="width:100%;" :src="image_url+'/uploads/post/'+post.feature_image" alt="" class="posts__thumb mb-15">
                                                <p>{{post.created_at}}</p>
                                                <h6><router-link :to="'/blogs/'+post.slug.replaceAll('_', '-', post.slug.toLowerCase())" v-html="post.title"></router-link></h6>
                                            </div>
                                       </li>
                                    </ul>
                                </div>
                            </div>
                             <div class="widget mb-50">
                                <div class="blog-categories-widget">
                                    <h4 class="sub-title pb-20 mb-25 pt-25">Tags</h4>
                                    <div class="courses-tag-btn cat-btn tag-btn">
                                        <a href="#">Online Class</a>
                                        <a href="#">Skill Share</a>
                                        <a href="#">Web Learn</a>
                                        <a href="#">Development</a>
                                        <a href="#">Direction</a>
                                        <a href="#">Certificate</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    
</template>

<script>
import path from '../../../src/global-config/mixin/path-solution'
export default {
  
    mixins:[path],
    data(){
        return{
            posts:{}
        }
    },

    created(){
        this.getPost()
    },

    methods:{
      
        getPost() {
            axios.get(this.base_url + '/api/get-blog-post')
                .then(res => {
                    this.posts = res.data.data
            })
        }
    }

    
}
</script>