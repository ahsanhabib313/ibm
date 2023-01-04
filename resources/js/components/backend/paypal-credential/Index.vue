<template>
   <TableContent  style="margin-top:-20px;"  v-if="typeof(dataList) == 'object'" :searchForm="searchForm" :sortingForm="sortingForm" :isAddItem="isAddItem" :actionTitle="actionTitle" :isSingle="isSingle" :isSingleData="isSingleData" :isEditBtn="isEditBtn" :isDelBtn="isDelBtn" :isActionBtn="isActionBtn" :cardTitle="cardTitle" :columnsHead="columnsHead" :columnsBody="columnsBody" :dataList="dataList" :showEditForm="showEditForm" :deleteItem="deleteItem" :getDataList="getDataList" :excelFields="excelFields" :excelTitle="excelTitle" :isDownload="isDownload" :isSearchBox="isSearchBox" :isUpload="isUpload" :isSorting="isSorting" :dataDownload="dataDownload" :isLoading="isLoading" route="admin"></TableContent>
</template>

<script>
import mixin from '../../../../src/backend/mixins/mixin'
export default {
  
    mixins:[mixin],
    data(){
        return{
            bookingData:{},
            serviceProviders:[],
            booking_id:'',
            is_modal:false,
            service:{},
            modal_title:'Assign Order To Service Provider'
        }
    },
    created(){
        this.generalApi = 'paypal-credential'
        this.cardTitle = 'Manage Booking'
        this.isAddItem = false
        this.isEditBtn = false
        this.isDelBtn = false
        this.isSingle = true
        this.actionTitle = 'Assign Order'

        var _this = this

      
        // this.isDownload = false
        this.columnsHead.push(
            'SI.',
            'Customer Name',
            'Assign To',
            'Service',
            'Schedule Date',
            'Schedule Time',
            'Assign Status',
            'Assign Order'
            
        )

        this.columnsBody.push(
            'user_name',
            'assign_to',
            'service_name',
            'schedule_date',
            'schedule_time',
            'booking_status',
        )

        this.getServiceProvider()
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
            $('#booking_modal'+getItem.id).modal('show')
        },
    }
}
</script>