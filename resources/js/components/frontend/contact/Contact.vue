<template>
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-md-6">
                       
            <div class="card">
                <div class="card-body">
                    <h3 class="mt-2 mb-2">Keep In Touch</h3><hr>
                    <pulseLoader v-if="is_sent" class="text-center"></pulseLoader>
                        <form class="form" id="myform" @submit.prevent="sendContactMessage()">
                        <div class="form-group mt-4 mb-4">
                            
                            <input type="text" name="name" v-model="contactForm.name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group mt-4 mb-4">
                           
                            <input type="text" name="email" v-model="contactForm.email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group mt-4 mb-4">
                           
                            <input type="text" name="phone" v-model="contactForm.phone" class="form-control" placeholder="Enter Phone">
                        </div>
                        <div class="form-group mt-4 mb-4">
                            
                            <textarea name="message" v-model="contactForm.message" id="" class="form-control" rows="5"></textarea>
                        </div>

                        <div class="form-group mt-4 mb-4"><input type="file" name="contact_file" class="form-control"></div>
                        <!-- <div class="form-group mt-2 mb-2">
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label for="">{{Math.floor(Math.random() * 2)}}</label>
                                    <input type="text" class="form-control">
                                    </div>
                                <div class="col-md-3">
                                    <label for="">{{Math.floor(Math.random() * 1)}}</label>
                                    <input type="text" class="form-control">
                                    </div>
                                <div class="col-md-6 mt-2">= ?</div>
                            </div>
                        </div> -->
                        <div class="form-group mt-3 mb-4">
                            <button type="submit"  class="btn btn-md btn-primary float-end">Send</button>
                        </div>
                    </form>
                    </div>
                        
            </div>
            </div>
            <div class="col-md-6">
                    <h5 class="social-link mb-4">
                        At Guaranteed Power Plumbing Drain Cleaning, Call at (818)-773-7599. your satisfaction is guaranteed.
                    </h5>

                    <ul class="contact-us-ul">
                        <li class="contact-us-li"><div class="contact-us-icon"><i class="contact-us-icon-style text-white fa fa-map-marker"></i></div> <div class="content"><h5>Location</h5> <p>8444 Reseda Blvd, Northridge, CA</p></div></li>
                        <li class="contact-us-li"><div class="contact-us-icon"><i class="contact-us-icon-style text-white fa fa-envelope"></i> </div><div class="content"><h5>Email Address</h5> <p><a href="mailto:sublimeproinc@gmail.com">sublimeproinc@gmail.com</a></p></div></li>
                        <li class="contact-us-li"><div class="contact-us-icon"><i class="contact-us-icon-style text-white fa fa-phone"></i> </div><div class="content"><h5>Phone Number</h5> <p><a href="tel:8187737599">(818) 773-7599</a></p></div></li>
                    </ul>

                    <div class="social-link">
                        <h4 class="mt-4 mb-4">Follow Us</h4>
                        <ul class="social">
                            <li><a class="text-primary" href="https://www.facebook.com/MegaBusinessUSAcom-294802020626441/"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a class="text-primary" href="https://twitter.com/MegaBusinessUSA"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a class="text-primary" href="https://www.instagram.com/megabusinessusa/"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
            </div>
        </div>
        <div class="row custom-mt-5 mb-4">
            <div class="col-md-12">
               
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3298.9640629774035!2d-118.53789618478041!3d34.223935980559496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c29bb4892d9d11%3A0xf5de1ec38d8ebac2!2sProfessional%20Building%2C%208444%20Reseda%20Blvd%2C%20Northridge%2C%20CA%2091324%2C%20USA!5e0!3m2!1sen!2sbd!4v1640584719129!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                <iframe src="https://www.google.com/maps/d/embed?mid=1gvhG4VpY5u-erncST3RxQGDy4aNL1m6O&ehbc=2E312F" width="100%" height="480"></iframe>
            </div>
        </div>
    </div>
</template>
<script>
import path from '../../../src/global-config/mixin/path-solution'
import message from '../../../src/global-config/mixin/message'
export default {
    mixins:[path, message],

    data(){
        return{
            contactForm:{},
            is_sent:false
        }
    },

    created(){
       
    },

    methods:{
        sendContactMessage(){
            this.is_sent = true
            let form_data = new FormData($('.form')[0])
            axios.post(this.base_url+'/api/send-contact', form_data)
            .then(res=>{
                console.log(res.data);
                if(res.status == 200){
                    this.toastMessage('success', res.data.message)
                    this.is_sent = false
                   this.contactForm = {}
                }
            })
            .catch(error => {
              if(error.response.status == 404){

                  this.errorMsg = error.response.data.message[0]

              } else if(error.response.status == 401){

                  this.errorMsg = error.response.data.message[0]

              } else if(error.response.status == 422) {

                   $.each(error.response.data.errors, function(item,index){

                        let input = jQuery(document).find('input[name="'+item+'"]')
                        let inputAfter = jQuery(document).find('input[name="'+item+'"] + span')

                        input.addClass('is-invalid') 
                        
                        inputAfter.remove() 
                        // input.after('<span class="text-danger">'+error.response.data.errors[item]+'</span>')

                })

              } else {

              }
          })

        }
    }

    
}
</script>

<style scoped>
h5{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.social{
    margin-left: -8%;
}

.social li a{
    padding-right:5px !important;
}
</style>
