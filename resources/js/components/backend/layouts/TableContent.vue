<template>
    
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-4">
            
            <div class="card">
                <div class="card-header">  
                    <div class="row py-1">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <h3 class="card-title">{{ cardTitle }}</h3>
                            <pulseLoader v-if="isLoading" class="text-center"></pulseLoader>
                        </div>
                    </div>
                    <router-link  :to="this.$route.path+'/create'" class="btn btn-sm btn-primary float-right m-1" v-if="isAddItem">Add New</router-link>
                     <button type="button" v-if="isUpload" class="btn btn-sm btn-primary float-right m-1 modal_show_button" data-toggle="modal" data-target="#exampleModal">
                      Upload Excel
                    </button>
                     
                     <v-select @input="getDataList(page = 1, sorting_item)" v-if="isSorting" v-model="sortingForm.sorting_item" class="col-md-2 float-right m-1" :options="sortingData" :reduce="sorting => sorting.count_num" label="count_num" placeholder="Sort Item"></v-select>
                    
                    <button @click="getDataList(page = 1, sorting_item = 'all_data')" v-if="isDownload" class="btn btn-sm btn-success float-right m-1">Download</button>
                    
                    <downloadExcel ref="download" style="display:none" class="download btn btn-sm btn-success float-right m-1" :data="dataDownload" :fields="excelFields"  :name="cardTitle"></downloadExcel>
                   <!-- <form @keypress="dataSearching" > -->
                       <input type="text" @input="getDataList()" v-model="searchForm.search" name="search" style="padding: 0 7px!important; height: calc(2.25rem + 1px)!important;" class="col-md-2 form-control"  placeholder="Search here…" v-if="isSearchBox">
                   <!-- </form> -->
                    
                  
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-response">
                        <thead>
                            <tr class="table-secondary">
                                <td style="text-align:center;" v-for="(thead, i) in columnsHead"  :key="i">{{ thead }}</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item, index) in dataList.data" :key="index" v-if="!item.isComplete">
                                <td style="text-align:center;">{{ dataList.meta.from +index }}</td>
                                <td style="text-align:center;" v-for="(tbody, i) in columnsBody.slice(0, columnsBody.length)" :key="i" v-html="item[tbody]"> 
                                   
                                </td>
                                <td class="text-center" v-if="isActionBtn">
                                    <a href="#" v-if="isSingle" @click.prevent="isSingleData(item)"
                                        class="btn btn-success btn-circle btn-xs">
                                        <i class="fa fa-send"></i> {{actionTitle}}
                                    </a>
                                    <a href="#" v-if="isEditBtn" @click.prevent="showEditForm(item.id)"
                                        class="btn btn-success btn-circle btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" v-if="isDelBtn" @click.prevent="deleteItem(item.id)"
                                        class="btn btn-danger btn-circle btn-xs">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr v-if="dataList.data.length == 0"><td :colspan="columnsHead.length" class="text-danger text-center">No data available!</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    <pagination class="pagination pagination-sm m-0 float-right" :data="dataList" :limit="1" @pagination-change-page="getDataList"></pagination>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
    
</template>

<script>

    export default {
        props: [
            'isAddItem', 'isSingle', 'actionTitle', 'isSingleData', 'isEditBtn', 'isDelBtn','isActionBtn', 'cardTitle','columnsHead', 'columnsBody', 'dataList', 'showEditForm', 'deleteItem', 'getDataList', 'excelFields','excelTitle', 'isDownload', 'isSorting','isSearchBox','searchForm', 'sortingForm', 'dataDownload', 'isLoading','isUpload'
            ],

        data(){
            return {
                sortingData:[
                    {count_num:15},
                    {count_num:25},
                    {count_num:50},
                    {count_num:100},
                    {count_num:500},
                    {count_num:1000},
                ],
               
            }
        },
        created(){
            
        },
        // computed:{
        //     permissions:function(){
        //         setTimeout(()=>{
        //         console.log('this.dataList.permissions', this.dataList.permissions.read);
        //         return this.dataList.permission

        //     }, 2000)
        //     }
        // },

    }

</script>

