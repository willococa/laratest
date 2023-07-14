
<script setup>
import { ref} from "vue";
import CreatePostForm from "./forms/CreatePostForm.vue"
import PostsTable from "./PostsTable.vue";
let showModal = ref(false)
</script>
<template>
        <PostsTable  @showNow="showModal = true"></PostsTable>
    <Teleport to="body">
        <CreatePostForm :show="showModal" @close="showModal=false"/>
    </Teleport>

</template>
