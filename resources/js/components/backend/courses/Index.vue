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
        this.generalApi = 'courses'       
        this.columnsHead.push(
            'S.I.',
            'Title',
            'Course Code',
            'CRICOS Code',
            'Duration',
            'Category',
            'Coure Unit',
            'Elective Unit',
            'Content',
            'Thumbnail',
            'Action'
        )

        this.columnsBody.push(
            'title',
            'course_code',
            'cricos_code',
            'duration',
            'course_category_name',
            'core_unit',
            'elective_unit',
            'course_details',
            'thumbnail_view',
        )
    }
}
</script>