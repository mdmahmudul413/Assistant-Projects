<template>
    <div class="detail">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="breadcrumbs-content">
                            <h1 class="page-title">Single Product</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                            <li><a href="index.html">Shop</a></li>
                            <li>Single Product</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <section class="item-details section">
            <div class="container">
                <div class="top-area">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="product-images">
                                <main id="gallery">
                                    <div class="main-img">
                                        <img :src="product.image" id="current" alt="#">
                                    </div>
                                    <div class="images">
                                        <img src="/images/product-details/01.jpg" class="img" alt="#">
                                        <img src="/images/product-details/02.jpg" class="img" alt="#">
                                        <img src="/images/product-details/03.jpg" class="img" alt="#">
                                        <img src="/images/product-details/04.jpg" class="img" alt="#">
                                        <img src="/images/product-details/05.jpg" class="img" alt="#">
                                    </div>
                                </main>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="product-info">
                                <h2 class="title">{{product.name}}</h2>
                                <p class="category">
                                    <i class="lni lni-tag"></i> Category:
                                    <a href="javascript:void(0)"> {{product.category}}</a>
                                </p>
                                <p class="category">
                                    <i class="lni lni-tag"></i> Brand:
                                    <a href="javascript:void(0)"> {{product.brand}}</a>
                                </p>
                                <h3 class="price">Tk. {{product.selling_price}}<span>Tk. {{product.regular_price}}</span></h3>
                                <p class="info-text">{{product.short_description}}</p>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group color-option">
                                            <label class="title-label" for="size">Choose color</label>
                                            <div class="single-checkbox checkbox-style-1">
                                                <input type="checkbox" id="checkbox-1" checked>
                                                <label for="checkbox-1"><span></span></label>
                                            </div>
                                            <div class="single-checkbox checkbox-style-2">
                                                <input type="checkbox" id="checkbox-2">
                                                <label for="checkbox-2"><span></span></label>
                                            </div>
                                            <div class="single-checkbox checkbox-style-3">
                                                <input type="checkbox" id="checkbox-3">
                                                <label for="checkbox-3"><span></span></label>
                                            </div>
                                            <div class="single-checkbox checkbox-style-4">
                                                <input type="checkbox" id="checkbox-4">
                                                <label for="checkbox-4"><span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="color">Battery capacity</label>
                                            <select class="form-control" id="color">
                                                <option>5100 mAh</option>
                                                <option>6200 mAh</option>
                                                <option>8000 mAh</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group quantity">
                                            <label for="color">Quantity</label>
                                            <input type="number" class="form-control" v-model="qty" min="1"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-content">
                                    <div class="row align-items-end">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="button cart-button">
                                                <button class="btn" style="width: 100%;" @click="addToCart">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="wish-button">
                                                <button class="btn"><i class="lni lni-reload"></i> Compare</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="wish-button">
                                                <button class="btn"><i class="lni lni-heart"></i> To Wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-details-info">
                    <div class="single-block">
                        <div class="row">
                            <div class="col-12">
                                <div class="info-body custom-responsive-margin" v-html="product.long_description">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="single-block give-review">
                                <h4>4.5 (Overall)</h4>
                                <ul>
                                    <li>
                                        <span>5 stars - 38</span>
                                        <i class="lni lni-star-filled"></i>
                                        <i class="lni lni-star-filled"></i>
                                        <i class="lni lni-star-filled"></i>
                                        <i class="lni lni-star-filled"></i>
                                        <i class="lni lni-star-filled"></i>
                                    </li>
                                    <li>
                                        <span>4 stars - 10</span>
                                        <i class="lni lni-star-filled"></i>
                                        <i class="lni lni-star-filled"></i>
                                        <i class="lni lni-star-filled"></i>
                                        <i class="lni lni-star-filled"></i>
                                        <i class="lni lni-star"></i>
                                    </li>
                                    <li>
                                        <span>3 stars - 3</span>
                                        <i class="lni lni-star-filled"></i>
                                        <i class="lni lni-star-filled"></i>
                                        <i class="lni lni-star-filled"></i>
                                        <i class="lni lni-star"></i>
                                        <i class="lni lni-star"></i>
                                    </li>
                                    <li>
                                        <span>2 stars - 1</span>
                                        <i class="lni lni-star-filled"></i>
                                        <i class="lni lni-star-filled"></i>
                                        <i class="lni lni-star"></i>
                                        <i class="lni lni-star"></i>
                                        <i class="lni lni-star"></i>
                                    </li>
                                    <li>
                                        <span>1 star - 0</span>
                                        <i class="lni lni-star-filled"></i>
                                        <i class="lni lni-star"></i>
                                        <i class="lni lni-star"></i>
                                        <i class="lni lni-star"></i>
                                        <i class="lni lni-star"></i>
                                    </li>
                                </ul>

                                <button type="button" class="btn review-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Leave a Review
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="single-block">
                                <div class="reviews">
                                    <h4 class="title">Latest Reviews</h4>

                                    <div class="single-review">
                                        <img src="/images/blog/comment1.jpg" alt="#">
                                        <div class="review-info">
                                            <h4>Awesome quality for the price
                                                <span>Jacob Hammond
</span>
                                            </h4>
                                            <ul class="stars">
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor...</p>
                                        </div>
                                    </div>


                                    <div class="single-review">
                                        <img src="/images/blog/comment2.jpg" alt="#">
                                        <div class="review-info">
                                            <h4>My husband love his new...
                                                <span>Alex Jaza
</span>
                                            </h4>
                                            <ul class="stars">
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star"></i></li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor...</p>
                                        </div>
                                    </div>


                                    <div class="single-review">
                                        <img src="/images/blog/comment3.jpg" alt="#">
                                        <div class="review-info">
                                            <h4>I love the built quality...
                                                <span>Jacob Hammond
</span>
                                            </h4>
                                            <ul class="stars">
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor...</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "DetailView",
        data() {
            return {
                id: this.$route.params.id,
                product:{},
                qty: 1,
            }
        },
        created() {
            this.getProductById();
        },
        methods: {
            getProductById()
            {
                axios.get('http://localhost/ecommerce-b2/public/api/product-by-id/'+this.id).then((response) => {
                    this.product = response.data;
                })
            },

            addToCart()
            {
                var product = {id: this.product.id, name: this.product.name, price: this.product.selling_price, image: this.product.image, qty: this.qty, total: this.product.selling_price * this.qty}
                var cartProducts = this.$store.getters.getProducts;
                var check = cartProducts.find(item => item.id == this.product.id);
                if (check)
                {
                    this.$store.commit('updateCart', {id: this.product.id, qty: check.qty + this.qty})
                    this.$store.commit('updateSubTotalPrice');
                    this.$store.commit('updateTaxTotalPrice');
                    this.$store.commit('updateGrandTotalPrice');
                }
                else
                {
                    this.$store.commit('addToCart', product);
                    this.$store.commit('updateSubTotalPrice');
                    this.$store.commit('updateTaxTotalPrice');
                    this.$store.commit('updateGrandTotalPrice');
                }
                this.$router.push('/show-cart');
            }
        }
    }
</script>

<style scoped>

</style>