<template>
    <div class="card">
        <div class="card-body">
            <h2 class="mb-4"> {{walletTitle}} </h2>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Payment By</th>
                        <th>Payment For</th>
                        <th>Payment From</th>
                        <th>Purpose</th>
                        <th>Transaction ID</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="wallet, index in wallets" :key="index">
                        <td>{{ wallet.payment_by }}</td>
                        <td>{{ wallet.payment_from }}</td>
                        <td>{{ wallet.purpose }}</td>
                        <td>{{ wallet.amount }}</td>
                        <td>{{ wallet.transaction_id }}</td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    props:['api_path', 'walletTitle'],
    data(){
        return{
            wallets:[],
            base_url:window.location.origin
        }
    },

    created(){
        this.getWallet()
    },

    methods:{
        getWallet(){
            axios.get(this.base_url+'/api/'+this.api_path)
            .then(res=>{
                this.wallets = res.data.data
            })
        }
    }
}
</script>

<style lang="css" scoped>
.table td, .table th {
    padding: 0.2em !important;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
    font-size: 13px !important;
   
}
</style>