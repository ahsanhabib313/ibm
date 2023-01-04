<template>
  <base-layout>
    <div class="container mt-5">
      <h4>STUDENT SUPPORT SERVICES</h4>
      <div class="py-3"></div>
      <div class="text-center">
        <img
          :src="image_url + '/uploads/service/student-service.jpg'"
          style="height: 500px"
        />
      </div>
      <div class="collapsible pb-2">
        <a
          @click="changeAngle($event)"
          data-position="down"
          class="w-100"
          data-bs-toggle="collapse"
          href="#clps1"
          role="button"
          aria-expanded="true"
          aria-controls="clps1"
        >
          <i class="fas fa-file-certificate"></i>
          &nbsp;
          <span>POLICY</span>
          &nbsp;
          <i class="fas fa-angle-down requirementAddon"></i>
        </a>
        <div class="my-3"></div>
        <div class="collapse show" id="clps1">
          <div class="card card-body" style="text-align: justify">
            This policy/procedure supports ‘Standard 6 – Student Support
            Services’ of the ‘National Code of Practice for Providers of
            Education & Training to Overseas Students 2018’, which states:
            <br />
            This policy ensures that all students are given support while
            studying in Australia. This support includes both academic support
            and personal support and the following procedures ensure that
            students are made aware of the support available. Institute of
            Business and Management (Victoria) will conduct an orientation
            program for all new students
          </div>
        </div>
      </div>
      <div class="collapsible pb-2">
        <a
          @click="changeAngle($event)"
          data-position="right"
          class="w-100"
          data-bs-toggle="collapse"
          href="#clps2"
          role="button"
          aria-expanded="false"
          aria-controls="clps1"
        >
          <i class="fas fa-file-certificate"></i>
          &nbsp;
          <span>PROCEDURE</span>
          &nbsp;
          <i class="fas fa-angle-right requirementAddon"></i>
        </a>
        <div class="my-3"></div>
        <div class="collapse" id="clps2">
          <div class="card card-body">
            <p style="text-align: justify">
              Whilst all staff employed by Institute of Business and Management
              (Victoria) has the responsibility to provide support to all
              students, Institute of Business and Management (Victoria) has
              nominated a ‘Student Support Officer’ who is available to all
              students, on an appointment basis, through the standard hours of
              business.
            </p>
            <!--      <div class="py-2"></div> -->
            <p style="text-align: justify">
              Students can access the student support officer directly or via
              student administrations and an appointment will be organised as
              soon as practical. Currently, the role and responsibility this
              ‘Student Support Officer’ is maintained by
            </p>
            <ul class="py-2">
              <li>Name: Manpreet Kaur</li>
              <li>Mob: 0460 323 792</li>
            </ul>
            <!--  <div class="py-2"></div> -->
            <p style="text-align: justify">
              As part of their responsibility they are to ensure up-to-date
              information is available for the following services and the
              contacts listed are current. This information is given to students
              through their orientation program outlined below.
            </p>
          </div>
        </div>
      </div>
      <div class="collapsible pb-2">
        <a
          @click="changeAngle($event)"
          data-position="right"
          class="w-100"
          data-bs-toggle="collapse"
          href="#clps3"
          role="button"
          aria-expanded="false"
          aria-controls="clps3"
        >
          <i class="fas fa-file-certificate"></i>
          &nbsp;
          <span>Student Support Services </span>
          &nbsp;
          <i class="fas fa-angle-right requirementAddon"></i>
        </a>
        <div class="my-3"></div>
        <div class="collapse" id="clps3">
          <div class="card card-body">
            <p style="text-align: justify">
              The following support services are available and accessible for
              all students studying with Institute of Business and Management
              (Victoria). Institute of Business and Management (Victoria)
              provides students with contact details to refer any matters that
              require further follow up. Any referrals are conducted by
              Institute of Business and Management (Victoria) at no cost to the
              student but fees and charges may apply where an external service
              is used by the student and this should be clarified by the student
              prior to using such services outside of Institute of Business and
              Management (Victoria)’s scope.
            </p>
          </div>
        </div>
      </div>
      <div class="collapsible pb-2">
        <a
          @click="changeAngle($event)"
          data-position="right"
          class="w-100"
          data-bs-toggle="collapse"
          href="#clps4"
          role="button"
          aria-expanded="false"
          aria-controls="clps4"
        >
          <i class="fas fa-file-certificate"></i>
          &nbsp;
          <span>Learning Support </span>
          &nbsp;
          <i class="fas fa-angle-right requirementAddon"></i>
        </a>
        <div class="my-3"></div>
        <div class="collapse" id="clps4">
          <div class="card card-body">
            <p style="text-align: justify">
              We have learning support teachers on hand to help students if they
              are having difficulties with study. Learning support teachers can
              assist a student in classroom or work in small groups with the
              student and can help with time management, making presentations
              and to improve general study skills.
            </p>
            <ul>
              <li>English Language Support Trainer- Muhammad Atif</li>
              <li>Numeracy Support Trainer: Manpreet Kaur</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="collapsible pb-2">
        <a
          @click="changeAngle($event)"
          data-position="right"
          class="w-100"
          data-bs-toggle="collapse"
          href="#clps5"
          role="button"
          aria-expanded="false"
          aria-controls="clps5"
        >
          <i class="fas fa-file-certificate"></i>
          &nbsp;
          <span>Orientation Program</span>
          &nbsp;
          <i class="fas fa-angle-right requirementAddon"></i>
        </a>
        <div class="my-3"></div>
        <div class="collapse" id="clps5">
          <div class="card card-body" style="text-align: justify">
            <p class="mb-1">
              The orientation program provides culturally appropriate
              information about:
            </p>

            <ul>
              <li>
                Support services available to assist overseas students to help
                them adjust to study and life in Australia
              </li>
              <li>
                English language and study assistance programs offered by the
                Institute of Business and Management (Victoria) and external
                support
              </li>
              <li>
                Contact number, name and location of emergency, legal,
                personal/social, medical support, accommodation services.
              </li>
              <li>The registered provider’s facilities and resources</li>
              <li>Complaints and appeals processes</li>
              <li>Requirements for course progress</li>
              <li>
                The support services available to assist students with general
                or personal circumstances that are adversely affecting their
                education in Australia
              </li>
              <li>
                Services students can access for information on their employment
                rights and conditions, and how to resolve workplace issues, such
                as through the Fair Work Ombudsman
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="collapsible pb-2">
        <a
          @click="changeAngle($event)"
          data-position="right"
          class="w-100"
          data-bs-toggle="collapse"
          href="#clps6"
          role="button"
          aria-expanded="true"
          aria-controls="clps6"
        >
          <i class="fas fa-file-certificate"></i>
          &nbsp;
          <span>Academic issues </span>
          &nbsp;
          <i class="fas fa-angle-right requirementAddon"></i>
        </a>
        <div class="my-3"></div>
        <div class="collapse" id="clps6">
          <div class="card card-body" style="text-align: justify">
            <p>
              Students may have concerns with their academic performance or
              other related issues that are placing them at risk of not
              achieving the requirements of their course. Students are able to
              gain advice and support in ensuring they maintain appropriate
              academic levels, and general support to ensure they achieve
              satisfactory results in their studies. Students’ progress is
              monitored and guidance and support provided where unsatisfactory
              results are identified.
            </p>
            <div class="py-1"></div>
            <p>
              A student is able to access the student support officer to discuss
              any academic or other related issues to studying at Institute of
              Business and Management (Victoria) at any time. The student
              support officer is available to provide advice and guidance, or
              referral, where required.
            </p>
          </div>
        </div>
      </div>
      <div class="collapsible pb-2">
        <a
          @click="changeAngle($event)"
          data-position="right"
          class="w-100"
          data-bs-toggle="collapse"
          href="#clps7"
          role="button"
          aria-expanded="true"
          aria-controls="clps7"
        >
          <i class="fas fa-file-certificate"></i>
          &nbsp;
          <span>Personal / Social issues </span>
          &nbsp;
          <i class="fas fa-angle-right requirementAddon"></i>
        </a>
        <div class="my-3"></div>
        <div class="collapse" id="clps7">
          <div class="card card-body" style="text-align: justify">
            <p>
              There are many issues that may affect a student’s social or
              personal life and Students have access to the support officer
              through normal institute’s hours to gain advice and guidance on
              personal issues, accommodation issues, or family / friend issues.
              Where the Student Support Officer feels further support should be
              gained, a referral to an appropriate support service will be
              organised.
            </p>
            <div class="py-2"></div>
            <table class="table table-responsive">
              <tbody>
                <tr>
                  <th>Referral service available</th>
                  <th>Name and Location</th>
                  <th>Contact</th>
                </tr>
                <tr>
                  <td>Counselling services</td>
                  <td>
                    Better Place Australia Broadmeadows, b1/1-13 The Gateway,
                    Broadmeadows VIC 3047,
                  </td>
                  <td>Ph: (03) 93554700.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="collapsible pb-2">
        <a
          @click="changeAngle($event)"
          data-position="right"
          class="w-100"
          data-bs-toggle="collapse"
          href="#clps8"
          role="button"
          aria-expanded="true"
          aria-controls="clps8"
        >
          <i class="fas fa-file-certificate"></i>
          &nbsp;
          <span>Accommodation </span>
          &nbsp;
          <i class="fas fa-angle-right requirementAddon"></i>
        </a>
        <div class="my-3"></div>
        <div class="collapse" id="clps8">
          <div class="card card-body" style="text-align: justify">
            <p>
              While Institute of Business and Management (Victoria) does not
              offer accommodation services or take any responsibility for
              accommodation arrangements Institute of Business and Management
              (Victoria) is able to refer students to appropriate accommodation
              services and are always available to discuss any issues or
              concerns a student may have with their accommodation arrangements.
            </p>
            <div class="py-2"></div>
            <p>
              All students are encouraged to have accommodation organised prior
              to arrival in Australia but the Student Support Officer can refer
              students to appropriate accommodation services.
            </p>
            <br />
            <p>Some Local options include:</p>
            <table class="table table-responsive">
              <tbody>
                <tr>
                  <th>Particulars</th>
                  <th>Name and Location</th>
                  <th>Contact</th>
                </tr>
                <tr>
                  <td>Homestay</td>
                  <td>Homestay Direct Pty Ltd</td>
                  <td>
                    www.homestaydirect.com.au
                    <br />
                    phone:0396703133
                  </td>
                </tr>
                <tr>
                  <td>Student Accommodation Services</td>
                  <td>
                    Student Accommodation Services Pty Ltd. 3/259 Bell St,
                    Preston VIC 3072.
                  </td>
                  <td>
                    Ph:(03)94851900
                    <br />
                    Email: saccomm@studentaccommodation.com.au
                  </td>
                </tr>
                <tr>
                  <td>Hotel</td>
                  <td>
                    Coolaroo Hotel 9 Maffra St, Coolaroo VIC 3048
                    <br />
                    Melbourne Airport Motel 123 Mickleham Rd, Tullamarine VIC
                    3043
                  </td>
                  <td>+61 3 9309 3211</td>
                </tr>
                <tr>
                  <td>Hostel</td>
                  <td>Le Student 8, 205-215 Bell St, Preston VIC 3072</td>
                  <td>Ph: (03) 9485 0086</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="collapsible pb-2">
        <a
          @click="changeAngle($event)"
          data-position="right"
          class="w-100"
          data-bs-toggle="collapse"
          href="#clps9"
          role="button"
          aria-expanded="true"
          aria-controls="clps9"
        >
          <i class="fas fa-file-certificate"></i>
          &nbsp;
          <span>Medical Issues </span>
          &nbsp;
          <i class="fas fa-angle-right requirementAddon"></i>
        </a>
        <div class="my-3"></div>
        <div class="collapse" id="clps9">
          <div class="card card-body" style="text-align: justify">
            <p>
              Student support officer always have an up to date list of medical
              professionals within access from the Institute of Business and
              Management (Victoria)’s location and any student with medical
              concerns should inform the student support officer who will assist
              them in finding an appropriate medical professional.
            </p>
            <div class="py-2"></div>
            <p>
              The emergency phone number for an ambulance in Australia is ‘000’.
              (This number should only be dialled in an emergency and you
              require ambulance, police, or fire attendance.)
            </p>
            <br />
            <p>Local medical services are as follows:</p>
            <table class="table table-responsive">
              <tbody>
                <tr>
                  <th>Referral service available</th>
                  <th>Name and Location</th>
                  <th>Contact</th>
                </tr>
                <tr>
                  <td>Hospital</td>
                  <td>The Royal Melbourne Hospital</td>
                  <td>Ph: 03 9288 2211</td>
                </tr>
                <tr>
                  <td>Doctor</td>
                  <td>
                    Avicenna Medical Centre, 182 Blair St, Broadmeadows VIC
                    3047.
                  </td>
                  <td>Ph: 03-9309 1119</td>
                </tr>
                <tr>
                  <td>Dentist</td>
                  <td>Go Dental Care, 339 Camp Rd, Broadmeadows VIC 3047.</td>
                  <td>Ph: 03-9309 4080</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="collapsible pb-2">
        <a
          @click="changeAngle($event)"
          data-position="right"
          class="w-100"
          data-bs-toggle="collapse"
          href="#clps10"
          role="button"
          aria-expanded="false"
          aria-controls="clps10"
        >
          <i class="fas fa-file-certificate"></i>
          &nbsp;
          <span>Legal Services </span>
          &nbsp;
          <i class="fas fa-angle-right requirementAddon"></i>
        </a>
        <div class="my-3"></div>
        <div class="collapse" id="clps10">
          <div class="card card-body" style="text-align: justify">
            <p>
              Institute of Business and Management (Victoria) is able to provide
              some advice and guidance on a limited range of situations. Where
              the Student Support Officer feels it appropriate for you to gain
              professional legal advice, they will refer you to an appropriate
              legal professional.
            </p>
            <div class="py-3"></div>
            <table class="table table-responsive">
              <tbody>
                <tr>
                  <th>Referral service available</th>
                  <th>Name and Location</th>
                  <th>Contact</th>
                </tr>
                <tr>
                  <td>Free Lega service</td>
                  <td>International Student Legal Advice Clinic (ISLAC)</td>
                  <td>sanmati.verma@gmail.com or 0410 923 041.</td>
                </tr>
                <tr>
                  <td>Free legal advice</td>
                  <td>
                    Fitzroy Legal Service 124 Johnston Street, Fitzroy, VIC
                  </td>
                  <td>Ph: 9419 3744</td>
                </tr>
                <tr>
                  <td>Dentist</td>
                  <td>Go Dental Care, 339 Camp Rd, Broadmeadows VIC 3047.</td>
                  <td>Ph: 03-9309 4080</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="collapsible pb-2">
        <a
          @click="changeAngle($event)"
          data-position="right"
          class="w-100"
          data-bs-toggle="collapse"
          href="#clps11"
          role="button"
          aria-expanded="false"
          aria-controls="clps11"
        >
          <i class="fas fa-file-certificate"></i>
          &nbsp;
          <span>The Overseas Students Ombudsman </span>
          &nbsp;
          <i class="fas fa-angle-right requirementAddon"></i>
        </a>
        <div class="my-3"></div>
        <div class="collapse" id="clps11">
          <div class="card card-body" style="text-align: justify">
            <p class="mb-1">
              The Overseas Students Ombudsman investigates complaints about
              problems that overseas students have with private education and
              training in Australia.
            </p>

            <p class="mb-1">The Ombudsman also:</p>

            <p class="mb-1">
              Provides information about best practice complaints handling to
              help private education providers manage internal complaints
              effectively.
            </p>

            <p>
              Publishes reports on problems and broader issues in international
              education that we identify through investigations. For Further
              information:
            </p>
            <div class="py-2"></div>
            <table class="table table-responsive">
              <tbody>
                <tr>
                  <th colspan="2">Overseas Student Ombudsman</th>
                </tr>
                <tr>
                  <td>Website</td>
                  <td>www.oso.gov.au</td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>ombudsman@ombudsman.gov.au</td>
                </tr>
                <tr>
                  <td>Contact Number</td>
                  <td>1300 362 072</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="collapsible pb-2">
        <a
          @click="changeAngle($event)"
          data-position="right"
          class="w-100"
          data-bs-toggle="collapse"
          href="#clps12"
          role="button"
          aria-expanded="false"
          aria-controls="clps12"
        >
          <i class="fas fa-file-certificate"></i>
          &nbsp;
          <span>POLICY</span>
          &nbsp;
          <i class="fas fa-angle-right requirementAddon"></i>
        </a>
        <div class="my-3"></div>
        <div class="collapse" id="clps12">
          <div class="card card-body" style="text-align: justify">
            <p>
              Apart from the Student Orientation Program the Student Support
              Officer will occasionally organise social events that allow all
              students enrolled with Institute of Business and Management
              (Victoria) to mingle and socialise. These events may range from
              cultural and sightseeing events, to dinners, excursions and
              sporting events. They will be organised as demand requires and any
              suggestions can be forwarded to the Student Support Officer.
            </p>
            <div class="py-1"></div>
            <p>Student welfare and safety</p>
            <div class="py-1"></div>
            <p>
              Institute of Business and Management (Victoria) takes all
              reasonable steps to provide a safe environment on campus and
              advise overseas students and staff on actions they can take to
              enhance their personal security and safety.
            </p>
            <div class="py-1"></div>
            <p>
              Students are informed about safety measures during the orientation
              program.
            </p>
          </div>
        </div>
      </div>
      <div class="collapsible pb-2">
        <a
          @click="changeAngle($event)"
          data-position="right"
          class="w-100"
          data-bs-toggle="collapse"
          href="#clps13"
          role="button"
          aria-expanded="true"
          aria-controls="clps13"
        >
          <i class="fas fa-file-certificate"></i>
          &nbsp;
          <span>Student Safety</span>
          &nbsp;
          <i class="fas fa-angle-right requirementAddon"></i>
        </a>
        <div class="my-2"></div>
        <div class="collapse" id="clps13">
          <div class="card card-body" style="text-align: justify">
            <p>
              While Australia is considered to be a very safe country, obviously
              it is still wise to avoid dangerous situations. Personal safety
              and security are a matter of common sense and awareness. Trust
              your instincts. If in doubt, move away. Here are a few tips for
              your personal safety.
            </p>
            <div class="py-1"></div>
            <p>Useful Tips When You Are Out and About:</p>
            <div class="py-1"></div>
            <ul class="bullet-list">
              <li>Walk in well-lit areas</li>
              <li>Walk mid-point between travelled routes between buildings</li>
              <li>
                Try to walk with a group of people – organise a group of other
                students if you are going in the same direction.
              </li>
              <li>
                Use caution when using elevators, isolated stairways, or toilet
                areas.
              </li>
              <li>
                Plan the safest route to your destination and use it. Stick to
                the main roads if possible. Never hitchhike!
              </li>
              <li>
                Remain alert. Use your peripheral vision. Wearing headphone may
                decrease your awareness.
              </li>
              <li>
                If approached, maintain a comfortable distance while you answer
                a question or give directions. Never turn your back on someone
                who has approached you.
              </li>
              <li>
                Try and arrange a lift home from a friend or a taxi if you are
                going out late. Get dropped off as close to your door as
                possible.
              </li>
              <li>Avoid using ATMs in dark or lonely places.</li>
            </ul>
            <div class="py-1"></div>
            <p>If you suspect you are being followed:</p>
            <ul class="bullet-list">
              <li>
                Be suspicious – keep looking behind you, so the person knows you
                cannot be surprised.
              </li>
              <li>Cross the street or change direction.</li>
              <li>
                Go to a well-lit area, enter a residence or building where there
                are people and phones.
              </li>
              <li>
                Do not wear a personal audio player or play music so loudly that
                you are unaware of your surroundings.
              </li>
              <li>If you are on campus, contact any staff member.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="collapsible pb-2">
        <a
          @click="changeAngle($event)"
          data-position="right"
          class="w-100"
          data-bs-toggle="collapse"
          href="#clps14"
          role="button"
          aria-expanded="true"
          aria-controls="clps14"
        >
          <i class="fas fa-file-certificate"></i>
          &nbsp;
          <span>Personal Safety on Public Transport</span>
          &nbsp;
          <i class="fas fa-angle-right requirementAddon"></i>
        </a>
        <div class="my-3"></div>
        <div class="collapse" id="clps14">
          <div class="card card-body" style="text-align: justify">
            <ul class="bullet-list">
              <li>
                Don’t stand alone while waiting for a bus or train, especially
                at night. Stand with other people.
              </li>
              <li>
                If you’re on a bus or train and it’s nearly empty, sit near the
                driver or as close as possible to the guard’s compartment.
              </li>
              <li>
                At the railway station, stand back from the edge of the
                platform. Avoid sitting near the exit door of the train as an
                attacker may be able to grab your property and run before you
                can react.
              </li>
              <li>
                When disembarking from public transport, walk with another
                commuter.
              </li>
              <li>
                If travelling by taxi, remembers the driver’s identification
                number displayed on the dashboard.
              </li>
              <li>
                There should also be a photo of the driver, if it is not there
                don’t get in. Once you’ve reached your destination, ask the
                driver to wait until you have safely entered.
              </li>
              <li>
                If you are catching a bus, check the timetable before so that
                you are not waiting at the bus stop for long periods. Select a
                well-lit bus stop at night and make sure that you can see the
                area around you.
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="collapsible pb-2">
        <a
          @click="changeAngle($event)"
          data-position="right"
          class="w-100"
          data-bs-toggle="collapse"
          href="#clps15"
          role="button"
          aria-expanded="true"
          aria-controls="clps15"
        >
          <i class="fas fa-file-certificate"></i>
          &nbsp;
          <span>Stay safe outdoors</span>
          &nbsp;
          <i class="fas fa-angle-right requirementAddon"></i>
        </a>
        <div class="my-3"></div>
        <div class="collapse" id="clps15">
          <div class="card card-body" style="text-align: justify">
            <p>
              With so many beautiful natural landscapes — from beaches to the
              bush and the outback — Australia’s natural environment is well
              worth exploring. To ensure you have a good time, but still stay
              safe, it’s important to be aware of the dangers first:
            </p>
            <div class="py-3"></div>
            <ul class="bullet-list">
              <li>
                Only swim at beaches patrolled by surf life savers, and only
                swim in patrolled areas marked by red and yellow flags. If you
                need help, stay calm and wave your arm to attract the attention
                of a life saver.
              </li>
              <li>
                Before entering rivers, lakes or the ocean, take note of any
                warning signs and beware of hidden obstacles (such as a tree
                branch under the water), strong currents and dangerous animals
                such as jellyfish, sharks or crocodiles.
              </li>
              <li>
                If you plan on going hiking or bushwalking, ensure you let
                someone know where you are going and when you plan to return and
                take the correct equipment. You should also research the area
                you are travelling to and check whether there are dangerous
                conditions expected, such as potential fires or slippery tracks.
              </li>
              <li>
                It is a good idea to talk to a park ranger, surf life saver or a
                member of staff at a visitor information centre before you begin
                exploring to get some expert advice — as well as some great
                sightseeing tips.
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="collapsible pb-2">
        <a
          @click="changeAngle($event)"
          data-position="right"
          class="w-100"
          data-bs-toggle="collapse"
          href="#clps16"
          role="button"
          aria-expanded="true"
          aria-controls="clps16"
        >
          <i class="fas fa-file-certificate"></i>
          &nbsp;
          <span>Handbag Snatching</span>
          &nbsp;
          <i class="fas fa-angle-right requirementAddon"></i>
        </a>
        <div class="my-3"></div>
        <div class="collapse" id="clps16">
          <div class="card card-body" style="text-align: justify">
            <p>
              With so many beautiful natural landscapes — from beaches to the
              bush and the outback — Australia’s natural environment is well
              worth exploring. To ensure you have a good time, but still stay
              safe, it’s important to be aware of the dangers first:
            </p>
            <div class="py-3"></div>
            <ul class="bullet-list">
              <li>
                Keep your handbag in front of your body, avoid dangling it by
                your side from your hand or shoulder.
              </li>
              <li>
                Be aware of people coming from behind – even on motorbikes and
                cars.
              </li>
              <li>
                Never leave your bag on a shopping trolley – or at your feet or
                on the hook of the door in a public toilet – always keep it with
                you.
              </li>
              <li>
                When you put money in your handbag, don’t let people see where
                you put it – especially when you are using an ATM.
              </li>
              <li>
                Be constantly aware of what valuables are in your bag – eg.
                driver’s licence and credit cards.
              </li>
              <li>
                If your bag is taken, immediately cancel any credit cards, and
                change your house locks as soon as possible. Report to the
                police.
              </li>
              <li>
                When packing groceries into your car, never leave your handbag
                on the boot or roof of your car. Thieves are watching and can
                easily grab your property. Always leave your bag locked inside
                your car when you are packing groceries away.
              </li>
            </ul>
            <div class="py-3"></div>
            <p>
              <strong>REMEMBER:</strong>
              If confronted by somebody trying to take your bag, give it to
              them. No amount of money or inconvenience is worth serious injury.
            </p>
          </div>
        </div>
      </div>
      <div class="py-3"></div>
      <h4>EMERGENCY CONTACTS</h4>
      <div class="py-3" style="text-align: justify">
        <h6>Police, Ambulance and Fire Brigade – 000</h6>
        <p>
          In an emergency you can contact the Police, Fire Brigade and Ambulance
          by dialling 000. The operator will ask for your name and address and
          other details of the emergency situation. This call is free of charge
          but should be used only in an emergency.
        </p>
        <div class="py-2"></div>
        <p>
          If you feel unsafe or threatened at any time, have anything stolen, or
          are assaulted, you can contact the Police for help and to report the
          incident.
        </p>
        <div class="py-2"></div>
        <p>
          If you require non-urgent advice or information or need to report a
          non-urgent matter, like lost property, you should attend or call the
          local Police Station. Contact details for your local Police Station
          can be found at the
          http://www.police.vic.gov.au/content.asp?Document_ID=7.
        </p>
      </div>
      <div class="py-3" style="text-align: justify">
        <h6>OSHC World care 24-hour Emergency Helpline – 1800 814 781</h6>
        <p>
          OSHC World care has a 24-hour Emergency Helpline that provides
          medical, legal and interpreting services to students in need.
        </p>
      </div>
      <div class="py-3" style="text-align: justify">
        <h6>Victims of Crime Helpline – 1800 819 817</h6>
        <p>
          Whatever the incident, being a victim of crime can be a frightening
          experience with many short- and long-term consequences. If you are a
          victim of a crime and would like to speak to someone, please call 1800
          819 817 (free call).
        </p>
      </div>
      <div class="py-3" style="text-align: justify">
        <h6>International Student Hotline</h6>
        <p>1300 363 079 – Monday to Friday 8.00am to 6.00pm</p>
        <br />
        <br />
        <p>
          The Australian Government is committed to providing the highest
          quality education system and making sure that international students
          receive the support they need while they are studying. If you are
          having problems with your study, safety, accommodation or at work, you
          can call the International Student Hotline, which is operated by the
          Department of Education, Employment and Workplace Relations (DEEWR):
        </p>
        <ul class="bullet-list">
          <li>For advice on who you should contact, or</li>
          <li>To report your concerns.</li>
        </ul>
        <p>There is no need to give your name.</p>
      </div>
    </div>
  </base-layout>
