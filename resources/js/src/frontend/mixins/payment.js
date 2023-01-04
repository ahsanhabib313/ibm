export default{
    data() {
        return {

            url: window.location.origin,
            package_name:'',
            package_id:'',
            package_price:null,
            
        }
    },


    mounted(){

        this.getSinglePackage()

    },

    methods: {
        getSinglePackage(){

            // let pkgData = []
            // axios.get(this.url+'/api/get-single-package/'+this.$route.params.id)            
            // .then(res => {

            //     this.package_name = res.data.data.name
            //     this.package_id = res.data.data.id
            //     this.package_price = res.data.data.price,
            //     console.log(res.data.data);

            //     localStorage.removeItem('resortPackage')
            //     localStorage.setItem('resortPackage', JSON.stringify(res.data.data))
            // })

               let  packageData  = JSON.parse(window.localStorage.getItem('resortPackage'))

            //    console.log('packageData', JSON.parse(packageData));

            //    let resortPackage = JSON.parse(resortPackage)
            
                this.package_name = packageData.name
                this.package_id = packageData.id
                this.package_price = packageData.price
                // console.log(resortPackage);
        },
        payNow(){

          this.$refs.paybtn.click()
        
        }
    },
}