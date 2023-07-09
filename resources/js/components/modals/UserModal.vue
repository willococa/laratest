<script setup>
defineProps({
    show: Boolean
})
</script>
<template>
    <div v-if="show" class="modal-mask">
        <div class="modal-container">
            <header class="modal-header">
                <h1><slot/></h1>
            </header>
            <div class="modal-content">
                <form name="user" action="/api/users" method="post">
                    <input type="text" name="name" id="name" placeholder="Name..">
                    <input type="email" name="email" id="email" placeholder="Email..">
                    <input type="password" name="password" id="password" placeholder="Password..">
                    <button type="submit">Create new User</button>
                </form>
            </div>
            <footer class="modal-footer">
                <button @click="$emit('close')">Close</button>
            </footer>
        </div>
    </div>
</template>
<style>
.modal-mask{
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, .4);
    display: grid;
    place-items: center
}
.modal-container{
    background: white;
    padding: 1rem;
    width: 75vw;
    max-width: 500px;

}
.modal-container form{
    display: flex;
    flex-direction: column;
}
</style>
