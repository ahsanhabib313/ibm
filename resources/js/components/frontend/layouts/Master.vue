<template>
        
    <div>
        <navbar></navbar>
        <aside-content></aside-content>
        <div class="body-overlay"></div>
        <router-view key="this.$router.fullPath"></router-view>
        <subscription></subscription>
        <footer-content></footer-content>
    </div>
    
</template>
<script>
import Sidebar from './Sidebar.vue'
import Navbar from './Navbar.vue'
import AsideContent from './AsideContent.vue'
import FooterContent from './FooterContent.vue'
import Placeholder from './Placeholder.vue'
import Subscription from '../partials/Subscription.vue'
export default {
     components:{
        Sidebar,
        FooterContent,
        Navbar,
        AsideContent,
        Placeholder,
        Subscription
    },
    created(){
        if(this.$route.name != 'CheckOut')
        {
            localStorage.removeItem('package')
        }
    }
}
</script>