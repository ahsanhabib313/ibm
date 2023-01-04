<template>
   <section class="ui two column centered grid mt-4 mb-4 row">
      <div class="column col-md-4 offset-md-3">
         <form class="ui segment large form">
            <div class="input-group flex-nowrap">
            <input 
            type="text" 
            class="form-control" 
            placeholder="Enter your address"
            v-model="address"
            ref="autocomplete"
            aria-label="Enter your address" 
            aria-describedby="addon-wrapping"
            />
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search" @click="locatorButtonPressed()"></i></span>
            </div>
         </form>
      </div>
   </section>
</template>

<script>
   export default {
     data() {
       return {
         address: "",
       };
     },
     created(){

          console.log('address', this.address);

     },

     mounted(){

        //  const script = document.createElement('script')
        //  script.src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCafM60L6qc1Wka4IyAaSbSvbokpn7fyjY"

        //  script.addEventListener("load", this.initMap)

        //  document.body.appendChild(script)

      
     },
     methods: {
       locatorButtonPressed() {

           navigator.geolocation.getCurrentPosition(
                position => {
                    console.log('latitude', position.coords.latitude);
                    console.log('longitude', position.coords.longitude);
                    this.getStreetAddressFrom(position.coords.latitude, position.coords.longitude)

                    console.log('adddress', this.adddress);
                },
                error => {
                    console.log(error.message);
                },
            )
       },

    
     async getStreetAddressFrom(lat, long) {
   try {
      var {
         data
      } = await axios.get(
         "https://cors-anywhere.herokuapp.com/https://maps.googleapis.com/maps/api/geocode/json?latlng=" +
         lat +
         "," +
         long +
         "&key=AIzaSyCcy-0pmkD1iisugySd2ExZb-PC8u-RXxs"
      );
      if (data.error_message) {
         console.log(data.error_message)
      } else {
         this.address = data.results[0].formatted_address;
      }
   } catch (error) {
      console.log(error.message);
   }
}


     }
   };
</script>