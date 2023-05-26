<template>
    <div class="checkout">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="breadcrumbs-content">
                            <h1 class="page-title">checkout</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="breadcrumb-nav">
                            <li><a href=""><i class="lni lni-home"></i> Home</a></li>
                            <li><a href="">Shop</a></li>
                            <li>checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <section class="checkout-wrapper section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="checkout-steps-form-style-1">
                            <ul id="accordionExample">
                                <li>
                                    <h6 class="title text-center">Your Personal Details </h6>
                                    <section class="checkout-steps-form-content" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label>Full Name</label>
                                                    <div class="row">
                                                        <div class="col-md-12 form-input form">
                                                            <input type="text" v-model="customer.name" placeholder="First Name"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label>Email Address</label>
                                                    <div class="form-input form">
                                                        <input type="text" v-model="customer.email" placeholder="Email Address"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label>Phone Number</label>
                                                    <div class="form-input form">
                                                        <input type="text" v-model="customer.mobile" placeholder="Phone Number"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label>Delivery Address</label>
                                                    <div class="form-input form">
                                                        <textarea placeholder="Delivery Address" v-model="customer.address"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label>Select Payment Method</label>
                                                    <div class="">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" v-model="customer.paymentType" id="inlineRadio1" value="1">
                                                            <label class="form-check-label" for="inlineRadio1">Cash On Delivery</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" v-model="customer.paymentType" id="inlineRadio2" value="2">
                                                            <label class="form-check-label" for="inlineRadio2">Online</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form button">
                                                    <button class="btn" type="button" @click="newOrder">Confirm Order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout-sidebar">
                            <div class="checkout-sidebar-price-table">
                                <h5 class="title">Your Cart Summery</h5>
                                <div class="sub-total-price">
                                    <div class="total-price" v-for="(product, key) in products" :key="key">
                                        <p class="value">{{product.name}} - ({{product.price}} * {{product.qty}}):</p>
                                        <p class="price">TK. {{product.price * product.qty}}</p>
                                    </div>
                                </div>
                                <div class="total-payable">
                                    <div class="payable-price">
                                        <p class="value">Sub Total:</p>
                                        <p class="price">Tk. {{subTotal}}</p>
                                    </div>
                                    <div class="payable-price">
                                        <p class="value">Tax Total (15%):</p>
                                        <p class="price">Tk. {{taxTotal}}</p>
                                    </div>
                                    <div class="payable-price">
                                        <p class="value">Shipping Cost:</p>
                                        <p class="price">Tk. {{shippingTotal}}</p>
                                    </div>
                                </div>
                                <div class="total-payable">
                                    <div class="payable-price">
                                        <p class="value">Total Payable:</p>
                                        <p class="price">Tk. {{grandTotal}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-sidebar-banner mt-30">
                                <a href="">
                                    <img src="/images/banner/banner.jpg" alt="#">
                                </a>
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
        name: "CheckoutView",
        data(){
          return {
              customer: {name: '', email: '', mobile: '', address: '', paymentType: ''}
          }
        },
        methods:{
            newOrder()
            {
                var data = {
                    customer: this.customer,
                    orderTotal:  this.grandTotal,
                    shippingTotal:  this.shippingTotal,
                    taxTotal:  this.taxTotal,
                    products: this.products,
                };
                axios.post('http://localhost/ecommerce-b2/public/api/new-order', data).then((response) => {
                    if (response.data.success == true)
                    {
                        this.$store.commit('addCustomer', {id: response.data.id, name: response.data.name, token: response.data.token });
                        this.$router.push('/complete-order');
                    }
                })
            }
        },
        computed: {
            products()
            {
                return this.$store.getters.getProducts;
            },
            subTotal()
            {
                return this.$store.getters.getSubTotal;
            },
            taxTotal()
            {
                return this.$store.getters.getTaxTotal;
            },
            shippingTotal()
            {
                return this.$store.getters.getShippingCost;
            },
            grandTotal()
            {
                return this.$store.getters.getGrandTotal;
            }
        }
    }
</script>

<style scoped>

</style>