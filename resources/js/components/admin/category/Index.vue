<template>
<div class="container">
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category/Lists</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-around">
          <div class="col-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Category Lists </h3>
               <router-link to="/create-category" class="btn btn-sm btn-info float-right">Add New Category</router-link>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Category Name</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                  <tr>
                    <td>1</td>
                    <td>Category 1</td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>
                        <a class="btn btn-success">Edit</a>
                        <a class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Sl No</th>
                    <th>Category Name</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
</div>
</template>

<script>
export default {
    name: "CategoryIndex"
}
</script>

<style scoped>

</style>