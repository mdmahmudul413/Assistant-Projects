<template>
    <div class="detail-view">
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
                                        <img :src="product.image" id="current" alt="#" height="500"/>
                                    </div>
                                    <div class="images">
                                        <img :src="product.image" class="img" alt="#"/>
                                        <img :src="otherImage.image" class="img" alt="#" v-for="(otherImage, index) in product.other_images" :key="index"/>
                                    </div>
                                </main>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="product-info">
                                <h2 class="title">{{product.name}}</h2>
                                <p class="category"><i class="lni lni-tag"></i> Category:<a href="javascript:void(0)">{{product.category_name}}</a></p>
                                <h3 class="price">BDT {{product.selling_price}}<span>BDT {{product.regular_price}}</span></h3>
                                <p class="info-text">{{product.short_description}}</p>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group color-option">
                                            <label class="title-label">Quantity</label>
                                            <input v-model="qty" type="number" min="1" class="form-control" required/>
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
                            <div class="col-lg-12 col-12">
                                <div class="info-body custom-responsive-margin">
                                    <h4>Details</h4>
                                    <div v-html="product.long_description"></div>
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
                                        <img src="/assets/images/blog/comment1.jpg" alt="#">
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
                                        <img src="/assets/images/blog/comment2.jpg" alt="#">
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
                                        <img src="/assets/images/blog/comment3.jpg" alt="#">
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
        <div class="modal fade review-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Leave a Review</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="review-name">Your Name</label>
                                    <input class="form-control" type="text" id="review-name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="review-email">Your Email</label>
                                    <input class="form-control" type="email" id="review-email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="review-subject">Subject</label>
                                    <input class="form-control" type="text" id="review-subject" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="review-rating">Rating</label>
                                    <select class="form-control" id="review-rating">
                                        <option>5 Stars</option>
                                        <option>4 Stars</option>
                                        <option>3 Stars</option>
                                        <option>2 Stars</option>
                                        <option>1 Star</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="review-message">Review</label>
                            <textarea class="form-control" id="review-message" rows="8" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer button">
                        <button type="button" class="btn">Submit Review</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        name: "DetailView",
        data(){
            return {
                id: this.$route.params.id,
                product: {},
                qty: 1,
            }
        },
        created() {
            axios.get('http://localhost/Web-Design-Dev-Using-Lara-Vue/class-35/day-35/public/api/get-product-by-id/' + this.id)
                .then(response =>{
                    this.product = response.data;
                    console.log(this.product);
                });
        },
        methods: {
            addToCart() {
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
        },
    }

</script>

<style scoped>

</style>