<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">LinkList</div>
                    <div class="panel-body">
                        <posts></posts>
                        <hr>
                        <post-form></post-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Posts from './Posts.vue';
    import PostForm from './PostForm.vue';
    export default {
        components: [Posts, PostForm]
    }
</script>
