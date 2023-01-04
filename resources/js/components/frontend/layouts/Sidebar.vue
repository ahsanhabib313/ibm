<template>

    <div class="card">
        <div class="card-body">
            <div class="user-info">
                <div class="text-center mb-4">
                    <img :src="url+'/uploads/user/'+profile_pic" class="rounded mx-auto d-block d-profile-img"
                        alt="...">
                </div>
                <ul>
                    <h4>{{user.user.name}}</h4>
                    <p class="mt-2 mb-2"><i class="fa fa-phone"></i> {{user.user.phone}}</p>
                    <p class="mt-2 mb-2"><i class="fa fa-envelope"></i> {{user.user.email}}</p>
                </ul>
            </div>
            <hr>
            <div class="user-links mt-4">
                <ul>
                    <li class="d-li-style">
                        <router-link to="/profile" class="text-primary custom-a-style"><i class="fa fa-user"></i> Profile</router-link>
                    </li>
                    <li class="d-li-style">
                        <router-link to="/customer-order" class="text-primary custom-a-style"><i class="fa-solid fa-list"></i> Order</router-link>
                    </li>
                    <li class="d-li-style">
                        <router-link to="/invoice" class="text-primary custom-a-style"><i class="fa-solid fa-file-invoice"></i> Invoice</router-link>
                    </li>
                    <li class="d-li-style">
                        <router-link to="#" class="text-primary custom-a-style"><i class="fa-solid fa-list-check"></i> Service List</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</template>

<script>
import {mapGetters}  from 'vuex'
import path from '../../../src/global-config/mixin/path-solution'
export default {
    mixins:[path],
    data(){
        return{
            profile_pic:''
        }
    },
    computed:{
        ...mapGetters({
            user:'user'
        })
    },
    created(){

        this.profile_pic = this.user.user.photo == null?'profile.png':this.user.user.photo
    }
}
</script>
