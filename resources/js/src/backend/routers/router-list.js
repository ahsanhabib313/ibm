import Dashboard from '../../../components/backend/dashboards/Dashboard'

import Provider from '../../../components/backend/provider/Index.vue'
import CreateProvider from '../../../components/backend/provider/Create.vue'

import Booking from '../../../components/backend/booking/Index.vue'
import CreateBooking from '../../../components/backend/booking/Create.vue'

import Customer from '../../../components/backend/customer/Index.vue'
import CreateCustomer from '../../../components/backend/customer/Create.vue'

import Service from '../../../components/backend/service/Index.vue'
import CreateService from '../../../components/backend/service/Create.vue'

import Post from '../../../components/backend/blog/Index.vue'
import CreatePost from '../../../components/backend/blog/Create.vue'

import CourseCategory from '../../../components/backend/course-category/Index.vue'
import CreateCourseCategory from '../../../components/backend/course-category/Create.vue'

import Course from '../../../components/backend/courses/Index.vue'
import CreateCourse from '../../../components/backend/courses/Create.vue'

import Gallery from '../../../components/backend/gallery/Index.vue'
import CreateGallery from '../../../components/backend/gallery/Create.vue'

import ProviderService from '../../../components/backend/provider-service/Index.vue'
import CreateProviderService from '../../../components/backend/provider-service/Create.vue'

import PaypalCredential from '../../../components/backend/paypal-credential/PaypalCredential.vue'
import SuccessPayment from '../../../components/backend/paypal-credential/SuccessPayment.vue'
import CancelPayment from '../../../components/backend/paypal-credential/CancelPayment.vue'


import Order from '../../../components/backend/order/Order.vue'
import Wallet from '../../../components/backend/wallet/Wallet.vue'
import MyOrder from '../../../components/backend/service-provider/order/MyOrder.vue'
import MyWallet from '../../../components/backend/service-provider/wallet/MyWallet.vue'
import MyProfile from '../../../components/backend/service-provider/profile/MyProfile.vue'

import TotalOrder from '../../../components/backend/report/company/TotalOrder.vue'
import TotalCustomer from '../../../components/backend/report/company/TotalCustomer.vue'
import TotalProvider from '../../../components/backend/report/company/TotalProvider.vue'

import TotalServiceOrder from '../../../components/backend/report/provider/TotalOrder.vue'

import CustomerMessage from '../../../components/backend/message/company/CustomerMessage.vue'
import MessageBody from '../../../components/backend/message/company/MessageBody.vue'
import MessageList from '../../../components/backend/message/company/MessageList.vue'

import Student from '../../../components/backend/students/Index.vue'
import Certificate from '../../../components/backend/certificate/Index.vue'
import Agent from '../../../components/backend/agents/Index.vue'


let routeList = [
    {
        name:'Dashboard',
        path:'/',
        component:Dashboard,
        
        meta: {
            auth: true,
          }

    },  
    {
        name:'Student',
        path:'/students',
        component:Student,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'Certificate',
        path:'/certificate',
        component:Certificate,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'Agent',
        path:'/agents',
        component:Agent,
        meta: {
            auth:true,
          }

    }, 
    
    {
        name:'Order',
        path:'/order',
        component:Order,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'SuccessPayment',
        path:'/payment-success/:order_id',
        component:SuccessPayment,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'CancelPayment',
        path:'/payment-cancel',
        component:CancelPayment,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'Wallet',
        path:'/wallet',
        component:Wallet,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'MyOrder',
        path:'/service-provider-order',
        component:MyOrder,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'MyWallet',
        path:'/my-wallet',
        component:MyWallet,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'MyProfile',
        path:'/my-profile',
        component:MyProfile,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'Provider',
        path:'/service-provider',
        component:Provider,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'CreateProvider',
        path:'/service-provider/create',
        component:CreateProvider,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'CreateProvider',
        path:'/service-provider/:id',
        component:CreateProvider,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'Customer',
        path:'/customer',
        component:Customer,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'CreateCustomer',
        path:'/customer/create',
        component:CreateCustomer,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'CreateCustomer',
        path:'/customer/:id',
        component:CreateCustomer,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'Customer',
        path:'/customer',
        component:Customer,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'CreateCustomer',
        path:'/customer/create',
        component:CreateCustomer,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'CreateCustomer',
        path:'/customer/:id',
        component:CreateCustomer,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'Booking',
        path:'/booking',
        component:Booking,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'CreateBooking',
        path:'/booking/create',
        component:CreateBooking,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'CreateBooking',
        path:'/booking/:id',
        component:CreateBooking,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'Service',
        path:'/service',
        component:Service,
        meta: {
            auth:true,
          }

    }, 
    
    {
        name:'CreateService',
        path:'/service/create',
        component:CreateService,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'CreateService',
        path:'/service/:id',
        component:CreateService,
        meta: {
            auth:true,
          }

    }, 

    // Blog Post 
    {
        name:'Post',
        path:'/post',
        component:Post,
        meta: {
            auth:true,
          }

    }, 
    
    {
        name:'CreatePost',
        path:'/post/create',
        component:CreatePost,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'CreatePost',
        path:'/post/:id',
        component:CreatePost,
        meta: {
            auth:true,
          }

    }, 

    // Blog Post 
    {
        name:'CourseCategory',
        path:'/course-category',
        component:CourseCategory,
        meta: {
            auth:true,
          }

    }, 
    
    {
        name:'CreateCourseCategory',
        path:'/course-category/create',
        component:CreateCourseCategory,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'CreateCourseCategory',
        path:'/course-category/:id',
        component:CreateCourseCategory,
        meta: {
            auth:true,
          }

    }, 

    // Course
    {
        name:'Course',
        path:'/courses',
        component:Course,
        meta: {
            auth:true,
          }

    }, 
    
    {
        name:'CreateCourse',
        path:'/courses/create',
        component:CreateCourse,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'CreateCourse',
        path:'/courses/:id',
        component:CreateCourse,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'Gallery',
        path:'/gallery',
        component:Gallery,
        meta: {
            auth:true,
          }

    }, 
    
    {
        name:'CreateGallery',
        path:'/gallery/create',
        component:CreateGallery,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'CreateGallery',
        path:'/gallery/:id',
        component:CreateGallery,
        meta: {
            auth:true,
          }

    }, 

    {
        name:'ProviderService',
        path:'/provider-service',
        component:ProviderService,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'CreateProviderService',
        path:'/provider-service/create',
        component:CreateProviderService,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'CreateProviderService',
        path:'/provider-service/:id',
        component:CreateProviderService,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'PaypalCredential',
        path:'/paypal-credential',
        component:PaypalCredential,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'TotalOrder',
        path:'/total-order',
        component:TotalOrder,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'TotalServiceOrder',
        path:'/total-customer-order',
        component:TotalServiceOrder,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'TotalCustomer',
        path:'/total-customer',
        component:TotalCustomer,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'TotalProvider',
        path:'/total-provider',
        component:TotalProvider,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'CustomerMessage',
        path:'/customer-message',
        component:CustomerMessage,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'MessageBody',
        path:'/customer-message/:id',
        component:MessageBody,
        meta: {
            auth:true,
          }

    }, 
    {
        name:'MessageList',
        path:'/message-list',
        component:MessageList,
        meta: {
            auth:true,
          }

    }, 
    
]

export default routeList