</template>
<script>
import BaseLayout from "../../../layouts/BaseLayout.vue";
import path from "../../../../../src/global-config/mixin/path-solution";

export default {
  components: { BaseLayout },
  mixins: [path],
  props: ["course"],
  methods: {
    changeAngle(event) {
      const requirement = event.target;
      let position = $(requirement).attr("data-position");

      if (position == "right") {
        $(requirement).attr("data-position", "down");
        $(requirement).find(".requirementAddon").removeClass("fa-angle-right");
        $(requirement).find(".requirementAddon").addClass("fa-angle-down");
      } else {
        $(requirement).attr("data-position", "right");
        $(requirement).find(".requirementAddon").removeClass("fa-angle-down");
        $(requirement).find(".requirementAddon").addClass("fa-angle-right");
      }
    },
  },
};
</script>
<style scoped>
.requirementAddon {
  float: right;
}
.course-page-title {
  font-size: 24px !important;
  color: #f1592a !important;
}

.collapsible {
  margin: 15px auto !important;
}

.collapsible a {
  /* background-color: #ffeae3 !important;*/
  padding: 5px 10px !important;
  display: block !important;
  width: 100% !important;
  color: #000000 !important;
  border: 1px solid #f1592a;
  border-radius: 5px;
}
table tbody tr {
  text-align: left !important;
}

.container .bullet-list {
  list-style-type: none;
}

/* Using the pseudo element before to hold a border-triangle */
.bullet-list li:before {
  content: "";
  display: inline-block;
  height: 0;
  width: 0;
  border-color: transparent #111;
  border-style: solid;
  border-width: 4px 0 4px 4px;
  margin-right: 0.5em;
}
</style>
