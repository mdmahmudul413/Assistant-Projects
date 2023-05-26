import { createStore } from 'vuex'

export default createStore({
    state () {
        return {
            products: [],
            subTotal:0,
            taxTotal:0,
            shippingCost: 100,
            grandTotal:0,
            customer: {id:'', name:'', token: ''}
        }
    },
    getters:{
        // to access the property of state we have to call getters method
        getProducts(state)
        {
            return state.products;
        },
        getSubTotal(state)
        {
            return state.subTotal;
        },
        getTaxTotal(state)
        {
            return state.taxTotal;
        },
        getShippingCost(state)
        {
            return state.shippingCost;
        },
        getGrandTotal(state)
        {
            return state.grandTotal;
        },
        getCustomer(state)
        {
            return state.customer;
        }
    },

    mutations: {
        // state is global parameter, payload is a object
        // we will send payload while calling addToCart
        // when we click on Add to Cart button this function will call
        // payload object is mainly a object of product name, price, qty, etc.
        addToCart (state, payload) {
            state.products.push(payload);
        },

        removeCartProduct (state, payload) {
            var index = state.products.findIndex(product => product.id == payload.id);
            state.products.splice(index, 1);
        },

        updateCart (state, payload) {
            var product = state.products.find(product => product.id == payload.id);
            product.qty =  payload.qty;
            product.total = payload.qty * product.price;
        },

        updateSubTotalPrice (state) {
            var sum = 0;
            for (var i = 0; i < state.products.length; i++)
            {
                sum = Number(sum) + Number(state.products[i].total);
            }
            state.subTotal = sum;
        },

        updateTaxTotalPrice (state) {
            state.taxTotal =  Math.round(((state.subTotal * 15) / 100));
        },

        updateGrandTotalPrice (state) {
            state.grandTotal = state.subTotal + state.shippingCost + state.taxTotal;
        },

        addCustomer(state, payload)
        {
            state.customer.id = payload.id;
            state.customer.name = payload.name;
            state.customer.token = payload.token;
        },

        removeCustomer(state)
        {
            state.customer.id = '';
            state.customer.name = '';
            state.customer.token = '';
        }
    }
})
