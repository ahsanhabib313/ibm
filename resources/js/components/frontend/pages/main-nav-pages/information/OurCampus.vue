<template>
  <base-layout>
    <section
      class="about-us-area pt-50 pb-40 pt-md-100 pb-md-70 pt-xs-100 pb-xs-70"
    >
      <div class="container">
        <div
          class="
            row
            pl-20
            pr-75 pr-lg-0 pr-md-0 pr-xs-0
            pl-lg-0 pl-md-0 pl-xs-0
          "
        >
          <div class="card">
            <div class="card-body">
              <h3 class="theme-color mb-10">Our Campus:</h3>
              <div class="text-center py-5">
                <img
                  :src="image_url + '/uploads/campus/02.jpg'"
                  style="height: 600px"
                />
              </div>
              <p class="p-justify mb-20">
                Institute of Business and Management (Victoria) is located in
                Building D, 60 Belfast Street, Broadmeadows VIC 3047. Belfast
                street is a wide road and has many small businesses and café’s
                around. Institute of Business and Management (Victoria) is
                located in a busy suburb of Broadmeadows located just 14 km
                north from the centre of City of Melbourne close to transport,
                retail shopping and entertainment. This location is next to stop
                number 4 (Hume Secondary College / Blair Street) on Bus number
                540 towards Upfield which is accessible from Broadmeadows
                Railway Station. Flinders Street station is just two stops away
                from Bourke Street Stop and is very well connected to all
                suburbs of Melbourne. From Flinders Street Station, catch any of
                the City Circle trams, number 48 or number 75 and travel a few
                minutes east to Flinders Street Station and past Flinders Street
                Station to Federation Square. Or travel west to Market Street
                and change to the number 55 tram for a short trip to the Royal
                Melbourne Zoo and the State Netball and Hockey Centre. The
                Melbourne Visitor Shuttle (Red Bus) and City Circle (Tram) are a
                great way to see Melbourne's attractions, and it's free! (Find
                out more information please go to www.ptv.vic.gov.au) To travel,
                you are required to have a validated ticket. Myki is the smart
                card ticketing system that validates travel on V/Line trains,
                buses and trams between major regional towns and Melbourne. Find
                out more information and costs please go to www.myki.com.au
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </base-layout>
</template>
<script>
import path from "../../../../../src/global-config/mixin/path-solution";
import BaseLayout from "../../../layouts/BaseLayout.vue";
export default {
  mixins: [path],
  components: { BaseLayout },
};
</script>