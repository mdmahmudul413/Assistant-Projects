<template>
  <div class="home">
    <HeroSection/>
    <FeaturedCategories/>
    <TrendingProduct/>
    <BannerSection/>
    <SpecialOffer/>
    <HomeProduct/>
    <BrandSection/>
    <BlogSection/>
    <ShippingInfo/>
  </div>
</template>

<script>
  import HeroSection from "@/components/home/HeroSection";
  import FeaturedCategories from "@/components/home/FeaturedCategories";
  import TrendingProduct from "@/components/home/TrendingProduct";
  import BannerSection from "@/components/home/BannerSection";
  import SpecialOffer from "@/components/home/SpecialOffer";
  import HomeProduct from "@/components/home/HomeProduct";
  import BrandSection from "@/components/home/BrandSection";
  import BlogSection from "@/components/home/BlogSection";
  import ShippingInfo from "@/components/home/ShippingInfo";

  export default {
    name: 'HomeView',
    components: {HeroSection,FeaturedCategories,TrendingProduct,BannerSection,SpecialOffer,HomeProduct,BrandSection,BlogSection,ShippingInfo}
  }
</script>

<style scoped></style>
