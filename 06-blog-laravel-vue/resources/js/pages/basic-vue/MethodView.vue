<template>
    <h1>The Number is {{ counter }}</h1>
    <button @click="updateCounter(1)">Increase</button>
    <button @click="updateCounter(-1)">Decrease</button>

    <br><br><br><br>

    <div v-for="(blog, index) in blogs" :key="index" v-if="blogs.length">
        <h1>{{ blog.title }}</h1>
       <p>{{ blog.post }}</p> 
    </div>

    <br><br><br><br>


    <div>
        <h1 v-if="showItem">Show this item if 'showItem' is true</h1>
        <h1 v-else>Show this item if 'showItem' is false</h1>
        <button @click="showItem = !showItem">Change Show Item</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                counter: 0,
                blogs: [],
                showItem: false,
            }
        },

        methods: {
            updateCounter(number){
                this.counter += number;
            },
        },

        created(){
            this.counter = 100;

            let posts = [
                    {id: 1, title: 'This is title one', post: 'This is post one'},
                    {id: 2, title: 'This is title two', post: 'This is post two'},
                    {id: 3, title: 'This is title three', post: 'This is post three'},
                    {id: 4, title: 'This is title four', post: 'This is post four'},
                    {id: 5, title: 'This is title five', post: 'This is post five'},
                    {id: 6, title: 'This is title six', post: 'This is post six'},
                ]
            this.blogs = posts;
        }
    }
</script>