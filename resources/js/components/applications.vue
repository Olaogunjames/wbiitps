<template>
    <div>
   <!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Applications</h3>
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
          <div v-if = "applications.length == 0"> YOU HAVE NO APPLICATION YET </div>
          <table class="table">
  <thead>
    <tr>        
      <th scope="col">Name</th>
      <th scope="col">School</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Level</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">About Applicant</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr  v-for="application in applications" :key="application.id">
      <th scope="row">{{application.name}}</th>
      <td>{{application.school}}</td>
      <td>{{application.email}}</td>
      <td>{{application.phone_number}}</td>
      <td>{{application.level}}</td>
      <td>{{application.start_date}}</td>
      <td>{{application.end_date}}</td>
      <td>{{application.yourself}}</td>
      <td v-if="application.feedback == '0'">
      <div class="row">
          <div class="col-sm-6"><button @click="accept(application.id)" class="btn btn-success">Accept</button></div>
          <div class="col-sm-6"><button  @click="reject(application.id)" class="btn btn-danger">Reject</button></div>
          </div>
      </td>
      <td v-else> {{application.feedback}}</td>
    </tr>    
  </tbody>
</table>
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
              applications: {},              
            }
        },
         methods:{
          loadApplications(){                                                           
                axios.get('api/applications').then((response)  =>  {
                    setTimeout(function(){
                    NProgress.done()
                    }, 2000);
                    this.applications = response.data;
                 })          
            },
            accept($id){
                axios.post('/api/accept/'+$id).then(
                    ()=>{
                        toast.fire({
                        type: 'success',
                        title: 'Accepted'
                        })                           
                        Fire.$emit('afterAction');
                    }).catch(
                        ()=>{
                        toast.fire({
                        type: 'error',
                        title: 'Data not correctly inputed'
                        })                        
                        });              
            },   

            reject($id){
                axios.post('/api/reject/'+$id).then(
                    ()=>{
                        toast.fire({
                        type: 'warning',
                        title: 'Rejected'
                        })                           
                        Fire.$emit('afterAction');
                    }).catch(
                        ()=>{
                        toast.fire({
                        type: 'error',
                        title: 'Data not correctly inputed'
                        })                        
                        });              
            },                                                      
        },         
        mounted() {          
            console.log('Component mounted.')            
            this.loadApplications();  
            Fire.$on('afterAction', () => {this.loadApplications()})           
        }
    }
</script>
