
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.use(VueRouter)
import NProgress from 'nprogress';
import { Form, HasError, AlertError } from 'vform';
import moment from 'moment';
import swal from 'sweetalert2'
window.swal = swal;
window.NProgress = NProgress;
window.Fire = new Vue();

 
const toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});
window.toast = toast;

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

Vue.filter('humanDate', function(created){
  return moment(created).format('MMMM Do YYYY, h:mm:ss a');
})




const routes = [
    { name: 'landing', path: '/', component: require('./components/landing.vue').default }, 
    { name: 'dashboard', path: '/dashboard', component: require('./components/dashboard.vue').default }, 
    { name: 'applications', path: '/applications', component: require('./components/applications.vue').default },   
    { name: 'it', path: '/IT', component: require('./components/it.vue').default }, 
    { name: 'management', path: '/Management', component: require('./components/management.vue').default }, 
    { name: 'accounting', path: '/Accounting', component: require('./components/accounting.vue').default }, 
    { name: 'design', path: '/Design', component: require('./components/design.vue').default },    
    { name: 'apply', path: '/company/:id', component: require('./components/apply.vue').default },    
  ]

  const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
  })
  

  router.beforeResolve((to, from, next) => {
    if (to.name) {
        NProgress.start()
        NProgress.set(0.4); // To set a progress percentage, call .set(n), where n is a number between 0..1
        NProgress.inc(); // To increment the progress bar, just use .inc(). This increments it with a random amount. This will never get to 100%: use it for every image load (or similar).If you want to increment by a specific value, you can pass that as a parameter
        NProgress.configure({ ease: 'ease', speed: 500 }); // Adjust animation settings using easing (a CSS easing string) and speed (in ms). (default: ease and 200)
        NProgress.configure({trickleSpeed: 800 }); //Adjust how often to trickle/increment, in ms.
    }
    next()
  })
  
  
  router.afterEach((to, from) => {
       
  })
  
 


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('Sidebar', require('./components/Sidebar.vue').default);
// Vue.component('UserSidebar', require('./components/UserSidebar.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
