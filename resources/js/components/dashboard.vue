<template>
    <div>
   <!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Dashboard</h3>
  </div>
</div>
<!--inner heading end-->   

    <br><br><br><br>
    <div class="d-flex container" id="wrapper">
        
    <div class="col-sm-2">
    <!-- Sidebar -->
    <Sidebar />    
    <!-- /#sidebar-wrapper -->
    </div>

    <!-- Page Content -->
    <div class="col-sm-10">
    <div id="page-content-wrapper">

      <div class="container-fluid">
       <table class="table">
    <tbody>   
        <tr>
          <th>Name of Company</th>
            <td>{{company.company_name}}</td>            
        </tr>   
        <tr>
          <th>Name of Personnel</th>
            <td>{{company.name}}</td>          
        </tr>        
        <tr>
          <th>Email</th>
            <td>{{company.email}}</td>            
        </tr>
        <tr>
          <th>Location</th>
            <td>{{company.location}}</td>            
        </tr>
        <tr>
          <th>Description</th>
            <td>{{company.description}}</td>            
        </tr>
        <tr>
          <th>Category</th>
            <td>{{company.category}}</td>            
        </tr>
        <tr>
          <th>Registered On</th>
            <td>{{company.created_at | humanDate}}</td>            
        </tr>
        <tr>
          <th>Action</th>
            <td><button  @click="editModal(company)">Edit</button></td>            
        </tr>
    </tbody>
    </table>
      </div>
    </div>
    </div>
    </div>
            <div class="modal fade in" id="editcompany" tabindex="-1" role="dialog" aria-labelledby="biodataTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Edit Company</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">                         
                  <form @submit.prevent="updateCompany" id="company">                                        
                  <div class="form-group">                        
                  <input v-model="form.name" type="text" name="name" placeholder="Enter Name"
                      class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                  <has-error :form="form" field="name"></has-error>
                  </div>
                  <div class="form-group">                        
                  <input v-model="form.company_name" type="text" name="company_name" placeholder="Enter Company Name"
                      class="form-control" :class="{ 'is-invalid': form.errors.has('company_name') }">
                  <has-error :form="form" field="company_name"></has-error>
                  </div>                    
                  <div class="form-group">                        
                  <input v-model="form.email" type="email" name="email" placeholder="Enter Email"
                      class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                  <has-error :form="form" field="email"></has-error>
                  </div>  
                  <div class="form-group">                        
                  <input v-model="form.location" type="text" name="location" placeholder="Enter Company Name"
                      class="form-control" :class="{ 'is-invalid': form.errors.has('location') }">
                  <has-error :form="form" field="location"></has-error>
                  </div>
                  <div class="form-group"> 
                  <textarea v-model="form.description"  placeholder="Enter Room Description" name="description" id="" cols="10" rows="5"  class="form-control" :class="{ 'is-invalid': form.errors.has('description') }"></textarea>                       
                  <has-error :form="form" field="description"></has-error>                       
                  </div>             
                  <center>
                  <button type="submit" class="updatecompany btn btn-info" style="color:#fff;">Update Company</button>
                  </center>
                  </form>
                  </div>
                  </div>                        
              </div>
              </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

</template>

<script>
    import Sidebar from './Sidebar'
   export default {
      data(){
            return {
              company: {},
             form: new Form({
                    id: '',
                    company_name: '',
                    name: '',
                    email: '',
                    location: '',
                    description: '',
                    category: ''
                })  
            }
        },
         methods:{
          loadCompany(){                                                           
                axios.get('api/user').then((response)  =>  {
                    setTimeout(function(){
                    NProgress.done()
                    }, 2000);
                    this.company = response.data;
                 })          
            },
            editModal(company){
              $('#editcompany').modal('show');
              this.form.fill(company);              
            },
            updateCompany(){
                $('.updatecompany').html('<i class="fa fa-spin fa-spinner"></i>');
                this.form.post('api/updatecompany/'+this.form.id).then(
                    ()=>{
                        Fire.$emit('afterAction');
                        $('#editcompany').modal('hide');
                        toast.fire({
                        type: 'success',
                        title: 'Company Updated Successfully'
                        })   
                        $('.updatecompany').html('Update Company'); 
                    }).catch(
                        ()=>{
                        toast.fire({
                        type: 'error',
                        title: 'Data not correctly inputed'
                        })   
                        $('.updatecompany').html('Update Company');
                        });                                      
            },                                              
        },         
        mounted() {          
            console.log('Component mounted.')            
            this.loadCompany();  
            Fire.$on('afterAction', () => {this.loadCompany()})           
        }
    }
</script>
