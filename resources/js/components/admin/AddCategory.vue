<template>
    <section class="content">
        <div class="container-fluid">

            <!-- Basic Example -->
            <div class="row  justify-content-center clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-2">
                    <div class="card">
                        <div class="header bg-red">
                            <h2 class="text-center">
                                Add Category
                            </h2>

                        </div>
                        <div class="body">
                            <form>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="Name" v-model="category">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <button class="btn bg-purple btn-lg waves-effect "> Submit </button>

                            </form>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "AddCategory",
        data(){
            return{
                category:""
            }
        },
    }
</script>

<style scoped>

</style>
