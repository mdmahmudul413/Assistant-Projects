<template>
  <MyHeader/>
  <router-view :key="$route.path"/>
  <MyFooter/>
</template>

<script>
  import MyHeader from "@/components/includes/MyHeader";
  import MyFooter from "@/components/includes/MyFooter";
  export default {
    name: "App",
    components:{MyHeader,MyFooter}
  }
</script>

<style scoped>
</style>
