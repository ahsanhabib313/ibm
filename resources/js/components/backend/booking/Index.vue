<template>
<div>
   <TableContent  style="margin-top:-20px;"  v-if="typeof(dataList) == 'object'" :searchForm="searchForm" :sortingForm="sortingForm" :isAddItem="isAddItem" :actionTitle="actionTitle" :isSingle="isSingle" :isSingleData="isSingleData" :isEditBtn="isEditBtn" :isDelBtn="isDelBtn" :isActionBtn="isActionBtn" :cardTitle="cardTitle" :columnsHead="columnsHead" :columnsBody="columnsBody" :dataList="dataList" :showEditForm="showEditForm" :deleteItem="deleteItem" :getDataList="getDataList" :excelFields="excelFields" :excelTitle="excelTitle" :isDownload="isDownload" :isSearchBox="isSearchBox" :isUpload="isUpload" :isSorting="isSorting" :dataDownload="dataDownload" :isLoading="isLoading" route="admin"></TableContent>

<assign-order-modal :bookingData="bookingData" :serviceProviders="serviceProviders" :modal_title="modal_title"></assign-order-modal>       
</div>
</template>

<script>
import mixin from '../../../src/backend/mixins/mixin'
import AssignOrderModal from '../partials/AssignOrderModal.vue'
import {mapGetters} from 'vuex'
export default {
  components: { AssignOrderModal },
    mixins:[mixin],
    data(){
        return{
            bookingData:{},
            serviceProviders:[],
            booking_id:'',
            is_modal:false,
            service:{},
            modal_title:'Accept Order'
        }
    },
    created(){
        this.generalApi = 'booking'
        this.cardTitle = 'Manage Booking'
        this.isAddItem = false
        this.isEditBtn = false
        this.isDelBtn = false
        // this.isSingle = true
        this.actionTitle = 'Accept Order'

        var _this = this

      
        // this.isDownload = false
        this.columnsHead.push(
            'SI.',
            'Customer Name',
            'Service',
            'Schedule Date',
            'Schedule Time',
            'Assign Status',
            // 'Accept Order'
            
        )

        this.columnsBody.push(
            'user_name',
            'service_name',
            'schedule_date',
            'schedule_time',
            'booking_status',
        )

        this.getServiceProvider()
    },

    computed:{

        ...mapGetters({
            user:'user'
        })
    },

    methods:{
        getServiceProvider(){

            axios.get(this.url+'/api/'+this.generalApi)
            .then(res=>{
                this.serviceProviders = res.data.service_providers

                console.log('res.data', res.data.service_providers);
            })
        },

        
    isSingleData(getItem){
            // console.log(getItem);
            $('.modal').attr('id', 'booking_modal'+getItem.id) 


            this.bookingData = getItem

            $("#booking_status").val(getItem.service.booking_status)
            $("#booking_id").val(getItem.id)
            $("#user_id").val(this.user.user.id)
            $("#customer_name").val(getItem.user_name)
            $("#service_name").val(getItem.service_name)
            $("#service_price").val(getItem.service.price)
            $("#commission").val(getItem.service.commission)
            $('#booking_modal'+getItem.id).modal('show')
        },
    }
}
</script>