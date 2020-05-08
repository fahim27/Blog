<template>
<div>
    <section class="content">
        <div class="container-fluid">
           <div class="row justify-content-center clearfix">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Category List
                                <small>See your all category here.</small>

                            </h2>
                            <ul class="header-dropdown m-r--5">

                                    <router-link to="add/category" class="btn bg-purple  btn-block btn-lg waves-effect ">Add Category</router-link>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>

                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>{{getAllCategory}}</th>

                                </tr>
                                </thead>
                                <tbody>
<!--                                <tr v-if="categoryList" v-for="item,key in categoryList">-->
<!--                                    <th>{{key+1}}</th>-->
<!--                                    <th>{{item.name}}</th>-->
<!--                                    <th>{{item.created_at}}</th>-->

<!--                                </tr>-->

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
</template>

<script>
    export default {
        name: "Category",
        data(){
            return {
                categoryList:""
            }
        },
        mounted() {
                // axios.get('get/category')
                //      .then((resp)=>{
                //          console.log(resp);
                //          if (resp.data.success == 'OK') {
                //             this.categoryList=resp.data.category;
                //          }
                //      })
                //     .catch((error)=>{
                //
                //     })
            this.$store.dispatch('allCategory');
        },
        computed:{

            getAllCategory(){
                return this.$store.getters.getCategory;
            }
        },
        methods:{


        }

    }
</script>

<style scoped>

</style>
