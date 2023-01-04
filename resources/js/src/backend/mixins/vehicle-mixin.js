export default{
    data(){
        return{
            url:window.location.origin,
            vehicles:[]  
        }
    },

    created(){
        this.getVehicle()
    },

    methods:{
        getVehicleReport(){
            axios.get(this.url+'/api/vehicle-summary/'+vehicle_id)
            .then(res=>{
               console.log(res); 
            })
        },

        getVehicle(){
            
            axios.get(this.url+'/api/get-vehicle/')
            .then(res=>{
               console.log(res); 
               this.vehicles = res.data.vehicles
            })
        }
    }
}