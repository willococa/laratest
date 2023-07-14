<script setup>

import { computed} from "vue";
import {usePostStore} from "./stores/PostStore";
defineEmits(['showNow'])
let store = usePostStore()
let posts = []
await store.fetchPosts().then(
    posts= computed(()=>store.getPosts)

)
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
                <td><button @click="$emit('showNow')">New post</button></td>
            </tfoot>
        </table>
</template>
