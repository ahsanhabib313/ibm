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
          <div class="card mb-0">
            <div class="card-body">
              <h3 class="theme-color mb-10">Living in Australia:</h3>
              <div class="text-center py-5">
                <img
                  :src="image_url + '/uploads/live-in-aus/1190.jpg'"
                  style="height: 600px; width: 100%"
                />
              </div>
              <h4 class="theme-color mb-10">Australia:</h4>
              <p class="p-justify mb-20">
                Australia is the world's sixth-largest country by total area and
                has a population of approximately 24 million people, with most
                people staying in the 5 major cities of Melbourne, Sydney,
                Adelaide, Perth and Brisbane. The country is split into states
                and territories being Victoria, New South Wales, Queensland,
                Northern Territory, Western Australia, South Australia and
                Tasmania.
              </p>
              <p class="p-justify mb-20">
                Australia has many attractions for international students
                including the high-quality education system, climate, great
                lifestyle, sports, beaches, strong industries, and too many is
                seen as the land of opportunity. Australia’s popularity as an
                education destination for international students is forecasted
                to continue in the long term, fuelled by the economy’s continued
                steady growth, high standards of living and lifestyle
                opportunities among numerous other factors. Australia is a land
                of contrasts: sweeping golden beaches, coral reefs rich with
                marine life, tropical rainforests, mountain ranges, vast grazing
                lands, and sparse deserts. One of the oldest continents,
                Australia is the only country to occupy an entire continent.
                Surrounded by the Indian and Pacific Oceans, Australia has many
                animals and plants, which are unique on the planet. The surface
                geology is typically old and flat with a major mountain range
                stretching down the eastern coast and another mountain range in
                the north west of the continent.
              </p>
              <h4 class="theme-color mb-10">Victoria:</h4>
              <p class="p-justify mb-20">
                About 36 per cent of Victoria is forest. The Murray is the
                State’s longest river and there are several large inland lakes.
                Victoria’s vast coastline extends over 1600 kilometres,
                bordering the Southern Ocean and Bass Strait and separating the
                Australian mainland from Tasmania. Victoria is the most densely
                populated of Australia’s 8 States and Territories. Some 26 per
                cent of all Australians live in Victoria and, of those, most
                reside in Melbourne, the nation’s second largest city and
                capital of this state
              </p>
              <h4 class="theme-color mb-10">Melbourne:</h4>
              <p class="p-justify mb-20">
                Melbourne is the capital of the State of Victoria. It is
                situated on the Yarra River and around Port Phillip Bay with its
                beautiful beaches and water sports facilities. It is a beautiful
                spacious city with all the parks, gardens, sporting venues and
                scenic places that Australian space and natural resources allow.
                Melbourne is a world-renowned cultural, artistic, financial and
                communications centre served by an international airport, a
                cargo and passenger seaport, and rail links to neighbouring
                States. Melbourne, once voted the world's 'most liveable city',
                enjoys clean fresh air and beautiful parks and gardens.
                Melbourne is the shopping capital of Australia and offers some
                of Australia's biggest shopping complexes as well as
                sophisticated, exclusive boutiques and a host of lively and
                popular markets. One quarter of Melbourne's population was born
                overseas making it one of the world's most multicultural cities.
                There are now people from 140 nations living harmoniously
                together. This broad ethnic mix has brought many benefits to the
                city including a wide range of cuisines and over 2,300 elegant
                restaurants, bistros, and cafes. Melbourne has an excellent
                public transport system with trams, trains and buses providing
                an extensive network throughout the city and suburbs. The
                population is approximately 4.1 million. Melbourne is a
                sprawling city with suburbs extending up to 50km from the centre
                of the city. The city centre is on the banks of the Yarra River,
                5km from Port Phillip Bay. The city centre features world class.
              </p>
              <p class="mb-20">● Department stores</p>
              <p class="mb-20">● Historical architecture</p>
              <p class="mb-20">● Theatres, galleries, and arts centres</p>
              <p class="p-justify mb-20">
                Melbourne is only a short distance from many beautiful beaches
                as well as the Victorian mountain regions, where skiing is
                popular during winter. The city and surrounding suburbs are well
                serviced by a public transport network of buses, trains, and
                trams. A multicultural city enriched by 170 ethnic groups.
                Sometimes called the culinary capital of Australia, Melbourne
                has a vast array of restaurants, offering a variety of
                international cuisine.
              </p>
              <p class="p-justify mb-10 bold">
                For further information on Australia, Victoria and Melbourne
                please visit:
              </p>
              <p class="mb-10">
                <a
                  class="theme-color"
                  href="http://www.australia.com"
                  target="_blank"
                  >http://www.australia.com</a
                >
                or
              </p>
              <p class="mb-10">
                <a
                  class="theme-color"
                  href="http://www.visitvictoria.com"
                  target="_blank"
                  >http://www.visitvictoria.com</a
                >
                or
              </p>
              <p class="mb-10">
                <a
                  class="theme-color"
                  href="http://www.thatsmelbourne.com.au"
                  target="_blank"
                  >http://www.thatsmelbourne.com.au</a
                >
              </p>

              <p class="p-justify mb-10 bold">
                For further information on studying in Australia, Melbourne
                please visit:
              </p>

              <p class="mb-20">
                <a class="theme-color" href="http://www.studyinaustralia.gov.au"
                  >http://www.studyinaustralia.gov.au</a
                >
                or
              </p>
              <p class="mb-30">
                <a
                  class="theme-color"
                  href="http://www.studymelbourne.vic.gov.au"
                  >http://www.studymelbourne.vic.gov.au</a
                >
              </p>

              <div class="button">
                <a
                  class="btn btn-success btn-lg"
                  href="https://internationaleducation.gov.au/Regulatory-Information/Documents/ESOSFrameworkfactsheetfinaldraft9May2014(2).pdf"
                  download
                  >Download Information <i class="fa fa-download"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </base-layout>
</template>
<script>
import BaseLayout from "../../../layouts/BaseLayout.vue";
import path from "../../../../../src/global-config/mixin/path-solution";
export default {
  mixins: [path],
  components: { BaseLayout },
};
</script>