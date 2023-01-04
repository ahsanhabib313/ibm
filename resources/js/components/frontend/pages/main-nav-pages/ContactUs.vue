<template>
  <base-layout>
    <!--page-title-area start-->

    <!--page-title-area end-->
    <!--contact-us-area start-->
    <section
      class="contact-us-area pt-50 pb-50 pt-md-100 pt-xs-100 pb-md-70 pb-xs-70"
    >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div class="contact-img mb-30">
              <img
                class="img-fluid"
                :src="image_url + '/frontend/assets/img/contact/01.jpg'"
                alt=""
              />
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="contact-wrapper pl-75 mb-30">
              <div class="section-title mb-30">
                <h2>Get In Touch With Us</h2>
                <p>
                  If you have any questions and queries just feel free to
                  contact with us.
                </p>
              </div>
              <div class="single-contact-box mb-30">
                <div class="contact__iocn">
                  <img
                    :src="
                      image_url +
                      '/frontend/assets/img/icon/material-location-on.svg'
                    "
                    alt=""
                  />
                </div>
                <div class="contact__text">
                  <h5>60 Belfast St BROADMEADOWS VIC 3047</h5>
                </div>
              </div>
              <div class="single-contact-box cb-2 mb-30">
                <div class="contact__iocn">
                  <img
                    :src="image_url + '/frontend/assets/img/icon/phone-alt.svg'"
                    alt=""
                  />
                </div>
                <div class="contact__text">
                  <!-- <h5>+406538251</h5> -->
                  <h5>+(03) 9478 3163</h5>
                </div>
              </div>
              <div class="single-contact-box cb-3 mb-30">
                <div class="contact__iocn">
                  <img
                    :src="
                      image_url + '/frontend/assets/img/icon/feather-mail.svg'
                    "
                    alt=""
                  />
                </div>
                <div class="contact__text">
                  <h5>info@ibm.vic.edu.au</h5>
                  <!-- <h5>ceo@ibm.vic.edu.au</h5> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--contact-us-area end-->
    <!--contact-map-area start-->
    <section class="contact-map-area">
      <div class="container-fluid px-0">
        <div class="row gx-0">
          <div class="col-lg-12">
            <div class="conatct-map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3157.7506697793237!2d144.9279176146829!3d-37.678566034090956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65a9aed0d67b9%3A0xf470bbdbefcba854!2s60%20Belfast%20St%2C%20Broadmeadows%20VIC%203047%2C%20Australia!5e0!3m2!1sen!2sbd!4v1647254922065!5m2!1sen!2sbd"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--contact-map-area end-->
    <!--contact-form-area start-->
    <section
      class="
        contact-form-area
        pt-50
        pb-50
        pt-md-100 pt-xs-100
        pb-md-70 pb-xs-70
      "
    >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="contact-form-wrapper mb-30">
              <h2 class="mb-45">Contact Us</h2>
              <pulseLoader v-if="is_sent" class="text-center"></pulseLoader>
              <div
                class="alert alert-success contact__msg"
                style="display: none"
                role="alert"
              >
                Your message was sent successfully.
              </div>
              <form
                class="row gx-3 comments-form contact-form form"
                id="myform"
                @submit.prevent="sendContactMessage()"
              >
                <div class="col-lg-12 col-md-12 mb-30">
                  <input
                    type="text"
                    name="name"
                    v-model="contactForm.name"
                    placeholder="Full Name"
                  />
                </div>
                <div class="col-lg-6 col-md-6 mb-30">
                  <input
                    type="text"
                    name="phone"
                    v-model="contactForm.phone"
                    placeholder="Phone Number"
                  />
                </div>
                <div class="col-lg-6 col-md-6 mb-30">
                  <input
                    type="text"
                    name="subject"
                    v-model="contactForm.subject"
                    id="subject"
                    placeholder="Subject"
                  />
                </div>
                <div class="col-lg-6 mb-30">
                  <input
                    type="text"
                    name="email"
                    v-model="contactForm.email"
                    placeholder="Email Name"
                  />
                </div>
                <div class="col-lg-6 mb-30">
                  <input type="file" name="contact_file" id="contact_file" />
                </div>
                <div class="col-lg-12 mb-10">
                  <textarea
                    name="message"
                    v-model="contactForm.message"
                    id="commnent"
                    cols="30"
                    rows="10"
                    placeholder="Write a Message"
                  ></textarea>
                </div>
                <div class="col-lg-12 mb-30">
                  <button type="submit" class="theme_btn message_btn mt-20">
                    Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contact-img contact-img-02 mb-30">
              <img
                class="img-fluid"
                :src="image_url + '/frontend/assets/img/contact/02.jpg'"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--contact-form-area end-->
  </base-layout>
</template>

<script>
import path from "../../../../src/global-config/mixin/path-solution";
import BaseLayout from "../../layouts/BaseLayout.vue";
import message from "../../../../src/global-config/mixin/message";
export default {
  components: {
    BaseLayout,
  },

  mixins: [path, message],

  data() {
    return {
      contactForm: {},
      is_sent: false,
    };
  },

  created() {},

  methods: {
    sendContactMessage() {
      this.is_sent = true;
      let form_data = new FormData($(".form")[0]);
      axios
        .post(this.base_url + "/api/send-contact", form_data)
        .then((res) => {
          console.log(res.data);
          if (res.status == 200) {
            this.toastMessage("success", res.data.message);
            this.is_sent = false;
            this.contactForm = {};
          }
        })
        .catch((error) => {
          if (error.response.status == 404) {
            this.errorMsg = error.response.data.message[0];
          } else if (error.response.status == 401) {
            this.errorMsg = error.response.data.message[0];
          } else if (error.response.status == 422) {
            this.is_sent = false;
            $.each(error.response.data.errors, function (item, index) {
              let input = jQuery(document).find('input[name="' + item + '"]');
              let inputAfter = jQuery(document).find(
                'input[name="' + item + '"] + span'
              );

              input.addClass("is-invalid");

              inputAfter.remove();
              input.after(
                '<span class="text-danger">' +
                  error.response.data.errors[item] +
                  "</span>"
              );
            });
          } else {
          }
        });
    },
  },
};
</script>
