<template>
  <base-layout>
    <!-- blog-details-area start -->
    <section
      class="
        blog-details-area
        pt-50
        pb-105
        pt-md-100
        pb-md-55
        pt-xs-100
        pb-xs-55
      "
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="blog-details-box mb-45">
              <h2>{{ post.title }}</h2>
              <ul class="blogs__meta mb-30">
                <li>
                  <span class="blog-author">By {{ post.user_name }}</span>
                </li>
                <li>
                  <span
                    ><img
                      :src="
                        image_url +
                        '/frontend/assets/img/icon/material-date-range.svg'
                      "
                      alt="mate-date"
                    />
                    {{ post.created_at }}</span
                  >
                </li>
                <!-- <li><span><img :src="image_url+'/frontend/assets/img/icon/material-access-time.svg'" alt="mate-date"> 03</span></li>
                               <li> <span><img :rc="image_url+'/frontend/assets/img/icon/material-comment.svg'" alt="mate-date"> 5 Min</span></li>
                               <li>
                                   <div class="social-media blog-details-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </li> -->
              </ul>
              <img
                class="img-fluid blog-details-img mb-35"
                :src="image_url + '/uploads/post/' + post.feature_image"
                alt="blog-details-img"
              />

              <p v-html="post.content"></p>
            </div>
          </div>
          <latest-post></latest-post>
        </div>
      </div>
    </section>
    <!-- blog-details-area end -->
  </base-layout>
</template>

<script>
import path from "../../../src/global-config/mixin/path-solution";
import BaseLayout from "../layouts/BaseLayout.vue";
import LatestPost from "../partials/LatestPost.vue";
export default {
  components: {
    BaseLayout,
    LatestPost,
  },
  mixins: [path],
  data() {
    return {
      post: {},
    };
  },

  watch: {
    "$route.params.slug"(newSlug, oldSlug) {
      this.getSingleBlogs();
    },
  },

  created() {
    this.getSingleBlogs();
  },

  methods: {
    getSingleBlogs() {
      let slug = this.$route.params.slug.replaceAll(
        "-",
        "_",
        this.$route.params.slug.toLowerCase()
      );
      axios
        .get(this.base_url + "/api/get-single-blog-post/" + slug)
        .then((res) => {
          this.post = res.data.data;
        });
    },
  },
};
</script>
