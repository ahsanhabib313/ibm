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
        this.generalApi = 'package-service'
        this.columnsHead.push(
            'S.I.',
            'Service',
            'Package',
            'Price',
            'Action'
        )

        this.columnsBody.push(
            'service',
            'package',
            'price'
        )
    }
}
</script>