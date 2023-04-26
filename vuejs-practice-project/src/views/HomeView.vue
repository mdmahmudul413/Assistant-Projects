<template>
  <div class="home">
    <HeroArea/>
    <FeaturedCategory/>
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
import HeroArea from "@/components/home/HeroArea";
import FeaturedCategory from "@/components/home/FeaturedCategory";
import TrendingProduct from "@/components/home/TrendingProduct";
import BannerSection from "@/components/home/BannerSection";
import SpecialOffer from "@/components/home/SpecialOffer";
import HomeProduct from "@/components/home/HomeProduct";
import BrandSection from "@/components/home/BrandSection";
import BlogSection from "@/components/home/BlogSection";
import ShippingInfo from "@/components/home/ShippingInfo";

export default {
  name: 'HomeView',
  components: {
    HeroArea,
    FeaturedCategory,
    TrendingProduct,
    BannerSection,
    SpecialOffer,
    HomeProduct,
    BrandSection,
    BlogSection,
    ShippingInfo,
  }
}
</script>
