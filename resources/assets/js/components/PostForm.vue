<template>
        <div>
            <div class="form-group">
                <label for="title"></label>
                <input type="text" class="form-control" placeholder="Title of your Post" v-model="title">
                <label for="url"></label>
                <input type="text" class="form-control" placeholder="Url" v-model="url">
                <label for="source domain"></label>
                <input type="text" class="form-control" placeholder="Source domain" v-model="source_domain">
            </div>
            <button type="submit" class="btn btn-default" @click="addPost">Post it!</button>
        </div>
</template>

<script>
    export default {
        data () {
            return {
                title: null,
                url: null,
                source_domain: null,
            }
        },
        methods: {
            addPost() {
                axios.post('/posts', {
                    title: this.title,
                    url: this.url,
                    source_domain: this.source_domain
                }).then(response =>{

                });
            }
        }
    }
</script>
