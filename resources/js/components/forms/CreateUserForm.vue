<script setup>
import Modal from '../Modal.vue';

defineProps({
    show: Boolean
})
</script>
<template>
    <Modal>
        <template slot="header">
            Create new User
        </template>
        <template slot="content">
            <form name="user" action="/api/users" method="post">
                <input type="text" name="name" id="name" placeholder="Name..">
                <input type="email" name="email" id="email" placeholder="Email..">
                <input type="password" name="password" id="password" placeholder="Password..">
                <button type="submit">Create</button>
            </form>
        </template>
    </Modal>
</template>
