<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">LinkList</div>
                        <posts></posts>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Posts from './Posts.vue';
    export default {
        components: {Posts}
    }
</script>
