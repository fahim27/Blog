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
                            <div class="alert alert-danger" v-if="errors">
                                <ul>

                                    <li v-for="error in errors">{{error}}</li>
                                </ul>
                            </div>
                            <form>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="Name"
                                                       v-model="name">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <button class="btn bg-purple btn-lg waves-effect " @click="categoryStore"> Adddd
                                </button>

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
        data() {
            return {
                name: "",
                errors: ''
            }
        },
        methods: {
            categoryStore() {
                axios.post('store/category', {
                    name: this.name
                })
                    .then((resp) => {
                        console.log(resp.data);
                        if (resp.data.success == 'OK') {
                            this.$router.push({path: '/category'})
                            Swal.fire({
                                position: 'top-end',
                                title: 'category add successfully',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            // console.log(this.$route.push('/category'))
                        } else if (resp.data.success == 'FAILD') {

                            this.errors = resp.data.errors;
                        } else {
                            alert('sorry ! we are find some problemm')
                        }

                    })
                    .catch((error) => {
                        alert('sorry ! we are find some problem')
                        // console.log(error)
                    })
            },
        },
    }
</script>

<style scoped>

</style>
