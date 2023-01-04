<template>
  <base-layout>
    <div class="container pt-5">
      <div class="text-center">
        <img
          :src="image_url + '/uploads/orientation/Lesson-bro.jpg'"
          style="height: 500px"
        />
      </div>
      <p>
        As part of your enrolment in this program, you will need to attend an
        Orientation Program. The Program covers a broad range of topics.
      </p>

      <br />

      <p>
        The purpose of the Program is to provide an overview of the course you
        are studying, the institution in which you are studying and important
        information regarding how we can assist you with your studies and
        support your time studying in Australia. The program provides
        information to Institute of Business and Management (Victoria)’s
        students on a range of topics including:
      </p>

      <br />

      <ul class="list-group">
        <li class="list-group-item">
          ✔ The Australian VET Quality Framework and your qualification
        </li>
        <li class="list-group-item">
          ✔ College’s affiliations, role and responsibilities
        </li>
        <li class="list-group-item">✔ Our staff and their capabilities</li>
        <li class="list-group-item">✔ Resources, facilities and equipment</li>
        <li class="list-group-item">
          ✔ Help that is available to you with regard to the English language
          and academic support for your studies
        </li>
        <li class="list-group-item">
          ✔ Help available to assist you to adjust to life in Australia and to
          your new course
        </li>
        <li class="list-group-item">
          ✔ Services available to you, from the college, and from other sources
          to assist you in meeting your course requirements and maintaining your
          attendance.
        </li>
        <li class="list-group-item">✔ Availability of welfare services</li>
        <li class="list-group-item">✔ Our critical incident policy</li>
        <li class="list-group-item">
          ✔ Your contact person at the college for support in academic and
          non-academic matters
        </li>
        <li class="list-group-item">
          ✔ Non transfer policy prior to six (6) months of commencing your
          studies
        </li>
        <li class="list-group-item">
          ✔ Transferring providers and how it works
        </li>
        <li class="list-group-item">✔ Complaint’s handling</li>
        <li class="list-group-item">✔ Grievance handling</li>
        <li class="list-group-item">
          ✔ External, independent complaints referral and appeals
        </li>
        <li class="list-group-item">✔ Role of the Fair Work Ombudsman</li>
        <li class="list-group-item">
          ✔ Your continued enrolment during a complaint or appeal
        </li>
        <li class="list-group-item">
          ✔ Monitoring your course progress and supporting you
        </li>
        <li class="list-group-item">✔ Monitoring your attendance</li>
        <li class="list-group-item">
          ✔ Expected duration of course completion
        </li>
        <li class="list-group-item">✔ How we maintain student records</li>
        <li class="list-group-item">
          ✔ Intervention strategies to help you complete your course
        </li>
        <li class="list-group-item">
          ✔ Our verbal and written communications with you: Letters and other
          correspondence
        </li>
        <li class="list-group-item">
          ✔ Non satisfactory student progress, attendance and compulsory
          reporting by us
        </li>
        <li class="list-group-item">✔ Course structure and content</li>
        <li class="list-group-item">✔ Course credits</li>
        <li class="list-group-item">✔ Modes and methods of delivery</li>
        <li class="list-group-item">✔ Plagiarism</li>
        <li class="list-group-item">✔ Assessment</li>
        <li class="list-group-item">✔ Results</li>
        <li class="list-group-item">✔ Disciplinary procedures</li>
        <li class="list-group-item">
          ✔ Informing the students of an intent to suspend or cancel their
          enrolment
        </li>
        <li class="list-group-item">✔ Student surveys</li>
      </ul>

      <div class="py-3"></div>

      <h6 class="pb-3">
        On the first, students attend orientation and cover the following
        topics:
      </h6>
      <ul class="list-group">
        <li class="list-group-item">
          ✔ Complete any outstanding required forms
        </li>
        <li class="list-group-item">
          ✔ Welcome session including meeting key staff
        </li>
        <li class="list-group-item">
          ✔ Overview of life in Australia and where to find assistance
        </li>
        <li class="list-group-item">
          ✔ Employment rights and responsibilities – Fair Work Ombudsman
        </li>
        <li class="list-group-item">✔ Your safety</li>
        <li class="list-group-item">
          ✔ Academic and general administrative matters
        </li>
        <li class="list-group-item">✔ Students’ rights and responsibilities</li>
        <li class="list-group-item">
          ✔ Policies and requirements for satisfactory progress
        </li>
        <li class="list-group-item">
          ✔ Policies and requirements for attendance monitoring
        </li>
        <li class="list-group-item">✔ Unique Student Identifier (USI)</li>
        <li class="list-group-item">✔ Student visa conditions overview</li>
        <li class="list-group-item">✔ Complaints and appeals procedures</li>
        <li class="list-group-item">
          ✔ Emergency contact details and critical incident policy and procedure
        </li>
        <li class="list-group-item">
          ✔ Maintaining current contact information
        </li>
        <li class="list-group-item">✔ Issuing student cards</li>
        <li class="list-group-item">✔ Campus tour</li>
        <li class="list-group-item">
          ✔ General tour of the area for newly arrived students from overseas
        </li>
      </ul>
      <br />
      <p>
        Students who do not commence on the course start date and commence by
        the default date will be registered and undergo individual orientation.
      </p>
    </div>
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