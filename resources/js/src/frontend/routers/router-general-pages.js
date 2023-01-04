import Home from "../../../components/frontend/home/Home";
import Registration from "../../../components/frontend/auth/Registration";
import Login from "../../../components/frontend/auth/Login";
import CheckOut from "../../../components/frontend/checkout/CheckOut.vue";
import ServiceSearch from "../../../components/frontend/service-search/ServiceSearch";

import MyOrder from "../../../components/frontend/customer/MyOrder.vue";
import Invoice from "../../../components/frontend/customer/Invoice.vue";

import Settings from "../../../components/frontend/profile/Settings.vue";
import Profile from "../../../components/frontend/profile/Profile.vue";
// import SearchCertificate from "../../../components/frontend/profile/SearchCertificate.vue";

import SingleService from "../../../components/frontend/service/SingleService.vue";

import Courses from "../../../components/frontend/pages/Courses.vue";
import SingleCourse from "../../../components/frontend/pages/SingleCourse.vue";
import Blog from "../../../components/frontend/pages/Blog.vue";
import SingleBlog from "../../../components/frontend/pages/SingleBlog.vue";
import SingleIndustry from "../../../components/frontend/pages/SingleIndustry.vue";

// import Business from "../../../components/frontend/pages/industry/Business.vue";

import AdvanceDiplomaOfBusinessAdministration from "../../../components/frontend/pages/courses/advanced-diploma-of-business.vue";
import DiplomaOfBusinessAdministrator from "../../../components/frontend/pages/courses/diploma-of-business-administration.vue";
import GeneralEnglish from "../../../components/frontend/pages/courses/general-english.vue";
import CertificateCarpentry from "../../../components/frontend/pages/courses/certificate-III-in-carpentry.vue";
import Management from "../../../components/frontend/pages/courses/graduate-diploma-of-management.vue";

import Success from "../../../components/frontend/checkout/Success.vue";
import Cancel from "../../../components/frontend/checkout/Cancel.vue";

import UserLocation from "../../../components/frontend/auth/UserLocation.vue";

import SingleProviderService from "../../../components/frontend/service/SingleProviderService.vue";

import ErrorPage from "../../../components/frontend/pages/Error.vue";

let routeGeneralPages = [
    {
        name: "Home",
        path: "/",
        component: Home,

        meta: {
            auth: false,
        },
    },
    {
        name: "Registration",
        path: "/signup",
        component: Registration,

        meta: {
            auth: false,
        },
    },
    {
        name: "UserLocation",
        path: "/user-location",
        component: UserLocation,

        meta: {
            auth: false,
        },
    },
    {
        name: "Login",
        path: "/signin",
        component: Login,

        meta: {
            auth: false,
        },
    },
    {
        name: "Profile",
        path: "/profile",
        component: Profile,

        meta: {
            auth: false,
        },
    },
    {
        name: "Settings",
        path: "/settings",
        component: Settings,

        meta: {
            auth: false,
        },
    },
    {
        name: "ServiceSearch",
        path: "/find-service",
        component: ServiceSearch,

        meta: {
            auth: true,
        },
    },

    {
        name: "CheckOut",
        path: "/checkout",
        component: CheckOut,

        meta: {
            auth: true,
        },
    },

    {
        name: "MyOrder",
        path: "/customer-order",
        component: MyOrder,

        meta: {
            auth: true,
        },
    },

    {
        name: "Success",
        path: "/success/:order_id",
        component: Success,

        meta: {
            auth: true,
        },
    },
    {
        name: "Cancel",
        path: "/cancel",
        component: Cancel,

        meta: {
            auth: true,
        },
    },

    {
        name: "Invoice",
        path: "/invoice",
        component: Invoice,

        meta: {
            auth: true,
        },
    },
    {
        name: "SingleService",
        path: "/services/:service_slug",
        component: SingleService,

        meta: {
            auth: false,
        },
    },
    {
        name: "Courses",
        path: "/courses",
        component: Courses,

        meta: {
            auth: false,
        },
    },
    {
        name: "SingleCourse",
        path: "/courses/:slug",
        component: SingleCourse,

        meta: {
            auth: false,
        },
    },
    {
        name: "Blog",
        path: "/blogs",
        component: Blog,

        meta: {
            auth: false,
        },
    },
    {
        name: "SingleBlog",
        path: "/blogs/:slug",
        component: SingleBlog,

        meta: {
            auth: false,
        },
    },
    {
        name: "SingleIndustry",
        path: "/industry/:slug",
        component: SingleIndustry,

        meta: {
            auth: false,
        },
    },

    // {
    //     name: "Business",
    //     path: "/business",
    //     component: Business,

    //     meta: {
    //         auth: false,
    //     },
    // },

    {
        name: "AdvanceDiplomaOfBusinessAdministration",
        path: "/advanced-diploma-of-business",
        component: AdvanceDiplomaOfBusinessAdministration,

        meta: {
            auth: false,
        },
    },
    {
        name: "DiplomaOfBusinessAdministrator",
        path: "/diploma-of-business-administration",
        component: DiplomaOfBusinessAdministrator,

        meta: {
            auth: false,
        },
    },
    {
        name: "GeneralEnglish",
        path: "/general-english",
        component: GeneralEnglish,

        meta: {
            auth: false,
        },
    },
    {
        name: "CertificateCarpentry",
        path: "/ certificate-III-in-carpentry",
        component: CertificateCarpentry,

        meta: {
            auth: false,
        },
    },
    {
        name: "Management",
        path: "/graduate-diploma-of-management",
        component: Management,

        meta: {
            auth: false,
        },
    },

    {
        name: "SingleProviderService",
        path: "/provider/:user_id/:service_slug",
        component: SingleProviderService,

        meta: {
            auth: false,
        },
    },
    // {
    //     name: "SearchCertificate",
    //     path: "/search-certificate",
    //     component: SearchCertificate,

    //     meta: {
    //         auth: false,
    //     },
    // },
    {
        name: "ErrorPage",
        path: "/error",
        component: ErrorPage,
        meta: {
            auth: false,
        },
    },
];

export default routeGeneralPages;
