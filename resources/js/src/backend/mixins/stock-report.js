export default{
    data(){
        return{
            api:'',
            employees:[],
            drivers:[],
            sheet_angles:[],
            tires:[],
            batteries:[],
            fuels:[],
            vehicles:[],
        }
    },
    created(){
        this.api = 'stock-summary-details'
        this.getData()
    },
    methods:{
        getData(){
            let url = window.location.origin
            axios.get(url+'/api/'+this.api)
            .then(res =>{
                console.log(res.data.sheet_angles);
                this.employees = res.data.employees
                this.drivers = res.data.drivers
                this.sheet_angles = res.data.sheet_angles
                this.tires = res.data.tires
                this.batteries = res.data.batteries
                this.fuels = res.data.fuels
                this.vehicles = res.data.vehicles
            })
        }
    }
}