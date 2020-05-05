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
                                    <th>FIRST NAME</th>
                                    <th>LAST NAME</th>
                                    <th>USERNAME</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Larry</td>
                                    <td>Jellybean</td>
                                    <td>@lajelly</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Larry</td>
                                    <td>Kikat</td>
                                    <td>@lakitkat</td>
                                </tr>
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
        name: "Category"
    }
</script>

<style scoped>

</style>
