<template>
    <div>Users ({{ users.length }})</div>
    <table>
        <thead>
            <tr>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="user in users">
                <td>{{user.name}}</td>
                <td>{{user.email}}</td>
                <td><button>Edit</button></td>
                <td><button>Delete</button></td>
            </tr>
        </tbody>
        <tfoot>
            <td><button>New User</button></td>
        </tfoot>
    </table>
    <ul>
        <li v-for="user in users" v-text="user.name"></li>
    </ul>
</template>
<script setup>
import axios from 'axios';
import { ref, onMounted} from 'vue';
let  users= ref(0)
onMounted(()=>{
     axios.get('http://localhost:8000/api/users').then(({data})=>{
        users.value = data.users
     })
})
</script>
