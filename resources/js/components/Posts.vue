
<script setup>
import { computed, ref} from "vue";
import {usePostStore} from "./stores/PostStore";
import CreatePostForm from "./forms/CreatePostForm.vue"
let store = usePostStore()
store.fetchPosts()
let posts= computed(()=>store.getPosts)
let showModal = ref(false)
</script>
<template>
    <div>Posts ({{ posts.length }})</div>
    <table>
        <thead>
            <tr>
                <th>Post Id</th>
                <th>Post Title</th>
                <th>Post Excerpt</th>
                <th>Post Created At</th>
                <th>Post Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="post in posts">
                <td>{{post.id}}</td>
                <td>{{post.title}}</td>
                <td>{{post.excerpt}}</td>
                <td>{{post.created_at}}</td>
                <td><button>Edit</button></td>
                <td><button>Delete</button></td>
            </tr>
        </tbody>
        <tfoot>
            <td><button @click="showModal = true">New post</button></td>
        </tfoot>
    </table>
    <Teleport to="body">
        <CreatePostForm :show="showModal" @close="showModal=false"/>
    </Teleport>
</template>
