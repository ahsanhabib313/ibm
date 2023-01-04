// Enroll Now  
import AdmissionCost from '../../../components/frontend/pages/secondary-nav-pages/enroll-now/AdmissionCost'
import CreditDetails from '../../../components/frontend/pages/secondary-nav-pages/enroll-now/CreditDetails'
import EntranceDemand from '../../../components/frontend/pages/secondary-nav-pages/enroll-now/EntranceDemand'
import HowToApply from '../../../components/frontend/pages/secondary-nav-pages/enroll-now/HowToApply'
import DownloadEnrollmentForm from '../../../components/frontend/pages/secondary-nav-pages/enroll-now/DownloadEnrollmentForm'

// Materials  
import FormPolicy from '../../../components/frontend/pages/secondary-nav-pages/materials/FormPolicy'
import Gallery from '../../../components/frontend/pages/secondary-nav-pages/materials/Gallery'
import MarketingMethods from '../../../components/frontend/pages/secondary-nav-pages/materials/MarketingMethods'
import Videos from '../../../components/frontend/pages/secondary-nav-pages/materials/Videos'

import CovidFree from '../../../components/frontend/pages/secondary-nav-pages/CovidFree'

let routerSecondaryPages = [

    // Enroll Now 
    {
        name:'AdmissionCost',
        path:'/admission-cost',
        component:AdmissionCost,
        
        meta: {
            auth: false,
          }

    }, 
    {
        name:'CreditDetails',
        path:'/credit-details',
        component:CreditDetails,
        
        meta: {
            auth: false,
          }

    }, 
    {
        name:'EntranceDemand',
        path:'/entrance-demand',
        component:EntranceDemand,
        
        meta: {
            auth: false,
          }

    }, 
    {
        name:'HowToApply',
        path:'/how-to-apply',
        component:HowToApply,
        
        meta: {
            auth: false,
          }

    }, 
    {
        name:'DownloadEnrollmentForm',
        path:'/download-enrollment-form',
        component:DownloadEnrollmentForm,
        
        meta: {
            auth: false,
          }

    }, 

    // Materials  
    {
        name:'FormPolicy',
        path:'/form-policy',
        component:FormPolicy,
        
        meta: {
            auth: false,
          }

    }, 
    {
        name:'Gallery',
        path:'/gallery',
        component:Gallery,
        
        meta: {
            auth: false,
          }

    }, 
    {
        name:'MarketingMethods',
        path:'/marketing-methods',
        component:MarketingMethods,
        
        meta: {
            auth: false,
          }

    }, 
    {
        name:'Videos',
        path:'/videos',
        component:Videos,
        
        meta: {
            auth: false,
          }

    }, 

    // Others  

    {
        name:'CovidFree',
        path:'/covid-free',
        component:CovidFree,
        
        meta: {
            auth: false,
          }

    }, 


]

export default routerSecondaryPages