<template>
    <section class="trending-product section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Trending Product</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 mb-3" v-for="(product, index) in products" :key="index">

                        <div class="single-product h-100">
                            <div class="product-image">
                                <img :src="product.image" alt="#" height="250"/>
                                <div class="button">
                                    <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <span class="category">{{product.category.name}}</span>
                                <h4 class="title">
                                    <router-link :to="{name: 'detail', params:{id:product.id}}">{{product.name}}</router-link>
                                </h4>
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star"></i></li>
                                    <li><span>4.0 Review(s)</span></li>
                                </ul>
                                <div class="price">
                                    <span>BDT {{product.selling_price}}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
</template>

<script>
    import axios from 'axios'
    export default {
        name: "TrendingProduct",
        data(){
          return {
              products: [],
          }
        },
        created() {
            axios.get('http://localhost/Web-Design-Dev-Using-Lara-Vue/class-35/day-35/public/api/get-trending-product')
                .then(response => {
                    this.products = response.data;
                // console.log(response.data);
            });
        }
    }
</script>

<style scoped>

</style>