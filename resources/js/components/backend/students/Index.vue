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
        this.generalApi = 'students'
        this.isActionBtn = false
        // this.isSingle = true
        this.columnsHead.push(
            'SI.',
            'Name',
            'Email',
            'Phone',
            'State',
            'Address',
            'Course',
            'Class Enroll Type',
            'Certificate Expected by',
            // 'Action'
            
        )

        this.columnsBody.push(
            'name',
            'email',
            'phone',
            'country_state',
            'address',
            'course_name',
            'course_enroll_type',
            'certified_by',
        )

        this.excelFields = {
            "Name":"name",
            "Email":"email",
            "Phone":"phone",
            "State":"country_state",
            "Address":"address",
            "Course":"course_name",
            "Class Enroll Type":"course_enroll_type",
            "Certificate Expected by":"certified_by",
        }
    }
}
</script>