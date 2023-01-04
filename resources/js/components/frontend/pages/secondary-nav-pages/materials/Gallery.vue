<template>
   <base-layout>
        <main>
            <div class="container mt-4 mb-4">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="custom-div p-4 mt-4">Gallery Images</h2>
                        <ul class="gallery">
                            <li
                            v-for="(img, index) in images"
                            :key="index"
                            class="gallery-item"
                            @click="() => showImg(index)"
                            >
                            <img style="width:353px; height:353px;" class="rounded" :src="typeof img === 'string' ? img : img.src" />

                            </li>
                        </ul>
                        <vue-easy-lightbox
                        :visible="visible"
                        :imgs="images"
                        :index="index"
                        @hide="handleHide"
                    ></vue-easy-lightbox>
                    </div>
                </div>
            </div>
        </main>
   </base-layout>
</template>
<script>
import path from '../../../../../src/global-config/mixin/path-solution'
import BaseLayout from '../../../layouts/BaseLayout.vue'
export default {
    mixins:[path],
    components:{
        BaseLayout
    },
    
    data(){
        return{
            images:[],
            visible:false,
            index:0
           
        }
    },

    created(){
        this.getImages()
    },

    methods:{
        getImages()
        {
            axios.get(this.base_url+'/api/image-gallery')
            .then(res=>{

                let imgs = []

                res.data.forEach((image, index) => {
                    imgs[index] = this.url+'/uploads/gallery/'+image.image
                })

                this.images = imgs
                

                console.log('gallery', imgs);
            })
        },

       showImg(index) {
        this.index = index
        this.visible = true
      },

        handleHide(){
            this.visible = false
        }
    }
}
</script>

<style scoped>
ul.gallery{
    margin-left: -42px;;
}
ul li{
    float: left;
    margin: 8px;
    padding: 3px;
    list-style: none;
}
</style>