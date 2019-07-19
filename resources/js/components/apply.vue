<template>
    <div>
   <!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>APPLY</h3>
  </div>
</div>

<!--Inner Content start-->
<div class="inner-content loginWrp">
  <div class="container"> 
    <!--Register Start-->
    <div class="row">
      <div class="col-md-3 col-sm-2"></div>
      <div class="col-md-6 col-sm-8">
        <div class="login">
          <div class="contctxt">Please complete all fields.</div>
          <div class="formint conForm">
            <form @submit.prevent="applycompany" id="applyid">                                        
                  <div class="form-group">                        
                  <input v-model="form.name" type="text" name="name" placeholder="Enter Name"
                      class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                  <has-error :form="form" field="name"></has-error>
                  </div>
                  <div class="form-group">                        
                  <input v-model="form.school" type="text" name="school" placeholder="Enter School Name"
                      class="form-control" :class="{ 'is-invalid': form.errors.has('school') }">
                  <has-error :form="form" field="school"></has-error>
                  </div>                    
                  <div class="form-group">                        
                  <input v-model="form.email" type="email" name="email" placeholder="Enter Email"
                      class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                  <has-error :form="form" field="email"></has-error>
                  </div>  
                  <div class="form-group">                        
                  <input v-model="form.phone_number" type="number" name="phone_number" placeholder="Enter Phone Number"
                      class="form-control" :class="{ 'is-invalid': form.errors.has('phone_number') }">
                  <has-error :form="form" field="phone_number"></has-error>
                  </div>
                  <div class="form-group">                        
                  <input v-model="form.level" type="number" name="level" placeholder="Enter Level"
                      class="form-control" :class="{ 'is-invalid': form.errors.has('level') }">
                  <has-error :form="form" field="level"></has-error>
                  </div>
                  <div class="form-group">                        
                  <input v-model="form.start_date" type="date" name="start_date" placeholder="Enter Start Date"
                      class="form-control" :class="{ 'is-invalid': form.errors.has('start_date') }">
                  <has-error :form="form" field="start_date"></has-error>
                  </div>
                  <div class="form-group">                        
                  <input v-model="form.end_date" type="date" name="end_date" placeholder="Enter End Date"
                      class="form-control" :class="{ 'is-invalid': form.errors.has('end_date') }">
                  <has-error :form="form" field="end_date"></has-error>
                  </div>
                  <div class="form-group"> 
                  <textarea v-model="form.yourself"  placeholder="About Yourself" name="yourself" id="" cols="10" rows="5"  class="form-control" :class="{ 'is-invalid': form.errors.has('yourself') }"></textarea>   
                  <has-error :form="form" field="yourself"></has-error>                       
                  </div>             
                  <center>
                  <button type="submit" class="applyclass btn btn-success" style="color:#fff;">Apply</button>
                  </center>
                  </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-2"></div>
    </div>
    
    <!--Register End--> 
</div>
</div>
<!--Inner Content End--> 


  </div>
  <!-- /#wrapper -->

</template>

<script>
    import Sidebar from './Sidebar'
   export default {
      data(){
            return {
            //   company: {},
            form: new Form({
                    user_id: this.$route.params.id,
                    name: '',
                    school: '',
                    email: '',
                    phone_number: '',
                    level: '',
                    start_date: '',
                    end_date: '',
                    yourself: '',                                       
                    feedback: '0', 
                })                 
            }
        },
         methods:{
        //   loadCompany(){                                                           
        //         axios.get('api/companyapply').then((response)  =>  {
        //             setTimeout(function(){
        //             NProgress.done()
        //             }, 2000);
        //             this.company = response.data;
        //          })          
        //     }, 
        
        applycompany(){
                $('.applyclass').html('<i class="fa fa-spin fa-spinner"></i>');
                this.form.post('../api/applyto').then(
                    ()=>{
                        toast.fire({
                        type: 'success',
                        title: 'Application Successful'
                        })   
                        $('.applyclass').html('Apply'); 
                        $('#applyid').trigger('reset'); 
                        Fire.$emit('afterAction');
                    }).catch(
                        ()=>{
                        toast.fire({
                        type: 'error',
                        title: 'Data not correctly inputed'
                        })   
                        $('.applyclass').html('Apply');
                        });                                      
            },

        },         
        mounted() {          
            console.log('Component mounted.')            
            // this.loadCompany();  
            // Fire.$on('afterAction', () => {this.loadCompany()})           
        }
    }
</script>
