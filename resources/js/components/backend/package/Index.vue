<template>
   <TableContent  style="margin-top:-20px;"  v-if="typeof(dataList) == 'object'" :searchForm="searchForm" :sortingForm="sortingForm" :isAddItem="isAddItem" :isEditBtn="isEditBtn" :isDelBtn="isDelBtn" :isActionBtn="isActionBtn" :cardTitle="cardTitle" :columnsHead="columnsHead" :columnsBody="columnsBody" :dataList="dataList" :showEditForm="showEditForm" :deleteItem="deleteItem" :getDataList="getDataList" :excelFields="excelFields" :excelTitle="excelTitle" :isDownload="isDownload" :isSearchBox="isSearchBox" :isUpload="isUpload" :isSorting="isSorting" :dataDownload="dataDownload" :isLoading="isLoading" route="admin"></TableContent>
</template>
<script>
import mixin from '../../../src/backend/mixins/mixin'
export default {
    mixins:[mixin],
    data(){
        return{

        }
    },
    created(){
        this.generalApi = 'package'
        this.isDownload = false
        this.columnsHead.push(
            'SI.',
            'Title',
            'Group',
            'No. of Person',
            'Price',
            'start Date',
            'End Date',
            'Description',
            'Photo',
            'Action'
            
        )

        this.columnsBody.push(
            'name',
            'group',
            'number_of_person',
            'price',
            'start_date',
            'end_date',
            'description',
            'package_image',
        )
    }
}
</script>