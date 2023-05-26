<template>
  <HeaderView/>
  <router-view :key="$route.fullPath"/>
  <FooterView/>
</template>

<script>
  import HeaderView from "@/components/includes/HeaderView";
  import FooterView from "@/components/includes/FooterView";
  export default {
    name: "App",
    components: {
      HeaderView, FooterView
    }
  }
</script>

