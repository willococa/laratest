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
            <td><button>New post</button></td>
        </tfoot>
    </table>
</template>
<script setup>
import axios from 'axios';
import { ref, onMounted} from 'vue';
let  posts= ref(0)
onMounted(()=>{
     axios.get('http://localhost:8000/api/posts').then(({data})=>{
        posts.value = data.posts
        console.log(posts)
     })
})
</script>
