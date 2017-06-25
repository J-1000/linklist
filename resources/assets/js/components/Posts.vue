<template>
    <div class="panel-body">
        <article v-for="post in posts" :key="post.id">
            <post :post="post" ></post>
        </article>
    </div>
</template>

<script>
import Post from './Post.vue';
export default {
        components: {Post},
        data () {
            return {
                posts: []
            }
        },
        methods: {
            fetchData() {
                axios.get('/posts').then(response => {
                    this.posts = response.data;
                });
            }
        },
        created() {
            this.fetchData();
        }
    }
</script>
