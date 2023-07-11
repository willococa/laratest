
<script setup>
import { computed, ref} from "vue";
import {useUserStore} from "./stores/UserStore";
import CreateUserForm from  "./forms/CreateUserForm.vue"
let store = useUserStore()
store.fetchUsers()
let users = computed(()=>store.getUsers)
let showModal = ref(false)



</script>

<template>
    <div>Users ({{ store.getTotal }})</div>
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
                <td><button @click="showModal = true">Edit</button></td>
                <td><button>Delete</button></td>
            </tr>
        </tbody>
        <tfoot>
            <td><button>New User</button></td>
        </tfoot>
    </table>
    <Teleport to="body">
        <CreateUserForm :show="showModal" @close="showModal=false"/>
    </Teleport>
</template>
