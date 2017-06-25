<template>
   <div>
        <h4>{{post.title}}</h4>
        <div class="body">{{post.url}}</div>
   </div>
</template>

<script>
    export default {
        props: ['post']
    }
</script>
