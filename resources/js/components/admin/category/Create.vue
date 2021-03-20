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
              <li class="breadcrumb-item active">Category/Create</li>
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
                <h3 class="card-title">Category Create </h3>
               <router-link to="/categories" class="btn btn-sm btn-info float-right"> Category Lists</router-link>
              </div>
              <!-- /.card-header -->
             
             
              <!-- form start -->
              <form class="form-horizontal" @submit.prevent="addCategory" >
               
                <div class="card-body">
                  <div class="form-group row">
                    <label for="category" class="col-sm-4 col-form-label">Category Name</label>
                    <div class="col-sm-8">
                      <input :class="{ 'is-invalid': form.errors.has('category_name') }" type="text" class="form-control" id="category" v-model="form.category_name" name="category_name" placeholder="Enter category name">
                       <has-error :form="form" field="category_name"></has-error>
                    </div>
                  </div>
                 
                  <!-- <div class="form-group row">
                        <label for="category" class="col-sm-4 col-form-label">Status</label>
                    <div class="col-sm-8">

                      <div class="form-check form-check-inline">
                        <input type="checkbox" value="1" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Active</label>
                      </div>

                      <div class="form-check form-check-inline">
                        <input type="checkbox" value="0" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Inactive</label>
                      </div>
                    </div>
                  </div> -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button to="create-category" type="submit" class="btn btn-sm btn-info">Add Category</button>
                  <button type="reset" class="btn btn-danger btn-sm float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
          
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
    name: "CreateCategory",
    data(){
        return{
            form: new Form({
                category_name: null
            })
        }
    },
    methods:{
        addCategory:function(){
            let get_this = this;
            this.form.post('/create-category').then((response)=>{
                 Toast.fire({
                 icon: 'success',
                 title: 'Category added successfully'
          })
               get_this.$router.push('/categories');
               get_this.form.category_name = null;
            }).catch((error)=>{

            })
        }

    },
    computed:{
        
    }
}
</script>

<style scoped>

</style>