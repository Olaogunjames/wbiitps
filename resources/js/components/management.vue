<template>
    <div>
   <!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Management</h3>
  </div>
</div>

<!--Inner Content start-->
<div class="inner-content listing">
  <div class="container"> 
    
    <!--Job Listing Start-->
    <div class="row">
      <div class="col-md-3 col-sm-4">
        <div class="leftSidebar">
          <div class="sidebarpad">
           
            <div class="ad"><img src="images/ad.jpg"></div>
          </div>
        </div>
      </div>
      <div class="col-md-9 col-sm-8">
        <div class="sortbybar">
          <div class="sortbar listingSearch">
            
            <div class="form-wrap">
        
      </div>
            
            
            
            
          </div>
        </div>
        <ul class="listService">
          <li v-for="company in companies" :key="company.id">
        <div class="listWrpService featured-wrap">
          <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-3">
              <div class="listImg"><img src="images/feature01.png" alt=""></div>
            </div>
            <div class="col-md-10 col-sm-9 col-xs-9">
            
            <div class="row">
            <div class="col-md-9">
              <h3><a :href="'company/'+company.id">{{company.company_name}}</a></h3>
              <p>{{company.category}}</p>
              <ul class="featureInfo innerfeat">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i> {{company.location}}</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i> {{company.created_at | humanDate}} </li>
                <li></li>
              </ul>        
              <p class="para">{{company.description}}</p>              
              </div>            
              <div class="col-md-3">
              <div class="click-btn apply"><a :href="'company/'+company.id">Apply Now</a></div>         
              </div>
              </div>       
            </div>
          </div>
        </div>
      </li>
      
        </ul>       
      </div>
    </div>
    
    <!--Job Listing End--> 
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
              companies: {},               
            }
        },
         methods:{
          loadCompany(){                                                           
                axios.get('api/management').then((response)  =>  {
                    setTimeout(function(){
                    NProgress.done()
                    }, 2000);
                    this.companies = response.data;
                 })          
            },                                                        
        },         
        mounted() {          
            console.log('Component mounted.')            
            this.loadCompany();  
            Fire.$on('afterAction', () => {this.loadCompany()})           
        }
    }
</script>
