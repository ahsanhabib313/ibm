// About Us
import WelcomeToIbm from "../../../components/frontend/pages/main-nav-pages/about-us/WelcomeToIbm.vue";
import OurApproachStrategy from "../../../components/frontend/pages/main-nav-pages/about-us/OurApproachStrategy.vue";
import WhyChooseIbm from "../../../components/frontend/pages/main-nav-pages/about-us/WhyChooseIbm.vue";

// The Institute
import Accreditation from "../../../components/frontend/pages/main-nav-pages/information/Accreditation.vue";
import LiveInAustralia from "../../../components/frontend/pages/main-nav-pages/information/LiveInAustralia.vue";
import OurTeachingMethod from "../../../components/frontend/pages/main-nav-pages/information/OurTeachingMethod.vue";
import QualificationStructure from "../../../components/frontend/pages/main-nav-pages/information/QualificationStructure.vue";
import AQF from "../../../components/frontend/pages/main-nav-pages/information/AQF.vue";
import OurCampus from "../../../components/frontend/pages/main-nav-pages/information/OurCampus.vue";
import UsefulLinks from "../../../components/frontend/pages/main-nav-pages/information/UsefulLinks.vue";
import News from "../../../components/frontend/pages/main-nav-pages/information/News.vue";

// Future Candidates
import DictionVictoriaPolytechnic from "../../../components/frontend/pages/main-nav-pages/future-candidates/DictionVictoriaPolytechnic.vue";
import EnthusiasmAndOrientation from "../../../components/frontend/pages/main-nav-pages/future-candidates/EnthusiasmAndOrientation.vue";

import ResidencyAndComfortability from "../../../components/frontend/pages/main-nav-pages/future-candidates/ResidencyAndComfortability.vue";
import WelcomeToAustralia from "../../../components/frontend/pages/main-nav-pages/future-candidates/WelcomeToAustralia.vue";

import OrientationAndIntroduction from "../../../components/frontend/pages/main-nav-pages/students/OrientationAndIntroduction.vue";
import StudentService from "../../../components/frontend/pages/main-nav-pages/students/StudentService.vue";

import AgentApplication from "../../../components/frontend/pages/main-nav-pages/agent-zone/AgentApplication.vue";
import AgentList from "../../../components/frontend/pages/main-nav-pages/agent-zone/AgentList.vue";

// Current Trainee
import Agreement from "../../../components/frontend/pages/main-nav-pages/current-trainees/Agreement.vue";
import ImportantLinks from "../../../components/frontend/pages/main-nav-pages/current-trainees/ImportantLinks.vue";
import StudentSupports from "../../../components/frontend/pages/main-nav-pages/current-trainees/StudentSupports.vue";
import VisaExigency from "../../../components/frontend/pages/main-nav-pages/current-trainees/VisaExigency.vue";

import Agency from "../../../components/frontend/pages/main-nav-pages/Agency.vue";
import ContactUs from "../../../components/frontend/pages/main-nav-pages/ContactUs.vue";

import ApplyForm from "../../../components/frontend/pages/ApplyForm.vue";

let routerMainPages = [

    // About Us 
    
    {
        name:'WelcomeToIbm',
        path:'/about-us',
        component:WelcomeToIbm,
        
        meta: {
            auth: false,
          }

    },  

    {
        name: "WelcomeToIbm",
        path: "/welcome-to-ibm",
        component: WelcomeToIbm,

        meta: {
            auth: false,
        },
    },

    {
        name: "OurApproachStrategy",
        path: "/our-approach-strategy",
        component: OurApproachStrategy,

        meta: {
            auth: false,
        },
    },

    {
        name: "WhyChooseIbm",
        path: "/why-choose-ibm",
        component: WhyChooseIbm,

        meta: {
            auth: false,
        },
    },

    // The Institute

    {
        name: "Accreditation",
        path: "/accreditation",
        component: Accreditation,

        meta: {
            auth: false,
        },
    },
    {
        name: "LiveInAustralia",
        path: "/live-in-australia",
        component: LiveInAustralia,

        meta: {
            auth: false,
        },
    },
    {
        name: "OurTeachingMethod",
        path: "/our-teaching-method",
        component: OurTeachingMethod,

        meta: {
            auth: false,
        },
    },
    {
        name: "QualificationStructure",
        path: "/qualification-structure",
        component: QualificationStructure,

        meta: {
            auth: false,
        },
    },
    {
        name: "AQF",
        path: "/aqf",
        component:AQF,

        meta: {
            auth: false,
        },
    },
    {
        name: "OurCampus",
        path: "/our-campus",
        component:OurCampus,

        meta: {
            auth: false,
        },
    },
    {
        name: "UsefulLinks",
        path: "/useful-links",
        component: UsefulLinks,

        meta: {
            auth: false,
        },
    },
    {
        name: "News",
        path: "/news",
        component: News,

        meta: {
            auth: false,
        },
    },

    // Future Candidates

    {
        name: "DictionVictoriaPolytechnic",
        path: "/diction-victoria-polytechnic",
        component: DictionVictoriaPolytechnic,

        meta: {
            auth: false,
        },
    },
    {
        name: "EnthusiasmAndOrientation",
        path: "/enthusiasm-and-orientation",
        component: EnthusiasmAndOrientation,

        meta: {
            auth: false,
        },
    },
    {
        name: "ResidencyAndComfortability",
        path: "/residency-and-comfortability",
        component: ResidencyAndComfortability,

        meta: {
            auth: false,
        },
    },
    {
        name: "WelcomeToAustralia",
        path: "/welcome-to-australia",
        component: WelcomeToAustralia,

        meta: {
            auth: false,
        },
    },
    {
        name: "OrientationAndIntroduction",
        path: "/orientation-and-introduction",
        component: OrientationAndIntroduction,

        meta: {
            auth: false,
        },
    },
    {
        name: "StudentService",
        path: "/student-service",
        component: StudentService,

        meta: {
            auth: false,
        },
    },

    {
        name: "AgentApplication",
        path: "/agent-application",
        component: AgentApplication,

        meta: {
            auth: false,
        },
    },
    {
        name: "AgentList",
        path: "/agent-list",
        component: AgentList,

        meta: {
            auth: false,
        },
    },

    // Current Trainee
    {
        name: "Agreement",
        path: "/agreement",
        component: Agreement,

        meta: {
            auth: false,
        },
    },
    {
        name: "ImportantLinks",
        path: "/important-links",
        component: ImportantLinks,

        meta: {
            auth: false,
        },
    },
    {
        name: "StudentSupports",
        path: "/student-supports",
        component: StudentSupports,

        meta: {
            auth: false,
        },
    },
    {
        name: "VisaExigency",
        path: "/visa-exigency",
        component: VisaExigency,

        meta: {
            auth: false,
        },
    },

    // Others
    {
        name: "Agency",
        path: "/agency",
        component: Agency,

        meta: {
            auth: false,
        },
    },
    {
        name: "ContactUs",
        path: "/contact-us",
        component: ContactUs,

        meta: {
            auth: false,
        },
    },
    {
        name: "ApplyForm",
        path: "/apply-form",
        component: ApplyForm,
        meta: {
            auth: false,
        },
    },
];

export default routerMainPages;
