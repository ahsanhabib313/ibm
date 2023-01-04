<template>
  <base-layout>
    <section
      class="about-us-area pt-50 pb-80 pt-md-100 pb-md-70 pt-xs-100 pb-xs-70"
    >
      <div class="container">
        <div class="row pr-75 pr-lg-0 pr-md-0 pr-xs-0 pl-lg-0 pl-md-0 pl-xs-0">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <h3 class="theme-color mb-10">Our Mission</h3>
                  <p style="text-align: justify">
                    The mission of Institute of Business and Management
                    (Victoria) is to provide global educational opportunities
                    that emphasise skills and knowledge and enrich student’s
                    life with a practical learning approach to make them ready
                    for workforce.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <img
                :src="'https://ibm.vic.edu.au/public/frontend/assets/img/why-choose-ibm/03.svg'"
                style="height: 600px"
              />
            </div>
            <div class="col-md-12">
              <div class="card mb-10">
                <div class="card-body">
                  <h3 class="theme-color mb-10">Our Objectives</h3>
                  <p class="mb-20 mt-8">
                    In recognition of this mission, our objectives are:
                  </p>
                  <ul
                    class="text-list mt-2 mb-40 wow fadeInUp2 animated"
                    data-wow-delay=".2s"
                  >
                    <li style="text-align: justify">
                      <strong>People:</strong> We strive to attract, recruit and
                      retain talented, competent and committed people. We
                      promote excellent performance through leadership and
                      professional development.
                    </li>
                    <li style="text-align: justify">
                      <strong>Safety and equality:</strong> We are committed to
                      providing an environment which is safe, equitable and
                      which promotes a confident and productive training and
                      assessment environment.
                    </li>
                    <li style="text-align: justify">
                      <strong>Integrity and ethics:</strong> We conduct
                      ourselves in accordance with shared and agreed standards
                      of behaviour which holds ethical conduct and integrity as
                      our highest priorities.
                    </li>
                    <li style="text-align: justify">
                      <strong>Quality committed:</strong> We aspire to deliver
                      consistent, high quality services and apply quality
                      systems which support training and assessment excellence.
                    </li>
                    <li style="text-align: justify">
                      <strong>Learner centred:</strong> We thrive on providing
                      training and assessment that is learner centred and which
                      supports lifelong learning. We respect our clients and
                      strive to attract them time after time through high
                      quality training and assessment experiences.
                    </li>
                    <li style="text-align: justify">
                      <strong>Industry engagement:</strong> We recognise the
                      value of industry engagement as the driving force in
                      shaping our training and assessment strategies. We deliver
                      training and assessment services which are founded on
                      industry needs and expectations.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="row mb-10">
            <div class="col-md-6">
              <img
                :src="'https://ibm.vic.edu.au/public/frontend/assets/img/why-choose-ibm/01.svg'"
                style="width: 100%"
              />
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <h3 class="theme-color mb-10">
                    Facilities and Infrastructure
                  </h3>
                  <p class="p-justify" style="text-align: justify">
                    Institute of Business and Management has beautiful campus
                    surrounded with lush green park and break out area in open
                    with ample of car parking on campus.
                  </p>
                  <p class="p-justify" style="text-align: justify">
                    Our students will access the latest technology and resources
                    with Library, Information technology Lab, and latest
                    teaching gadgets, comfortable teaching spaces that encourage
                    creativity, interaction and learning
                  </p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h3 class="theme-color mb-10">Multiculturism</h3>
                  <p style="text-align: justify">
                    We believe in diversity and inclusion and we are considered
                    a multicultural college, with our staff and students all
                    coming from a range of different backgrounds. Importantly,
                    we value and place a strong emphasis on respecting different
                    beliefs, and we regularly organise multicultural days
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h3 class="theme-color mb-10">
                Institute of Business and Management (Victoria):
              </h3>
              <p class="p-justify mt-1 mb-20" style="text-align: justify">
                Institute of Business and Management (Victoria) is located at
                Building D, 60, Belfast Street, Broadmeadows, VIC, 3047. Belfast
                Street is a wide road and has many other secondary schools and
                small other businesses around. Institute of Business and
                Management (Victoria) is located in a busy suburb of
                Broadmeadows located 14 km from centre of City of Melbourne
                close to transport, retail shopping and entertainment. This
                location is next to stop number 4 (Hume Central Sec Col/Blair
                St) on Bus number 540 towards Upfield which is accessible from
                Broadmeadows Railway Station.
              </p>

              <p class="p-justify mt-1 mb-20" style="text-align: justify">
                Flinders Street station is just 30 minutes away from
                Broadmeadows Railway Station and is every well connected to all
                suburbs of Melbourne. From Flinders Street Station, catch any of
                the City Circle trams, number 48 or number 75 and travel a few
                minutes east to Flinders Street Station and past Flinders Street
                Station to Federation Square. Or travel west to Market Street
                and change to the number 55 tram for a short trip to the Royal
                Melbourne Zoo and the State Netball and Hockey Centre. The
                Melbourne Visitor Shuttle (Red Bus) and City Circle (Tram) are a
                great way to see Melbourne’s attractions, and it’s free! (Find
                out more information please go to www.ptv.vic.gov.au)
              </p>
              <p class="mb-20" style="text-align: justify">
                To travel, you are required to have the validated ticket. Myki
                is the smart card ticketing system, it validates for travel on
                V/Line trains, buses and trams between major regional towns and
                Melbourne. Find out more information and costs please go to
                www.myki.com.au
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </base-layout>
</template>
<script>
import BaseLayout from "../../../layouts/BaseLayout.vue";
export default {
  components: { BaseLayout },
};
</script>

<style>
.card {
  border: none !important;
}
</style>