<template>
    <div class="">
        <h1 ref="myref">Hook Practice</h1> 
        <p>My name is {{ name }}</p>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                name: 'Sadek',
            }
        },

        beforeCreate() {
            // It can not access data() and other staffs
            console.log(this.name);
        },
        
        created() {
            // We call mostly initial data from created hood
            // console.log(this.$refs.myref);

            // But we can access all other staffs
            console.log(this.name);
        },

        mounted() {
            // we can access html elements
            console.log(this.$refs.myref);
        },
    }
</script>

