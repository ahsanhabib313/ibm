<template>
    <base-wallet :api_path="api_path" :walletTitle="walletTitle"></base-wallet>
</template>

<script>
import BaseWallet from '../../partials/BaseWallet.vue'
export default {
  components: { BaseWallet },
    data(){
        return{
            api_path:'my-wallet',
            walletTitle:'Manage Wallet'
        }
    }
}
</script>