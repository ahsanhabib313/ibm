import SignIn from '../../../../components/backend/authentication/SignIn.vue'


let routeList = [ 
    {
        name:'SignIn',
        path:'/signin',
        component:SignIn,
        meta: {
            auth:false,
          }

    },  
    
]

export default routeList