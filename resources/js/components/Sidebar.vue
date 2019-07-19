<template>
   <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Admin Panel </div>
      <div class="list-group list-group-flush">
        <router-link to="dashboard" class="list-group-item list-group-item-action bg-light">Dashboard</router-link>        
        <router-link to="applications" class="list-group-item list-group-item-action bg-light">Aplications</router-link>       
      </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
